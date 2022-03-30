<?php

declare(strict_types=1);

namespace App\Util;

class ArrayUtil
{
    /**
     * Re-index an array starting from specified index.
     */
    public static function reindexArray(array $array, int $startIndex = 1): array
    {
        for ($i = 0; $i < $startIndex; $i++) {
            array_unshift($array, '');
        }
        for ($i = 0; $i < $startIndex; $i++) {
            unset($array[$i]);
        }

        return $array;
    }
}
