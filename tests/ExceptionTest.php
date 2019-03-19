<?php
/**
 * Created by PhpStorm.
 * User: sanokouhei
 * Date: 2019-03-18
 * Time: 15:42
 */

class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);

        throw new InvalidArgumentException();
    }
}