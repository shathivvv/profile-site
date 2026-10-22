<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfilePagesTest extends TestCase
{
    public function test_profile_pages_load_with_shared_navigation(): void
    {
        foreach (['/', '/about', '/contact'] as $path) {
            $this->get($path)
                ->assertOk()
                ->assertSee('About Me')
                ->assertSee('Contact');
        }
    }

    public function test_about_page_shows_all_four_group_members(): void
    {
        $this->get('/about')
            ->assertOk()
            ->assertSee('Ainin Qistina Binti Mohd Aidil')
            ->assertSee('Syazwan Bin Suhailan')
            ->assertSee('Raaed Eddin Shah Bin Khairuddin Shah')
            ->assertSee('Shathivel A/L Hari Rama Krishnan')
            ->assertSee('Background & Education')
            ->assertSee('Skills')
            ->assertSee('Hobbies & Interests')
            ->assertSee('Add a short introduction, course and study year.')
            ->assertSee('Add a few technical or personal skills.')
            ->assertSee('Add your hobbies and interests.');
    }

    public function test_contact_page_has_the_required_demo_form_fields(): void
    {
        $this->get('/contact')
            ->assertOk()
            ->assertSee('id="name" name="name"', false)
            ->assertSee('id="email" name="email"', false)
            ->assertSee('id="message" name="message"', false)
            ->assertSee('Demo only. Messages are not emailed or stored.');
    }
}
