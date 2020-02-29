<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * login test.
     */
    public function testLogin(): void
    {
        $response = $this->post(route('api.login'), [
            'email' => 'root@example.com',
            'password' => 'root',
        ]);

        $response->assertStatus(200);
    }
}
