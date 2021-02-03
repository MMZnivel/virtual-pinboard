<?php

namespace App\Http\Controllers;

use App\Models\Note;

class NoteController
{
    public function save(string $text, int $x, int $y, int $note_id = null) {
        //  dd(new \DateTime);
        $note = Note::updateOrCreate(
            ['id' => $note_id],
            [
                'text' => $text,
                'pos_x' => $x,
                'pos_y' => $y,
            ]
        );

        dd($note);
        
       // $note = $note_id ? $this->update($note_id, $text, $x, $y) : $note = $this->create($text, $x, $y);
       // $note->save();
    }
    /*
    private function update(int $id, string $text, int $x, int $y) {
        $note = Note::find($id);
        $note->text = $text;
        $note->position()->x = $x;
        $note->position()->y = $y;
        $note->position()->save();
        // (new PositionController)->update($note->position_id, $x, $y);
        $note->updated = new \DateTime("now"); // WIP
        return $note;
    }

    private function create(string $text, int $x, int $y) {
        $note = new Note;
        $note->position_id = (new PositionController)->create($x, $y);
        $note->text = $text;
        return $note;
    }
    */
    private function delete(int $id) {
        $foo = Note::find($id);
        $deleted_id = $foo->id;
        $foo->delete();
        $note = Note::whereId($deleted_id)->first();
        if($note == null) {
            return null;
        }

    }

    public function read() {
        $raw_notes = Note::get();
        $notes = [];
        foreach ($raw_notes as $note) {
            $notes[] = $note->getAttributes();
        }
        return $notes;
        // return Note::with('position')->get();
    }
}
