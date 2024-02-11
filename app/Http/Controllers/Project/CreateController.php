<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Company;

class CreateController extends Controller
{
    public function __invoke() {
        $companies = Company::all();
        return view('projects.create', compact('companies'));
    }
}
