<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Task;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(Company $company) {
        $data = request()->validate([
            'name' => 'required|string',
            'region' => 'required|string',

        ]);
        $company->update($data);
        return redirect()->route('companies.index',compact('company'));
    }
}
