<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Task;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(User $user) {
        $data = request()->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'patronymic' => 'required|string',
            'email' => 'required|string',
            'phone' => '',
            'birthday' => '',
            'department_id' => '',
            'position' => '',
            'salary' => '',
            'education' => '',
            'comment' => '',
        ]);
        $user->update($data);
        return redirect()->route('users.show',compact('user'));
    }
}
