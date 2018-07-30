<?php

class StringMutator
{
    public static function bold(string $word): string
    {
        return sprintf('<b>%s</b>', $word);
    }

    public static function italic(string $word): string
    {
        return sprintf('<i>%s</i>', $word);
    }

    public static function boldItalic(string $word): string
    {
        // return self::italic(self::bold($word));
        return static::italic(static::bold($word));
    }
}