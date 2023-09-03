<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\QuizQuestions;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quiz()
    {
        $alldata = Quiz::get();
        // dd($alldata->toArray());
        return view('forntend.quiz', compact('alldata'));
    }

    public function quiz_question($id)
    {
        $quizQuestions = QuizQuestions::with('quizQuestionsOption')->where('quiz_id', $id)
            ->get();
        // dd($quizQuestion->toArray());

        return view('forntend.quiz_question', compact('quizQuestions'));
    }


    public function quiz_question_submit(request $Request){

        dd(request()->all());

    }
}
