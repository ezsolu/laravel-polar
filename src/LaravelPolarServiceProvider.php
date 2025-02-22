<?php

namespace Danestves\LaravelPolar;

use Danestves\LaravelPolar\Commands\ListProductsCommand;
use Danestves\LaravelPolar\View\Components\Button;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPolarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-polar')
            ->hasConfigFile()
            ->hasViewComponent('polar', Button::class)
            ->discoversMigrations()
            ->hasCommands(
                ListProductsCommand::class,
            );
    }
}
