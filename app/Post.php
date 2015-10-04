<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'content','published_at'];

    protected $date = ['published_at'];

    public function setPublishedAtAttribute($date){

      $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

    }

    public function scopePublished($query){

      $query->where('published_at', '<=', Carbon::now());

    }

    public function scopeUnpublished($query){

      $query->where('published_at', '>', Carbon::now());

    }

}
