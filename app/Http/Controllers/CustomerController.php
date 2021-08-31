<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class CustomerController extends Controller
{
    public function index()
    {
        ddd("oof");
        return view('dashboard');
    }
}
