<?php

use Dynart\CoverageTest\TheAbstractClass;

// I have to create a class like this, but the type name then will be different.
// The same is with the createMockForAbstractClass, that creates a MockObject.
class TheTestableClass extends TheAbstractClass {}

/**
* @covers \Dynart\CoverageTest\TheAbstractClass
*/
final class TheAbstractClassTest extends \PHPUnit\Framework\TestCase
{
    public function testTheAbstractClass() {
        $instance = new TheTestableClass();
        $this->assertEquals('value', $instance->methodForCoverage());
        $this->assertInstanceOf(TheAbstractClass::class, $instance);
    }
}