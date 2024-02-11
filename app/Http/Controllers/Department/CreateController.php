<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('departments.create');
    }
}
