<?php

namespace Astrogoat\Tolstoy;

use Astrogoat\Tolstoy\Settings\TolstoySettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\AppPackageServiceProvider;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
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
            ])
            ->includeFrontendViews(function (IncludeFrontendViews $frontendView) {
                return $frontendView->addToHead('tolstoy::script');
            });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('tolstoy')->hasConfigFile()->hasViews();
    }
}
