<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FakeBooksServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Abstractions\IBooksService',
            'App\Services\FakeBookService'
        );
    }
}
