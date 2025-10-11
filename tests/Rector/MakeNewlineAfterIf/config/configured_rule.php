<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\RectorCompatTests\Rector\MakeNewlineAfterIfRector;

return RectorConfig::configure()
    ->withRules([MakeNewlineAfterIfRector::class]);
