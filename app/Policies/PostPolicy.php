<?php

namespace App\Policies;
use App\User;
use App\Post;

class PostPolicy
{


    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Post $post){

      return $user->id == $post->user_id;

    }
}
