<?php

use PHPUnit\Framework\TestCase;

class HealthCheckTest extends TestCase
{
    public function testHealthEndpoint()
    {
        // Simulate output directly, don't do HTTP request
        ob_start();
        include 'index.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('Hello from PHP Backend', $output);
    }
}
