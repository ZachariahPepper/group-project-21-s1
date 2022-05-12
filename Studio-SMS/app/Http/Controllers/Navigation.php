<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navigation extends Controller
{
    function pre_welcome()
    {
        return view("pre_welcome");
    }

    function welcome() 
    {
        return view("welcome");
    }

    function notes() 
    {
        return view("notes");     
    }

    function cohort() 
    {
        return view("cohort"); 
    }

    function students()
    {
        return view("students"); 
    }

    function evidence() 
    {
        return view("evidence");
    }

    function login() 
    {
        return view("login");
    }

    function register() 
    {
        return view("register");
    }
}
