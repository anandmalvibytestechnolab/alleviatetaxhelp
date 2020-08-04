<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     **/
    function non_existing_user_can_not_log_in()
    {
        $this->withoutExceptionHandling();
        $response= $this->post(route('BE_LOGIN_FORM'), ['email' => 'non-existing-user@example.com' , 'password' => 'fake-pasword']);

        $this->assertNull(auth()->user());
        $response->assertRedirect(route('BE_LOGIN_FORM'));
    }

    /**
     * @test
     */
    function email_and_password_fields_are_required_to_log_in()
    {
        $response= $this->post(route('BE_LOGIN_FORM'), ['email' => '' , 'password' => '']);

        $response->assertSessionHasErrors(['email' , 'password']);
    }

    /**
     * @test
     */
    function email_field_must_have_email_format()
    {
        $response= $this->post(route('BE_LOGIN_FORM'), ['email' => 'this-is-not-an-email-addres' , 'password' => 'password']);

        $response->assertSessionHasErrors(['email']);
    }

    /**
     * @test
     */
    function existing_active_user_can_log_in()
    {
        $this->withoutExceptionHandling();
        $validUser = factory(User::class)->create(['email' => 'jane@example.com']);

        $response= $this->post(route('BE_LOGIN_FORM'), ['email' => $validUser->email , 'password' => 'password']);

        $this->assertNull(session('errors'));
        $this->assertNotNull(auth()->user());
        $response->assertRedirect(route('BE_DASHBOARD_SHOW'));
        $this->assertEquals('jane@example.com', auth()->user()->email);
    }

    /**
     * @test
     */
    function existing_inactive_user_can_not_log_in()
    {
        $validUser = factory(User::class)->create(['email' => 'jane@example.com' , 'active' => 0]);

        $response= $this->post(route('BE_LOGIN_FORM'), ['email' => $validUser->email , 'password' => 'password']);

        $response->assertRedirect(route('BE_LOGIN_FORM'));
        $this->assertNull(auth()->user());
    }

    /**
     * @test
     */
    function existing_active_user_is_logged_out_if_their_status_changes_to_zero_during_active_session()
    {
        $this->withoutExceptionHandling();
        $validUser = factory(User::class)->create();

        $response= $this->post(route('BE_LOGIN_FORM'), ['email' => $validUser->email, 'password' => 'password']);

        $response->assertRedirect(route('BE_DASHBOARD_SHOW'));
        $this->assertNull(session('errors'));
        $this->assertNotNull(auth()->user());
        $this->assertEquals(1, auth()->user()->active);
        $this->assertEquals($validUser->email, auth()->user()->email);

        $logged_in_user = User::find($validUser->id);
        $logged_in_user->active= 0;
        $logged_in_user->save();

        $new_response = $this->actingAs($logged_in_user)->from(route('BE_DASHBOARD_SHOW'))->get(route('BE_DASHBOARD_SHOW'));

        $this->assertFalse(auth()->check());
        $new_response->assertRedirect(route('BE_LOGIN_FORM'));
    }

    /**
     * @test
     */
    function user_is_redirected_to_dashboard_page_from_login_page_if_already_logged_in()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response= $this->actingAs($user)->get(route('BE_LOGIN_FORM'));

        $this->assertNotNull(auth()->user());
        $response->assertRedirect(route('BE_DASHBOARD_SHOW'));
    }

    /**
     * @test
     */
    function user_can_log_out()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from(route('BE_DASHBOARD_SHOW'))->get(route('BE_LOGOUT'));

        $response->assertRedirect(route('BE_LOGIN_FORM'));
        $this->assertFalse(auth()->check());
    }

    /**
     * @test
     */
    function login_form_loads()
    {
        $this->withoutExceptionHandling();
        $response = $this->get(route('BE_LOGIN_FORM'));

        $response->assertStatus(200);
        $response->assertViewIs('backend.login');
        $response->assertSee(url(route('BE_LOGIN_FORM')));
    }
}
