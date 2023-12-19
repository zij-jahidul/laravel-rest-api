<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BrandService;

class BrandsController extends Controller
{
    public function __construct(
        private readonly BrandService $brandService
    ) {
    }

    /**
     * @OA\Get(
     *    path="/api/v1/brands",
     *    tags={"Brands"},
     *    summary="Brands List API",
     *    description="Brands List API",
     *    @OA\Response(
     *         response=200,
     *         description="Success",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="Welcome to Laravel Rest API"),
     *             @OA\Property(property="data", type="object", example="null"),
     *         )
     *     )
     * )
     */
    public function index()
    {
        return $this->brandService->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *    path="/api/v1/brands/{id}",
     *    tags={"Brands"},
     *    summary="Brands Detail API",
     *    description="Brands Detail API",
     *    @OA\Parameter(name="id", description="Category ID or Slug", example=1, required=true, in="path", @OA\Schema(type="string")),
     *    @OA\Response(
     *         response=200,
     *         description="Success",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="Welcome to Laravel Rest API"),
     *             @OA\Property(property="data", type="object", example="null"),
     *         )
     *     )
     * )
     */
    public function show(int $id)
    {
        return $this->brandService->findById($id);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
