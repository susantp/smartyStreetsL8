<?php

namespace TechBizz\SmartyStreets;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TechBizz\SmartyStreets\Commands\SmartyStreetsCommand;

class SmartyStreetsServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('smartyStreets')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_sample_table')
            ->hasCommand(SmartyStreetsCommand::class);
    }
}
