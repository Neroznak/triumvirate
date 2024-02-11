<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Department;
use App\Models\Machine;
use App\Models\Task;


class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'region' => 'required|string',
        ]);
        Company::firstOrCreate($data);
        return redirect()->route('companies.index');
    }
}
