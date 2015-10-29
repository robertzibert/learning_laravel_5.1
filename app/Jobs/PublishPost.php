<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Auth;

use App\Post;
use App\User;
use App\Tag;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class PublishPost extends Job implements SelfHandling
{
    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $post;
    public $user;
    public $tags;

    public function __construct($post, $tags)
    {
        $this->post = $post;
        $this->tags = $tags;
        $this->user = Auth::user();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

      //Creating post with all post data
      $post = New Post($this->post);

      //Associating one post with one user
      // Post->belongsTo User-> associate
      $post->user()->associate($this->user);
      $post->save();
      //Attaching tags
      $post->tags()->attach($this->tags);

    }
}
