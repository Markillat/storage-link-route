<?php

namespace Markillat\StorageLinkRoute;

use Illuminate\Support\ServiceProvider;

class RouteStorageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}