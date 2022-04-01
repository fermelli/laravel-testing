<?php

namespace App\Src;

class Fibonacci
{
    public function calculate($index)
    {
        if (!is_int($index) || $index < 0) {
            throw new \InvalidArgumentException('You must pass a non-negative integer');
        }

        if ($index == 0) {
            return 0;
        }

        if ($index == 1) {
            return 1;
        }

        return $this->calculate($index - 1) + $this->calculate($index - 2);
    }
}
