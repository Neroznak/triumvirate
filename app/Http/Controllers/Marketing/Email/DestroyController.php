<?php

namespace App\Http\Controllers\Marketing\Email;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Email;

class DestroyController extends Controller
{
    public function __invoke(Email $email) {
        $email->delete();
        return redirect()->route('marketings.emails.index');
    }
}
