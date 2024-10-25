<?php

namespace Hammadzafar05\QuickAddressFinder\Commands;

use Illuminate\Console\Command;

class QuickAddressFinderCommand extends Command
{
    public $signature = 'quick-address-finder';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
