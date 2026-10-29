<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_existing_website_pages_render_successfully(): void
    {
        $paths = [
            '/',
            '/about',
            '/services',
            '/contact',
            '/services/contract-business',
            '/services/ict-solutions',
            '/services/product-manufacturing',
            '/services/graphics-branding',
            '/services/sound-audio',
        ];

        foreach ($paths as $path) {
            $this->get($path)->assertOk();
        }
    }

    public function test_legacy_php_pages_redirect_to_laravel_routes(): void
    {
        $this->get('/About.php')->assertRedirect('/about');
        $this->get('/Services.php')->assertRedirect('/services');
        $this->get('/html/Services/ict-solutions.php')->assertRedirect('/services/ict-solutions');
    }
}
