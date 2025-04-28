<?php

use PHPUnit\Framework\TestCase;

class HealthCheckTest extends TestCase
{
    public function testHealthEndpoint()
    {
        $response = file_get_contents('http://localhost:80/health');
        $this->assertStringContainsString('ok', $response);
    }
}
