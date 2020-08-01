<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class CcpaTest extends TestCase
{
    /**
     * @test
     **/
    function ccpa_page_loads()
    {
        $response = $this->get(route('CCPA_PAGE_SHOW'));

        $response->assertStatus(200);
        $response->assertSee('FOR CALIFORNIA RESIDENTS ONLY', false);
        $response->assertSee('If you are a California resident, you have rights under the California Consumer Privacy Act ("CCPA"), including the right to opt-out of us', false);
        $response->assertSee(route('FE_CCPA_LEAD_STORE'), false);
    }
}