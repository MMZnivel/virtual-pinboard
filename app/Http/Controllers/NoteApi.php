<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

class NoteApi extends Controller
{
	private $request;
    public function get()
    {
        return response()->json((new NoteController)->read());
        return new JsonResponse((new NoteController)->read());
    }

    public function save(Request $request) {
        dump('save');
        dump($this->request);
        $noteController = new NoteController();
        foreach ($this->request as $value) {
            dd($value);
            $noteController->save($value['text'], $value['x'], $value['y'], $value['id']);
        }
        return true;
    }

    public function save_v2($stuff) { // on save return all notes
        $noteController = new NoteController();
        foreach($stuff as $single_stuff) {
            $noteController->save(...$single_stuff);
        }
        return $stuff;
    } 
}