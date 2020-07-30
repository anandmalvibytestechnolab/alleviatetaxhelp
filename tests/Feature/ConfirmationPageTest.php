<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ConfirmationPageTest extends TestCase
{
    /**
     * @test
     **/
    function confirmation_page_loads()
    {
        $this->withoutExceptionHandling();
        $response = $this->get(route('FE_CONFIRMATION_PAGE_SHOW'));

        $response->assertStatus(200);
        $response->assertSee('Thank you for submitting your information to us.');
        $response->assertSee('Please keep your phone nearby, an experienced tax debt specialist from Benefit Tax Solutions will be reaching out to you shortly, or once business hours resume.');
    }
}