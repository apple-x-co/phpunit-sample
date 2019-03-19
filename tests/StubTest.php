<?php
/**
 * Created by PhpStorm.
 * User: sanokouhei
 * Date: 2019-03-18
 * Time: 17:12
 */

require 'SomeClass.php';

class StubTest extends \PHPUnit\Framework\TestCase
{
    public function testStub()
    {
        // SomeClass クラスのスタブを作成します
        $stub = $this->createMock(SomeClass::class);

        // スタブの設定を行います
        $stub->method('doSomething')
             ->willReturn('foo');

        // $stub->doSomething() をコールすると
        // 'foo' を返すようになります
        $this->assertSame('foo', $stub->doSomething());
    }
}