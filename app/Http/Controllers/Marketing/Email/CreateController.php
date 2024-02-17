<?php

namespace App\Http\Controllers\Marketing\Email;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('marketings.emails.create');
    }
}
