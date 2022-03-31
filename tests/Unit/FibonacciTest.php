<?php

namespace Tests\Unit;

use App\Src\Fibonacci;
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
}
