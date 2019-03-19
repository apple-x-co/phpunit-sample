<?php
/**
 * Created by PhpStorm.
 * User: sanokouhei
 * Date: 2019-03-18
 * Time: 16:46
 */

class OutputTest extends \PHPUnit\Framework\TestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        print 'baz';
    }
}