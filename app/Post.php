<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'content','published_at'];

    protected $date = ['published_at'];

    /**
     * Get a tags lists associate with the post
     */
    public function getTagsListAttribute(){

      return $this->tags->lists('id')->toArray();

    }


    public function setPublishedAtAttribute($date){

      $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

    }

    public function scopePublished($query){

      $query->where('published_at', '<=', Carbon::now());

    }

    public function scopeUnpublished($query){

      $query->where('published_at', '>', Carbon::now());

    }

    public function user(){

      return $this->belongsTo('App\User');

    }

    public function tags(){
      return $this->belongsToMany('App\Tag');
    }


}
