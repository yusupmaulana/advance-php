<?php

class Variadic
{
    public static function foo(int $number)
    {
        // var_dump(func_get_args());
    }

    public static function add(int ...$numbers)
    {
        return array_sum($numbers);
    }

}
$numbers = [7,9,5,6];

echo Variadic::add(...$numbers);

// Variadic::foo(7, 'ini', 'tetep', 'masuk');
echo PHP_EOL;