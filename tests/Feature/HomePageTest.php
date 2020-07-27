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
        $response = $this->get(route(''))
    }
}
