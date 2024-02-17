<?php

namespace App\Http\Controllers\Marketing\Email;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Email;

class EditController extends Controller
{
    public function __invoke(Email $email) {
        return view('marketings.emails.edit', compact('email'));
    }
}
