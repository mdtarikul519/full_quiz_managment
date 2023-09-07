<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\QuizQuestions;
use App\Models\QuizQuestionsOptions;
use App\Models\QuizQuestionSubmissions;
use App\Models\QuizUser;
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


    // public function quiz_question_submit(request $Request)
    // {
    //     dd(request()->all());
    //     $data = new QuizQuestionSubmissions();
    //     foreach (request()->all() as $index => $submission) {
    //         if ($index == '_token' || $index == 'quiz_id') {
    //             //dd($submission);
    //         } else {
    //             //dd($submission);
    //             foreach ($submission as $ind => $answer) {

    //                 //in_array(13, $answer);
    //                 //dd($answer);
    //                 //dd(in_array(1 ,array_keys($answer)));


    //                 $question = QuizQuestions::find($ind);
    //                 //dd($question);
    //                 $options = $question->quizQuestionsOptions->pluck('id');
    //                 foreach ($options as $option) {
    //                     QuizQuestionSubmissions::create([

    //                         'user_id' => Auth::user()->id,
    //                         'quiz_id' =>  $question->quiz_id,
    //                         'question_id' =>  $ind,
    //                         'option_id' => $option,
    //                         'is_correct' => in_array($option, array_keys($answer)),

    //                     ]);
    //                 }
    //                 //dd();
    //             }
    //         };
    //     }
    // }

    public function quiz_question_submit(request $Request)
    {
        //dd(request()->all());
        $data = new QuizUser();   
        $data->user_id = Auth::user()->id;
        $data->quiz_id = request()->quiz_id;
        $data->save();

        foreach (request()->submitions as $index => $submition) {


            foreach ($submition as $ind => $value) {
                $option = $ind;
                $question = $index;
                //   $is_correct = $option ::find();
                $options = QuizQuestionsOptions::find($ind);

                //dd($options->toArray());
                $submit = new QuizQuestionSubmissions();
                $submit->user_id = Auth::user()->id;
                $submit->quiz_id = request()->quiz_id;
                $submit->question_id = $question;
                $submit->option_id = $option;
                $submit->is_correct = $options->is_correct;

                $submit->save();
            }
        }
    }

    public function quiz_question_mark($id)
    {
        $submittedAnswer = QuizQuestionSubmissions::where('quiz_id', $id)->get()->groupBy('question_id');

        //dd(  $submittedAnswer->toArray());
        $mark = 0;
        foreach ($submittedAnswer as $index => $answer) {
            //dd($index);

            $option = QuizQuestionsOptions::where('question_id', $index)->where('is_correct', 1)->pluck('id')->toArray();
            // dd($option);
            //dd($answer->pluck('option_id')->toArray());
            if ($answer->pluck('option_id')->toArray() == $option) {
                $mark =  $mark += 1;   
            }
           
        }
        $quizMarkUpdate =  QuizUser::where('quiz_id', $id)->where('user_id', Auth::user()->id)->first();
        $quizMarkUpdate->mark = $mark ;
        $quizMarkUpdate->save();
        //dd($quizMarkUpdate);   
       // dd($mark);
    }


    // public function quiz_question_mark($id)
    // {
    //     $options = Quiz::where('id',$id)->with('quizSubmissionRelation')->first();

    //     dd($options->quizSubmissionRelation->where('is_correct', 1)->count());
    //     //  $options = Quiz::where('id',$id)->with('quiz_submission_relation', function($query){
    //     //     $query->where('is_correct', 1);   
    //     //  })->count();
    //     //  dd('quizSubmissionRelation')->get();
    //     // dd($options);
    // }








    public function quiz_question_submit_answer($id)
    {

        $correct_answer = QuizQuestionsOptions::where('question_id', $id)->where('is_correct', 1)->count();

        $Notcorrect_answer = QuizQuestionsOptions::where('question_id', $id)->where('is_correct', 0)->count();



        // dd($correct_answer,  $Notcorrect_answer);
    }
}
