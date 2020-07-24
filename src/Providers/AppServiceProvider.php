<?php

namespace Anandalee\Permission\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../database/migrations/2020_04_26_163214_create_permissions_table.php' => 'database/migrations/2020_04_26_163214_create_permissions_table.php',
        ], 'migrations');
    }
}
