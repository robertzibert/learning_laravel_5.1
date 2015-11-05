<?php namespace App\Repositories\Criteria\Posts;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;

use Illuminate\Support\Facades\Auth;

class PublishedByOwner extends Criteria {

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $model = $model->where('user_id' , Auth::user()->id);
        return $model;
    }
}
