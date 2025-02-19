<?php

namespace Geekybeaver\LaravelEnterpriseActions;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Geekybeaver\LaravelEnterpriseActions\Commands\LaravelEnterpriseActionsCommand;

class LaravelEnterpriseActionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-enterprise-actions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_enterprise_actions_table')
            ->hasCommand(LaravelEnterpriseActionsCommand::class);
    }
}
