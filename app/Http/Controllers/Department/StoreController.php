<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;


class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'name' => 'required|string',
        ]);
        Department::firstOrCreate($data);
        return redirect()->route('departments.index');
    }
}
