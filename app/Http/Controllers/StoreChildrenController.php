<?php

namespace App\Http\Controllers;

use App\Repositories\EloquentChildrenRepository;
use Illuminate\Http\Request;

class StoreChildrenController extends Controller
{
    public function __invoke(Request $request)
    {
        $name = $request->get('name');
        $lastName = $request->get('last_name');
        $age = $request->get('age');
        $schoolGrade = $request->get('school_grade');
        $mother = $request->get('mother');
        $father = $request->get('father');

        $childrenRepository = new EloquentChildrenRepository();
        $childrenRepository->store($name, $lastName, $age, $schoolGrade, $mother, $father);

        return redirect()->back();
    }
}
