<?php

namespace Tests\Feature;

use App\Lead;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class LeadEndPointTest extends TestCase
{
    /**
     * @test
     **/
    function required_fields_are_validated()
    {
        $response = $this->from(route('FE_HOME_PAGE_SHOW'))->post(route('FE_LEAD_STORE', []));

        $response->assertRedirect(route('FE_HOME_PAGE_SHOW'));
        d(session('errors'));
        $response->assertSessionHasErrors(['email' => 'The email field is required.']);
        $this->assertEquals(0, Lead::count());
    }
}