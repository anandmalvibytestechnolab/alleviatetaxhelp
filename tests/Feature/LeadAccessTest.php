<?php

namespace Tests\Feature\Backend;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class LeadAccessTest extends TestCase
{
    /**
     * @test
     **/
    function guests_can_not_access_lead_index_page()
    {
        $this->withoutExceptionHandling();
        $response = $this->get(route('BE_LEADS_INDEX', ['leads']));

        $response->assertRedirect(route('BE_LOGIN_FORM'));
    }

    /**
     * @test
     **/
    function guests_can_not_access_ccpa_leads_index_page()
    {
        $this->withoutExceptionHandling();
        $response = $this->get(route('BE_LEADS_INDEX', ['ccpa']));

        $response->assertRedirect(route('BE_LOGIN_FORM'));
    }

    /**
     * @test
     **/
    function guests_can_not_export_leads()
    {
        $this->withoutExceptionHandling();
        $response = $this->post(route('BE_LEADS_EXPORT_INDEX', ['leads']));

        $response->assertRedirect(route('BE_LOGIN_FORM'));
    }

    /**
     * @test
     **/
    function guests_can_not_export_ccpa_leads()
    {
        $response = $this->post(route('BE_LEADS_EXPORT_INDEX', ['ccpa']));

        $response->assertRedirect(route('BE_LOGIN_FORM'));
    }

    /**
     * @test
     **/
    function authenticated_users_can_access_lead_index_page()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->be($user)->get(route('BE_LEADS_INDEX', ['leads']));

        $response->assertStatus(200);
    }

    /**
     * @test
     **/
    function authenticated_users_can_access_ccpa_lead_index_page()
    {
        $user = factory(User::class)->create();

        $response = $this->be($user)->get(route('BE_LEADS_INDEX', ['ccpa']));

        $response->assertStatus(200);
    }

    /**
     * @test
     **/
    function authenticated_users_can_export_leads()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->be($user)->post(route('BE_LEADS_EXPORT_INDEX', ['leads']));

        $response->assertStatus(200);
    }

    /**
     * @test
     **/
    function authenticated_users_can_export_ccpa_leads()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->be($user)->post(route('BE_LEADS_EXPORT_INDEX', ['ccpa']));

        $response->assertStatus(200);
    }
}