<?php

namespace Rector\RectorCompatTests\Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

final class UsePHPParser4Test extends TestCase
{
    public function test(): void
    {
        if ((int) Version::id() >= 11) {
            $this->markTestSkipped('Only for PHPUnit < 11');
        }

        // this uses nikic/php-parser v4 parser
        (new \PhpParser\ParserFactory())->create(\PhpParser\ParserFactory::PREFER_PHP7);

        $this->assertTrue(true);
    }
}