<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function insertM(Request $request)
    {
        $request->validate([
            'Rmessage' => 'required|max:255',
        ]);
        $q_id = $request->q_id;

        $messages = new Message;
        $messages->question_id = $q_id;
        $messages->Rmessage = $request->Rmessage;

        $messages->save();
        return redirect()->back()->with('success');
    }
}
