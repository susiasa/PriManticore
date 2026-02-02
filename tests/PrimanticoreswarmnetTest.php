<?php
/**
 * Tests for PriManticoreSwarmNet
 */

use PHPUnit\Framework\TestCase;
use Primanticoreswarmnet\Primanticoreswarmnet;

class PrimanticoreswarmnetTest extends TestCase {
    private Primanticoreswarmnet $instance;

    protected function setUp(): void {
        $this->instance = new Primanticoreswarmnet(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Primanticoreswarmnet::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
