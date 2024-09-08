<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\TestJob;

class InspireCommand extends Command
{
    protected $signature = 'inspireCustom';
    protected $description = 'Inspire command';

    public function handle()
    {
        $this->info("Schedule is working fine");
    }
}