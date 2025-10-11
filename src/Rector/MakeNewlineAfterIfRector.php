<?php

declare(strict_types=1);

namespace Rector\RectorCompatTests\Rector;

use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\If_;
use PhpParser\Node\Stmt\Nop;
use Rector\Contract\PhpParser\Node\StmtsAwareInterface;
use Rector\Rector\AbstractRector;

final class MakeNewlineAfterIfRector extends AbstractRector
{
    /**
     * @return array<class-string<Class_>>
     */
    public function getNodeTypes(): array
    {
        return [StmtsAwareInterface::class];
    }

    /**
     * @param StmtsAwareInterface $node
     * @return array<Node>|null
     */
    public function refactor(Node $node): ?array
    {
        if (! $node instanceof If_) {
            return null;
        }

        return [$node, new Nop()];
    }
}
