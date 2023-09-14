<?php

namespace App\Jobs;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Test implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
        $this->fail();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $model = new Post;
        $model -> text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ullam reiciendis id odit aut? Perferendis omnis reiciendis consectetur tenetur id adipisci! Quidem pariatur possimus quisquam nam. Nulla consectetur quo adipisci?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ullam reiciendis id odit aut? Perferendis omnis reiciendis consectetur tenetur id adipisci! Quidem pariatur possimus quisquam nam. Nulla consectetur quo adipisci?" ;
        $model -> title = $this->msg;
        $model -> author_id = 1;
        $model -> save();
    }
}
