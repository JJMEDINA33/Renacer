<?php

namespace App\Http\Controllers;

use App\Repositories\EloquentChildrenRepository;
use Illuminate\Http\Request;

class DeleteChildrenController extends Controller
{
    public function __invoke(int $childId)
    {
        $childRepository = new EloquentChildrenRepository();
        $childRepository->delete($childId);

        return redirect()->back();
    }
}
