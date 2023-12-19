<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Services\BrandService;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    public function __construct(
        private readonly BrandService $brandService
    ) {
    }

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
