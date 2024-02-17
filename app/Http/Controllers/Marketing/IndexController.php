<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Email;

class IndexController extends Controller
{
    public function __invoke() {
        $emails = Email::all();
        return view('marketings.index', compact('emails'));
    }
}
