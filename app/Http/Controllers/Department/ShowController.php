<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke() {
        return view('departments.index');
    }
}
