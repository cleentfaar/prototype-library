<?php

namespace CL\PACKAGE_NAME_HERE\Tests;

use CL\PACKAGE_NAME_HERE\ExampleClass;

class ExampleTest
{
    /**
     * @var ExampleClass
     */
    protected $example;

    protected function setUp()
    {
        $this->example = new ExampleClass();
    }

    public function testFoo()
    {
        $this->assertEquals('bar', $this->example->getFoo());
    }
}
