<?php

namespace tests\tp1;

use tp1\ParameterBag;

class ParameterBagTest extends \PHPUnit_Framework_TestCase
{
    // public function setUp()
    // {

    // }

    public function testCount()
    {

    }

    public function testGet()
    {
        $bag = new ParameterBag(array('foo' => 'bar'));

        // will pass
        $this->assertEquals('bar', $bag->get('foo'));

        // will fail
        $this->assertEquals('lol', $bag->get('foo'));
    }

    public function testGetInt()
    {

    }

    public function testSet()
    {

    }

    public function testHas()
    {

    }

    public function testRemove()
    {

    }

    public function testAll()
    {

    }

    public function testKeys()
    {

    }

    public function testAdd()
    {

    }
}
