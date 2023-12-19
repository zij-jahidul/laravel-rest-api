<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Brand;
use App\Repositories\BrandRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class BrandService
{
    public function __construct(
        private readonly BrandRepository $brandRepository
    ) {
    }

    public function get(): LengthAwarePaginator
    {
        return $this->brandRepository->get();
    }

    public function findById(int $id): Brand
    {
        return $this->brandRepository->show($id);
    }

    public function findBySlug(string $slug): Brand
    {
        return $this->brandRepository->show($slug);
    }

    public function store(array $data): Brand
    {
        return $this->brandRepository->store($data);
    }

    public function update(array $data, int $id): bool
    {
        return $this->brandRepository->update($data, $id);
    }

    public function destroy(int $id): bool
    {
        return $this->brandRepository->destroy($id);
    }
}
