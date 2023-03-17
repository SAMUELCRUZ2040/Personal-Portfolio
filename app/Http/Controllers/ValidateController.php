<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function store(Request $request)
    {

        request()->validate([
            'name' => 'required',
            'gmail' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        session()->flash('message', 'Send Message');
        return redirect()->route('home');
    }

 
}
