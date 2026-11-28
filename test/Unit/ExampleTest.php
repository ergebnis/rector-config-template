<?php

declare(strict_types=1);

/**
 * Copyright (c) 2023-2026 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/rector-config-template
 */

namespace Ergebnis\Rector\Config\Test\Unit;

use Ergebnis\Rector\Config;
use PHPUnit\Framework;

#[Framework\Attributes\CoversClass(Config\Example::class)]
final class ExampleTest extends Framework\TestCase
{
    use Config\Test\Util\Helper;

    public function testFromStringReturnsExample(): void
    {
        $value = self::faker()->sentence();

        $example = Config\Example::fromString($value);

        self::assertSame($value, $example->toString());
    }
}
