<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * @test
     */
    function home_page_loads()
    {
        $this->withoutExceptionHandling();
        $response = $this->get(route('FE_HOME_PAGE_SHOW'));

        $response->assertStatus(200);
        $response->assertSee('Let our tax professionals help you.');
    }
}
