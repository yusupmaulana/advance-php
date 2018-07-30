<?php

require __DIR__.'/StringMutator.php';

class ChildStringMutator extends StringMutator
{
    public static function bold(string $word): string
    {
        return '<b>LATE STATIC BINDING</b>';
    }
}

echo ChildStringMutator::boldItalic('Yusup Maulana');
echo PHP_EOL;