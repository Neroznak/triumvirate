<?php

namespace App\Http\Controllers\Machine;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('machines.create');
    }
}
