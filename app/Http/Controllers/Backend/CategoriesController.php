<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function __construct(
        private readonly CategoryService $categoryService
    ) {
    }

    public function index()
    {
        return $this->categoryService->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(int $id)
    {
        return $this->categoryService->findById($id);
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
