<?php

namespace Geekybeaver\LaravelEnterpriseActions\Commands;

use Illuminate\Console\Command;

class LaravelEnterpriseActionsCommand extends Command
{
    public $signature = 'laravel-enterprise-actions';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
