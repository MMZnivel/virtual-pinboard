<?php

namespace App\Http\Controllers;

class ViewController
{
    public function index() {
        return "hi index";
    }

    public function dashboard() {
        dump('bye bye');
        return redirect()->route('profile');
    }
}
