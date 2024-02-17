<?php

namespace App\Http\Controllers\Marketing\Email;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Email;

class UpdateController extends Controller
{
    public function __invoke(Email $email) {
        $data = request()->validate([
            'title' => '|string',
            'email' => 'required|string',
            'status' => 'required|string',
        ]);
        $email->update($data);
        return redirect()->route('marketings.emails.index');
    }
}
