<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class TestBase extends TestCase
{
    protected ?string $token;
    public function __construct(string $name)
    {
        parent::__construct($name);
        parent::setUp();
    }

    public function auth(): void
    {
        $response    = $this->get('/api/get-token');
        $this->token = $response->getContent();
    }
}
