<?php
/**
 * Created by PhpStorm.
 * User: sanokouhei
 * Date: 2019-03-18
 * Time: 15:24
 */

require 'CsvFileIterator.php';

class DataProviderObjectTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider()
    {
        return new CsvFileIterator('./tests/DataProviderObjectTest.csv');
    }
}