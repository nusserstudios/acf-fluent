<?php

use Tests\TestCase;
use Samrap\Acf\Behaviors\SubFieldBehavior;

class SubFieldBehaviorTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->setFields(['foo' => 'bar']);

        $this->behavior = new SubFieldBehavior;
    }

    public function testGet()
    {
        $this->assertEquals('bar', $this->behavior->get('foo'));
    }

    public function testUpdate()
    {
        $this->behavior->update('foo', 'fiz');
        $this->assertEquals('fiz', $this->behavior->get('foo'));
    }
}