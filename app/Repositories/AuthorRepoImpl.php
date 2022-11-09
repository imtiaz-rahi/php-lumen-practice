<?php

namespace App\Repositories;

use App\Interfaces\EloquentBaseRepository;
use App\Models\Author;

class AuthorRepoImpl extends EloquentBaseRepository implements \App\Interfaces\Repo\AuthorRepo
{
    protected $model;

    public function __construct(Author $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }
}
