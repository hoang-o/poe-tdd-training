<?php

namespace tests\tp1;

use tp1\ParameterBag;

class ParameterBagTest extends \PHPUnit_Framework_TestCase
{

    protected $bag;

    public function setUp()
    {
        $this->bag = new ParameterBag(array('foo' => 'bar', 'baz' => '123'));
    }

    public function testCount()
    {
        $this->assertEquals('2', $this->bag->count());

    }

    public function testGet()
    {
        $this->assertEquals('bar', $this->bag->get('foo'));
        $this->assertEquals(null, $this->bag->get('pony'));

        $this->assertEquals('pink', $this->bag->get('pony', 'pink'));

        $this->assertEquals('pink', $this->bag->get('pony','pink'));
        
        //$bag = new ParameterBag(array('foo' => 'bar'));

        // will pass
        //$this->assertEquals('bar', $bag->get('foo'));

        // will fail
        //$this->assertEquals('lol', $bag->get('foo'));

    }

    public function testGetInt()
    {
        $this->assertEquals(0,$this->bag->getInt("foo"));
    }

    public function testSet()
    {
        $this->assertEquals('key',$this->bag->set($key, $value));
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
