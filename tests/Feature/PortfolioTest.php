<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PortfolioTest extends TestCase
{
    /** @test */
    public function home_page_loads_correctly()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Harsh Patil');
    }

    /** @test */
    public function about_page_loads_correctly()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('Education');
        $response->assertSee('Silver Oak University');
    }

    /** @test */
    public function portfolio_page_shows_projects()
    {
        $response = $this->get('/portfolio');
        $response->assertStatus(200);
        $response->assertSee('Digital Menu Design Project');
        $response->assertSee('School Management System');
    }

    /** @test */
    public function contact_form_validates_input()
    {
        $response = $this->post('/contact', []);
        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);

        $validData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'subject' => 'Test Subject',
            'message' => 'Test Message'
        ];

        $response = $this->post('/contact', $validData);
        $response->assertSessionHas('success');
    }
}
