<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Interfaces\Repo\AuthorRepo;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthorController extends Controller
{

    private $repo;

    public function __construct(AuthorRepo $authorRepo)
    {
        $this->repo = $authorRepo;
    }

    public function list(): \Illuminate\Http\JsonResponse
    {
        //return response()->json(Author::all());
        return response()->json($this->repo->all());
    }

    public function get($id): \Illuminate\Http\JsonResponse
    {
        return response()->json($this->repo->findById($id));
    }

    /**
     * @throws ValidationException
     */
    public function create(Request $req) {
        $this->validate($req, [
            'name' => 'required',
            'email' => 'required|email|unique:authors',
            'location' => 'required|alpha'
        ]);
        $obj = $this->repo->create($req->all());
        // TODO replace with HTTP status code constant
        return response()->json($obj, 201);
    }
}
