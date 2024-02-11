<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Machine;
use App\Models\Task;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(Company $company) {
        return view('companies.show', compact('company'));
    }
}
