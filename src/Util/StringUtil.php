<?php

declare(strict_types=1);

namespace App\Util;

class StringUtil
{
    /**
     * Return the remainder of a string after a given value.
     */
    public static function after(?string $subject, ?string $search): ?string
    {
        if ($search === '' || $search === null || $subject === null) {
            return $subject;
        }

        $pos = strpos($subject, $search);

        if ($pos === false) {
            return $subject;
        }

        return substr($subject, $pos + strlen($search));
    }
}
