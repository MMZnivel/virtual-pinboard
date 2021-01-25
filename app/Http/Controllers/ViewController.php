<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Support\Facades\DB;

class ViewController
{
    public function index() {
        // This works (if tables are created)
        $pdo = new \PDO(
            'mysql:host=mysql;dbname=pinboard_db',
            'root',
            'Noch1DasManSichMerkenKann!'
        );
        $stmt = $pdo->query('SELECT * FROM notes');
        while ($row = $stmt->fetch())
        {
            // var_dump($row);
            echo "\n";
        }

        // This will fail and stop at $all_positions
        $all_positions = Position::all();
        return $all_positions;
        /*
        This will also fail!

        $positions = new Position;
        $positions->x = 2;
        $positions->y = 2;
        $positions->save();
        */
    }

    public function dashboard() {
        dump('bye bye');
        return redirect()->route('profile');
    }
}
