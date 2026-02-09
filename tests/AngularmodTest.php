<?php
/**
 * Tests for AngularMod
 */

use PHPUnit\Framework\TestCase;
use Angularmod\Angularmod;

class AngularmodTest extends TestCase {
    private Angularmod $instance;

    protected function setUp(): void {
        $this->instance = new Angularmod(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Angularmod::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
