<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Task;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Company $company) {
        return view('companies.edit', compact('company'));
    }
}
