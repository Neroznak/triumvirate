<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Task;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(Company $company) {
        $company->delete();
        return redirect()->route('companies.index');
    }
}
