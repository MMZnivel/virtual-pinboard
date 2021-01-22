<?php

namespace App\Http\Controllers;

class ViewController
{
    public function index() {
        var_dump("auf jehts");
        $servername = "127.0.0.1";
        $username = "first-class-access";
        $password = "1DasManSichMerkenKann.Bitte?";
        var_dump("...");
        $results = app('db')->select("SELECT * FROM users");
        // Create connection
        $conn = mysqli_connect($servername, $username, $password);
        var_dump($conn);
        var_dump("nope");
        return "hi index";
    }

    public function dashboard() {
        dump('bye bye');
        return redirect()->route('profile');
    }
}
