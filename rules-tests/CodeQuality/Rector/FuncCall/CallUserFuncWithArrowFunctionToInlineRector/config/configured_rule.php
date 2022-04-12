<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\FuncCall\CallUserFuncWithArrowFunctionToInlineRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(CallUserFuncWithArrowFunctionToInlineRector::class);
};
