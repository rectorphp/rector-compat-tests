<?php

declare(strict_types=1);

namespace Rector\RectorCompatTests\PHPStan;

use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleError;
use PHPStan\Rules\RuleErrorBuilder;

/**
 * @implements Rule<Class_>
 */
final class CustomPHPStanRule implements Rule
{
    public function getNodeType(): string
    {
        return Class_::class;
    }

    /**
     * @param Class_ $node
     * @return RuleError[]
     */
    public function processNode(Node $node, Scope $scope): array
    {
        if ($node->isFinal()) {
            return [];
        }

        $ruleErrorMessage = RuleErrorBuilder::message(
            sprintf('Class "%s" is not final.', $node->name->toString())
        )->build();

        return [$ruleErrorMessage];
    }
}
