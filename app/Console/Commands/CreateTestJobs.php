<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\TestJob;

class CreateTestJobs extends Command
{
    protected $signature = 'queue:create-test-jobs {count=10}';
    protected $description = 'Create test jobs to verify queue and Horizon functionality';

    public function handle()
    {
        $count = $this->argument('count');

        $this->info("Dispatching {$count} test jobs...");

        for ($i = 0; $i < $count; $i++) {
            TestJob::dispatch($i);
        }

        $this->info("Finished dispatching jobs. Check Horizon for results.");
    }
}