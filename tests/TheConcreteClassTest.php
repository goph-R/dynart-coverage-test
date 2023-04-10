<?php

use Dynart\CoverageTest\TheConcreteClass;

/**
 * @covers \Dynart\CoverageTest\TheConcreteClass
 */
final class TheConcreteClassTest extends \PHPUnit\Framework\TestCase
{
    public function testTheConcreteClass() {
        $instance = new TheConcreteClass();
        $this->assertEquals('value', $instance->methodForCoverage());
        $this->assertInstanceOf(TheConcreteClass::class, $instance);
    }
}