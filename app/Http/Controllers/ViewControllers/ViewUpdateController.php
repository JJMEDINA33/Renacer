<?php
namespace App\Http\Controllers\ViewControllers;

use App\Http\Controllers\Controller;
use App\Models\Child;

class ViewUpdateController extends Controller
{   
    public function __invoke(int $childId)
    {
        $child = Child::find($childId);

        return view('update', ['child'=> $child]);
    }
}