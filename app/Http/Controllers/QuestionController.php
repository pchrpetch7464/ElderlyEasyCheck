<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {

    }
    public function insertQ(Request $request)
    {

        $request->validate([
            'Question' => 'required|max:255',
        ]);

        $questions = new Question;
        $questions->Question = $request->Question;
        $questions->Content = $request->Content;

        $questions->save();
        return redirect()->back()->with('success');
    }
    public function talk($id)
    {

        $Question = Question::find($id);
        $Message = Message::where("question_id", $id)->get();
        return view('.QandA.talk', compact('Message', 'Question'));
    }

    public function editQuestion($id)
    {

        $Question = Question::find($id);

        return view('.QandA.editQuestion', compact('Question'));
    }

    public function updateQuestion(Request $request, $id)
    {
        $request->validate(
            [

                'Question' => 'required|unique:questions|max:255',
                'Content' => 'required|unique:questions|max:255']
            , [
                'Question.required' => 'กรุณาป้อนข้อความ',
                'Question.max' => 'ข้อความยาวเกินไป',
                'Content.required' => 'กรุณาป้อนข้อความ',
                'Content.max' => 'ข้อความยาวเกินไป',
            ]
        );
        $update = Question::find($id)->update([
            'Question' => $request->Question,
            'Content' => $request->Content,

        ]);
        return redirect()->route('QandA')->with('success', "แก้ไขกระทู้เรียบร้อย");
    }

    public function deleteQuestion($id)
    {
        $delete = Question::find($id)->delete();
        return redirect()->back()->with('success', "ลบกระทู้เรียบร้อย");
    }
}
