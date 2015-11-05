<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class MyJob extends Job implements SelfHandling
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $job_data;

    public function __construct($job_data)
    {
      $this->job_data = $job_data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        var_dump($this->job_data);
    }
}
