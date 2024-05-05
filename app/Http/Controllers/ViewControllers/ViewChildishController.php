<?php
namespace App\Http\Controllers\ViewControllers;

use App\Models\Child;
use App\Http\Controllers\Controller;

class ViewChildishController extends Controller
{   
    public function __invoke()
    {
        $children = Child::all();

        return view('childish', ['children'=> $children]);
    }
}