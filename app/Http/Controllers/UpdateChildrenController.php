<?php

namespace App\Http\Controllers;

use App\Repositories\EloquentChildrenRepository;
use Illuminate\Http\Request;

class UpdateChildrenController extends Controller
{
    public function __invoke(Request $request, int $childId)
    {
        $name = $request->input('name');
        $lastName = $request->input('last_name');
        $age = $request->input('age');
        $schoolGrade = $request->input('school_grade');
        $mother = $request->input('mother');
        $father = $request->input('father');

        $childRepository = New EloquentChildrenRepository();
        $childRepository->update($childId, $name, $lastName, $age, $schoolGrade, $mother, $father);

        return redirect('childish');
    }
}