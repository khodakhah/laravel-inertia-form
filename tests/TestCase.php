<?php

namespace Khodakhah\InertiaForm\Tests;

use Khodakhah\InertiaForm\InertiaFormServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected $enablesPackageDiscoveries = true;

    protected $loadEnvironmentVariables = true;

    protected function getPackageProviders($app): array
    {
        return [
            InertiaFormServiceProvider::class,
        ];
    }
}