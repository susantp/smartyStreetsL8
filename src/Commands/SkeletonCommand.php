<?php

namespace TechBizz\SmartyStreets\Commands;

use Illuminate\Console\Command;

class SmartyStreetsCommand extends Command
{
    public $signature = 'smartystreetslaravel';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
