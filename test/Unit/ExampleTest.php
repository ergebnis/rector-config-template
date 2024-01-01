<?php

declare(strict_types=1);

/**
 * Copyright (c) 2023-2024 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/rector-config-template
 */

namespace Ergebnis\Rector\Config\Test\Unit;

use Ergebnis\Rector\Config\Example;
use Ergebnis\Rector\Config\Test;
use PHPUnit\Framework;

#[Framework\Attributes\CoversClass(Example::class)]
final class ExampleTest extends Framework\TestCase
{
    use Test\Util\Helper;

    public function testFromStringReturnsExample(): void
    {
        $value = self::faker()->sentence();

        $example = Example::fromString($value);

        self::assertSame($value, $example->toString());
    }
}
