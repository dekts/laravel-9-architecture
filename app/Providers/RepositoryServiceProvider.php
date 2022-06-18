<?php

namespace App\Providers;

use App\Interfaces\Example\ExampleInterface;
use App\Repositories\Example\ExampleRepository;
use App\Interfaces\ExampleType\ExampleTypeInterface;
use App\Repositories\ExampleType\ExampleTypeRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @var string[]
     */
    protected $repositories = [
        ExampleInterface::class => ExampleRepository::class,
        ExampleTypeInterface::class => ExampleTypeRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $repository) {
            $this->app->bind($interface, function ($app) use ($repository) {
                return new $repository;
            });
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
