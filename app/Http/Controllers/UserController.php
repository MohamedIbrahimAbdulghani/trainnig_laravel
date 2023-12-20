<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth"); //authentication مش اي حد يقدر يزوره الا الناس اللي عامله
    }
    public function __invoke(Request $request)
    {
        return "User Profile by invoke controller";
    }
}
