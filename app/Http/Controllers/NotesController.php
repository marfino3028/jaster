<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Note;

class NotesController extends Controller
{
    public function showNotes() {
        $authId = Auth::user()->id;
        $listNotes = Note::where('receiver_id', $authId)
                        ->join('users', 'notes.user_id', 'users.id')->get();

        if ($listNotes) {
            return view('backend.dashboard', compact('listNotes'));
        }
    }

    public function AddUserNotes() {
        $listUser = User::select('id', 'name')->get();
        $listNotes = Note::all();

        return view('backend.pages.add-notes', compact('listUser', 'listNotes'));
    }

    public function store(Request $request) {
        $loggedUser = Auth::user()->id;
        $cekNotes = Note::where([
                        ['receiver_id', $request->penerima],
                        ['user_id', $loggedUser],
                        ])->first();

        if ($cekNotes === null) {
            $createNote = Note::create([
                'user_id' => $loggedUser,
                'receiver_id' => $request->penerima,
                'catatan' => $request->catatan,
            ]);
        } else {
            $updateNote = Note::where([
                            ['receiver_id', $request->penerima],
                            ['user_id', $loggedUser],])
                                ->update([
                                    'catatan' => $request->catatan,
                                ]);
        }
        

        return redirect('/');
    }
}
