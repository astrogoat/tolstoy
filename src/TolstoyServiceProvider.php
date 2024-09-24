<?php

namespace Astrogoat\Tolstoy;

use Astrogoat\Tolstoy\Settings\TolstoySettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\AppPackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class TolstoyServiceProvider extends AppPackageServiceProvider
{
    public function registerApp(App $app): App
    {
        return $app
            ->name('tolstoy')
            ->settings(TolstoySettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ]);
    }

    public function configurePackage(Package $package): void
    {
        $package->name('tolstoy')->hasConfigFile()->hasViews();
    }
}
