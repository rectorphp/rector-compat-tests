<?php

namespace Rector\RectorCompatTests\Tests\PHPStan\CustomPHPStanRule;

use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;
use Rector\RectorCompatTests\PHPStan\CustomPHPStanRule;

final class CustomPHPStanRuleTest extends RuleTestCase
{
    // @todo

    protected function getRule(): Rule
    {
        return new CustomPHPStanRule();
    }
}