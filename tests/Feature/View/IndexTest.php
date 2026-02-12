<?php

namespace Tests\Feature\View;

use Tests\TestCase;

class IndexTest extends TestCase
{
    public function test_can_render()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
