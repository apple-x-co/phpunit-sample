<?php
/**
 * Created by PhpStorm.
 * User: sanokouhei
 * Date: 2019-03-18
 * Time: 15:07
 */

class Depends2Test extends \PHPUnit\Framework\TestCase
{
    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer($a, $b)
    {
        $this->assertSame('first', $a);
        $this->assertSame('second', $b);
    }
}