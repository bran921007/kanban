<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FrameworkMigrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_framework_and_routes_boot_on_supported_runtime(): void
    {
        $this->assertSame(12, (int) explode('.', app()->version())[0]);
        $this->assertNotEmpty(app('router')->getRoutes()->getRoutes());
    }

    public function test_login_form_and_validation_still_work(): void
    {
        $this->get('/login')->assertOk();
        $this->post('/login', [])->assertSessionHasErrors();
    }

    public function test_existing_user_can_still_log_in(): void
    {
        $user = factory(\App\User::class)->create(['password' => bcrypt('synthetic-password')]);
        $this->post('/login', ['email' => $user->email, 'password' => 'synthetic-password'])
            ->assertRedirect();
        $this->assertAuthenticatedAs($user);
    }
}
