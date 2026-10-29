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

    public function test_service_cards_show_the_local_service_images(): void
    {
        $response = $this->get('/services')->assertOk();

        foreach ([
            'Images/background.jpg',
            'Images/cctv.jpg',
            'Images/server 1.jpg',
            'Images/server.jpg',
            'Images/soap.jpg',
            'Images/logo.jpg',
            'Images/print.jpg',
            'Images/sound.jpg',
        ] as $image) {
            $response->assertSee($image);
        }
    }

    public function test_each_service_detail_page_has_its_own_gallery_and_existing_images(): void
    {
        $serviceImages = [
            '/services/contract-business' => [
                'Images/background.jpg',
                'Images/server 1.jpg',
                'Images/print.jpg',
            ],
            '/services/ict-solutions' => [
                'Images/cctv.jpg',
                'Images/server 1.jpg',
                'Images/server.jpg',
            ],
            '/services/product-manufacturing' => [
                'Images/soap.jpg',
                'Images/print.jpg',
                'Images/logo.jpg',
            ],
            '/services/graphics-branding' => [
                'Images/logo 1.jpg',
                'Images/logo.jpg',
                'Images/print.jpg',
            ],
            '/services/sound-audio' => [
                'Images/sound.jpg',
            ],
        ];

        foreach ($serviceImages as $path => $images) {
            $response = $this->get($path)
                ->assertOk()
                ->assertSee('service-gallery');

            foreach ($images as $image) {
                $this->assertFileExists(public_path($image));
                $response->assertSee(asset($image));
            }
        }
    }
}
