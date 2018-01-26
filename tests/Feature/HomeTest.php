<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * Tests if empty url displays home page
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
        
        $response->assertSee('Home');
    }
}
