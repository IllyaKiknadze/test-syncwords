<?php

namespace Tests\Feature;

use Tests\TestCase;

class TestBase extends TestCase
{
    protected ?string $token;
    public function auth(): void
    {
        $response    = $this->get('/api/get-token');
        $this->token = $response->getContent();
    }
}
