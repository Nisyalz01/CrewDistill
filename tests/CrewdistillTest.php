<?php
/**
 * Tests for CrewDistill
 */

use PHPUnit\Framework\TestCase;
use Crewdistill\Crewdistill;

class CrewdistillTest extends TestCase {
    private Crewdistill $instance;

    protected function setUp(): void {
        $this->instance = new Crewdistill(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Crewdistill::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
