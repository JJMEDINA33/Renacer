<?php
namespace App\Http\Controllers\ViewControllers;

use App\Http\Controllers\Controller;

class ViewRegisterController extends Controller
{   
    public function __invoke()
    {
        return view('register');
    }
}