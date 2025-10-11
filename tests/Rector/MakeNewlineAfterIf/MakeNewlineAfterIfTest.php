<?php

namespace Rector\RectorCompatTests\Tests\Rector\MakeNewlineAfterIf;

use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class MakeNewlineAfterIfTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFile(__DIR__ . '/Fixture/some_if.php.inc');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configured_rule.php';
    }
}
