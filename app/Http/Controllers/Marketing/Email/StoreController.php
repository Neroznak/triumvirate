<?php

namespace App\Http\Controllers\Marketing\Email;

use App\Http\Controllers\Controller;
use App\Models\Email;


class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title' => '|string',
            'email' => 'required|string',
            'status' => 'required|string',
        ]);

        $data['performer'] = auth()->id();
        Email::firstOrCreate($data);
        return redirect()->route('marketings.emails.index');
    }
}
