<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\QuizQuestions;
use App\Models\QuizQuestionSubmissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function quiz()
    {
        $alldata = Quiz::get();
        //dd($alldata->toArray());
        return view('forntend.quiz', compact('alldata'));
    }

    public function quiz_question($id)
    {
        $quizQuestions = QuizQuestions::with('quizQuestionsOptions')->where('quiz_id', $id)
            ->get();
        //dd($quizQuestions->toArray());

        return view('forntend.quiz_question', compact('quizQuestions'));
    }


    public function quiz_question_submit(request $Request){
         //dd(request()->all());
        $data = new QuizQuestionSubmissions();
foreach(request()->all() as $index => $submission) {
    if($index == '_token' || $index == 'quiz_id') {
        //dd($submission);
    } else {
        //dd($submission);
        foreach($submission as $ind => $answer) {

            //in_array(13, $answer);
            //dd($answer);
            //dd(in_array(1 ,array_keys($answer)));


            $question = QuizQuestions::find($ind);
            //dd($question);
            $options = $question->quizQuestionsOptions->pluck('id');
            foreach ($options as $option) {
                QuizQuestionSubmissions::create([

                 'user_id' => Auth::user()->id,
                 'quiz_id' =>  $question->quiz_id,
                 'question_id' =>  $ind,
                 'option_id' => $option,
                 'is_correct' => in_array($option, array_keys($answer)),

                ]);
            }
            //dd($answer);
        }

    };





}
        
       

    }
}
