<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface ChildrenRepositoryInterface {

    public function store(string $name, string $lastName, int $age, string $schoolGrade, string $mother, string $father): void;

    public function list(): Collection;

    public function update($childId, string $name, string $lastName, int $age, string $schoolGrade, string $mother, string $father): void;

    public function delete($childId): void;
}
