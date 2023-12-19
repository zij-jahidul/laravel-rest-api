<?php

namespace App\Http\Controllers;

use App\Services\BrandService;

class WelcomeController extends Controller
{
    public function __construct(
        private readonly BrandService $brandService
    ) {
    }

    public function index()
    {
        return view('welcome', [
            'brands' => $this->brandService->get(),
        ]);
    }
}
