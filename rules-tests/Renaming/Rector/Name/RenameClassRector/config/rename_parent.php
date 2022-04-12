<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;

return static function (RectorConfig $rectorConfig): void {
    $services = $rectorConfig->services();
    $services->set(RenameClassRector::class)
        ->configure([
            'ThisClassDoesNotExistAnymore' => 'NewClassThatDoesNotExistEither',
            'App\NotHereClass\AndNamespace' => 'NewClassThatDoesNotExistEither',
        ]);
};
