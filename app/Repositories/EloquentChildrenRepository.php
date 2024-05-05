<?php

namespace App\Repositories;
use App\Models\Child;
use Illuminate\Database\Eloquent\Collection;

class EloquentChildrenRepository {

    public function store(string $name, string $lastName, int $age, string $schoolGrade, string $mother, string $father): void
    {
        Child::create([
            'name'=> $name,
            'last_name'=> $lastName,
            'age'=> $age,
            'school_grade'=> $schoolGrade,
            'mother'=> $mother,
            'father'=> $father
        ]);
    }

    public function list(): Collection
    {   
        $children = Child::all();

        return $children;
    }

    public function update($childId, $name, $lastName, $age, $schoolGrade, $mother, $father): void
    {
        $child = Child::find($childId);

        $child->name = $name;
        $child->last_name = $lastName;
        $child->age = $age;
        $child->school_grade = $schoolGrade;
        $child->mother = $mother;
        $child->father = $father;    

        $child->save();
    }

    public function delete($childId): void
    {
        $child = Child::find($childId);

        $child->delete();
    }
}