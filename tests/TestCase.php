<?php

namespace Markillat\StorageLinkRoute\tests;

use Markillat\StorageLinkRoute\RouteStorageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app): array
    {
        return [
            RouteStorageServiceProvider::class,
        ];
    }
}