<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index(){
        return view ('Questions.question');
    }

    public function submit(){
        // Question::insert([
        //     'answerss'=> $request->answerss,
        // ]);
        // return back();
        $questions = new Question();
        $questions->answerss = request('answerss');
        $questions->message = request('message');
        $questions->save();
    }
}
