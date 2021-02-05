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
        // dump('save');
        // dump($request->json());
        $noteController = new NoteController();
        foreach ($request->json() as $value) {
            // dump($value);
            $noteController->save($value['id'], $value['text'], $value['pos_x'], $value['pos_y']);
        }
        return response()->json(true);
    }

    public function save_v2($stuff) { // Not working!
        $noteController = new NoteController();
        foreach($stuff as $single_stuff) {
            $noteController->save(...$single_stuff);
        }
        return $stuff;
    } 

    public function delete(Request $request) {
        // dump('delete');
        // dump($request->json()->get(0));
        $noteController = new NoteController();
        return response()->json($noteController->delete($request->json()->get(0)));
    } 
}