<?php

declare(strict_types=1);

namespace App\Tests\Unit\Util;

use App\Util\StringUtil;
use PHPUnit\Framework\TestCase;

final class StringUtilTest extends TestCase
{
    /**
     * @dataProvider afterDataProvider
     */
    public function testAfter(?string $expected, ?string $subject, ?string $search): void
    {
        self::assertSame($expected, StringUtil::after($subject, $search));
    }

    public function afterDataProvider(): array
    {
        return [
            'null values' => [
                'expected' => null,
                'subject' => null,
                'search' => null,
            ],
            'null subject with actual search' => [
                'expected' => null,
                'subject' => null,
                'search' => 'house',
            ],
            'empty strings' => [
                'expected' => '',
                'subject' => '',
                'search' => '',
            ],
            'empty subject with actual search' => [
                'expected' => '',
                'subject' => '',
                'search' => 'house',
            ],
            'search at begining of subject' => [
                'expected' => ' is red',
                'subject' => 'house is red',
                'search' => 'house',
            ],
            'search in the middle of subject' => [
                'expected' => ' red',
                'subject' => 'house is red',
                'search' => 'is',
            ],
            'search at the end of subject' => [
                'expected' => '',
                'subject' => 'house is red',
                'search' => 'red',
            ],
            'search at the middle of word' => [
                'expected' => 'd',
                'subject' => 'house is red',
                'search' => 're',
            ],
            'search empty string' => [
                'expected' => 'house is red',
                'subject' => 'house is red',
                'search' => '',
            ],
            'search space' => [
                'expected' => 'is red',
                'subject' => 'house is red',
                'search' => ' ',
            ],
            'search symbols' => [
                'expected' => 'is-red',
                'subject' => 'house-is-red',
                'search' => '-',
            ],
            'search symbols not found in string' => [
                'expected' => 'house-is-red',
                'subject' => 'house-is-red',
                'search' => 'blue',
            ],
        ];
    }
}
