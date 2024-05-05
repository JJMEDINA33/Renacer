<?php

namespace App\Http\Controllers\ViewControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewHomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}
