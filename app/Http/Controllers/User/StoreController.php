<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Task;
use App\Models\User;


class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'patronymic' => 'string',
            'email' => 'required|string',
            'password' => 'required|string',
            'phone_number' => 'required|string',
            'date_birth' => 'string',
            'department_id' => 'required|string',
            'position' => 'required|string',
            'salary' => 'string',
            'education' => 'string',
            'comment' => 'string',
        ]);
        User::firstOrCreate($data);
        return redirect()->route('users.index');
    }
}
