<?php

namespace Tests\Feature;

use Models\CcpaLead;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class CcpaLeadEndPointTest extends TestCase
{
    /**
     * @test
     **/
    function required_fields_are_validated()
    {
        $response = $this->from(route('CCPA_PAGE_SHOW'))->post(route('FE_CCPA_LEAD_STORE'));

        $response->assertRedirect(route('CCPA_PAGE_SHOW'));
        $response->assertSessionHasErrors(['email_address' => 'The email address field is required.']);
    }

    /**
     * @test
     **/
    function email_address_must_be_valid()
    {
        $response = $this->from(route('CCPA_PAGE_SHOW'))->post(route('FE_CCPA_LEAD_STORE', ['email_address' => 'this-is-not-an-email-address']));

        $response->assertRedirect(route('CCPA_PAGE_SHOW'));
        $response->assertSessionHasErrors(['email_address' => 'The email address must be a valid email address.']);
    }

    /**
     * @test
     **/
    function ccpa_record_is_saved()
    {
        $this->withoutExceptionHandling();
        $validParams = $this->validParams();

        $response = $this->from(route('CCPA_PAGE_SHOW'))->post(route('FE_CCPA_LEAD_STORE', $validParams));

        $this->assertEmpty(session('errors'));
        $response->assertRedirect(route('CCPA_CONFIRMATION_PAGE_SHOW'));
        $this->assertEquals(1, CcpaLead::where('email_address', $validParams['email_address'])->count());
    }

    private function validParams()
    {
        return [
            'email_address' => 'jane@example.com'
        ];
    }
}