<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Interfaces\Repo\AuthorRepo;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    private $repo;

    public function __construct(AuthorRepo $authorRepo)
    {
        $this->repo = $authorRepo;
    }

    public function list()
    {
        return response()->json(Author::all());
        //return response()->json($this->repo->all());
    }

    public function get($id) {
        return response()->json($this->repo->findById($id));
    }
}
