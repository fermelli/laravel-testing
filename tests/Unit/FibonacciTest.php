<?php

namespace Tests\Unit;

use App\Src\Fibonacci;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    private $fibo;

    public function setUp(): void
    {
        $this->fibo = new Fibonacci();
        parent::setUp();
    }

    public function test_returns_the_first_element_of_the_fibonacci_series()
    {
        $testIndex = 0;
        $expectedResult = 0;
        $this->assertEquals($expectedResult, $this->fibo->calculate($testIndex));
    }

    public function test_exception_for_negative_index()
    {
        $testIndex = -1;
        $this->expectException(InvalidArgumentException::class);
        $this->fibo->calculate($testIndex);
    }

    public function test_exception_message_for_negative_index()
    {
        $testIndex = -1;
        $expectedMessage = 'You must pass a non-negative integer';
        $this->expectExceptionMessage($expectedMessage);
        $this->fibo->calculate($testIndex);
    }

    public function test_fibonacci_with_higher_index_must_be_higher()
    {
        $testIndex = 5;
        $this->assertTrue($this->fibo->calculate($testIndex) > $this->fibo->calculate($testIndex - 1));
    }

    /**
     * test with data from dataProvider
     * @dataProvider providerFibonacci
     */
    public function test_fibonacci_with_data_provider($n, $result)
    {
        $this->assertSame($result, $this->fibo->calculate($n));
    }

    public function providerFibonacci()
    {
        return array(
            array(0, 0),
            array(1, 1),
            array(2, 1),
            array(3, 2),
            array(4, 3),
            array(5, 5),
            array(6, 8),
        );
    }
}
