<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Interfaces\Repo\AuthorRepo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;


/**
 * Class AuthorController.
 *
 * @package App\Http\Controllers
 * @author Imtiaz Rahi
 * @since 2022-11-10
 * @see https://auth0.com/blog/developing-restful-apis-with-lumen/
 */
class AuthorController extends Controller
{

    private $repo;

    public function __construct(AuthorRepo $authorRepo)
    {
        $this->repo = $authorRepo;
    }

    /**
     * checks for all the author resources.
     * @return JsonResponse
     */
    public function list(): JsonResponse
    {
        return response()->json($this->repo->all());
    }

    /**
     * checks for a single author resource.
     * @param $id
     * @return JsonResponse
     */
    public function get($id): JsonResponse
    {
        return response()->json($this->repo->findById($id));
    }

    /**
     * creates a new author resource.
     * @throws ValidationException
     */
    public function create(Request $req): JsonResponse
    {
        $this->validate($req, [
            'name' => 'required',
            'email' => 'required|email|unique:authors',
            'location' => 'required|alpha'
        ]);
        $obj = $this->repo->create($req->all());
        return response()->json($obj, Response::HTTP_CREATED);
    }

    /**
     * checks if an author resource exists and allows the resource to be updated.
     * @param $id
     * @param Request $req
     * @return JsonResponse
     */
    public function update($id, Request $req): JsonResponse
    {
        $obj = $this->repo->findById($id);
        $obj->update($req->all());
        return response()->json($obj, Response::HTTP_OK);
    }

    /**
     * checks if an author resource exists and deletes it.
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        $status = $this->repo->findById($id)->delete();
        return $status ? response()->json("Author {$id} deleted successfully", Response::HTTP_OK)
            : response()->json("Author delete failed", Response::HTTP_NOT_FOUND);
    }

}
