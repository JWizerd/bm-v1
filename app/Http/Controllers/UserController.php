<?php

namespace App\Http\Controllers;

use App\Http\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        echo 'auth working';
    }
}
