<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Db;

use Illuminate\Console\Command;

class CreateDbPhp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create databse, run migration';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // config('app.timezone)
        config(['database.connections.mysql.database' => null]);

        DB::statement('DROP DATABASE IF EXISTS booksdb');
        DB::statement(
            'CREATE DATABASE IF NOT EXISTS booksdb
            CHARACTER SET utf8
            COLLATE itf8_unicode_ci'
        );
        config(['database.connections.mysql.database' => 'booksdb']);

        DB::disconnect('mysql');

        Artisan::call('migrate');
        Artisan::call('db:seed');
    }
}
