<?php

namespace App\Http\Controllers;

use App\Models\Question;

class MyController extends Controller
{
    public function About()
    {
        return view('About');
    }
    public function Exam()
    {
        return view('Exam');
    }
    public function QandA()
    {
        $question = Question::all();
        return view('QandA/QandA', compact('question'));
    }
    public function Examination()
    {
        return view('Examination');
    }
    public function ChestandLung()
    {
        return view('ChestandLung');
    }
    public function Heart()
    {
        return view('Heart');
    }

    public function LookCaL()
    {
        return view('/ChestandLung/LookCaL');
    }
    public function FeelCaL()
    {
        return view('/ChestandLung/FeelCaL');
    }
    public function KnockCaL()
    {
        return view('/ChestandLung/KnockCaL');
    }
    public function ListenCaL()
    {
        return view('/ChestandLung/ListenCaL');
    }

    public function LookHeart()
    {
        return view('/Heart/LookHeart');
    }
    public function FeelHeart()
    {
        return view('/Heart/FeelHeart');
    }
    public function KnockHeart()
    {
        return view('/Heart/KnockHeart');
    }
    public function ListenHeart()
    {
        return view('/Heart/ListenHeart');
    }

}
