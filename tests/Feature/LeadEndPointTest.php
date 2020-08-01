<?php

namespace Tests\Feature;

use Models\Lead;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class LeadEndPointTest extends TestCase
{
    /////////////////////////////////////////////
    //////////////VALIDATION TESTS///////////////
    /////////////////////////////////////////////

    /**
     * @test
     **/
    function required_fields_are_validated()
    {
        $response = $this->from(route('FE_HOME_PAGE_SHOW'))->post(route('FE_LEAD_STORE', []));

        $response->assertRedirect(route('FE_HOME_PAGE_SHOW'));
        $response->assertSessionHasErrors(['email_address' => 'The email address field is required.']);
        $this->assertEquals(0, Lead::count());
    }

    /**
     * @test
     **/
    function email_must_be_a_valid_email_address()
    {
        $response = $this->from(route('FE_HOME_PAGE_SHOW'))->post(route('FE_LEAD_STORE', ['email_address' => 'this-is-not-an-email-address']));

        $response->assertRedirect(route('FE_HOME_PAGE_SHOW'));

        $response->assertSessionHasErrors(['email_address' => 'The email address must be a valid email address.']);
        $this->assertEquals(0, Lead::count());
    }

    /////////////////////////////////////////////
    ////////////////SUCCESS TESTS////////////////
    /////////////////////////////////////////////

    /**
     * @test
     **/
    function lead_is_stored()
    {
        $validParams = $this->validParams();

        $response = $this->from(route('FE_HOME_PAGE_SHOW'))->post(route('FE_LEAD_STORE', $validParams));

        $response->assertRedirect(route('FE_CONFIRMATION_PAGE_SHOW'));

        $this->assertEmpty(session('errors'));
        $this->assertEquals(1, Lead::where('email_address', $validParams['email_address'])->count());
    }

    private function validParams()
    {
        return [
          'email_address' => 'john@doe.com'
        ];
    }
}