<?php

namespace App\Http\Controllers\Marketing\Email;

use App\Http\Controllers\Controller;
use App\Models\Email;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $emails = Email::paginate(10);
        $users = User::all();
        return view('marketings.emails.index', ['emails' => $emails], compact('emails', 'users'));
    }
}
