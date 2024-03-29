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
        $submittedAnswer = QuizQuestionSubmissions::where('quiz_id', request()->quiz_id)->get()->groupBy('question_id');
        $mark = 0;
        foreach ($submittedAnswer as $index => $answer) {
            $option = QuizQuestionsOptions::where('question_id', $index)->where('is_correct', 1)->pluck('id')->toArray();
            //dd($option);
            //dd($answer->pluck('option_id')->toArray());
            if ($answer->pluck('option_id')->toArray() == $option) {
                $mark =  $mark + 1;
            }
        }
        //dd($mark);

        $orderedMarks = QuizUser::where('quiz_id', request()->quiz_id)->orderBy('mark', 'desc')->get();

foreach ($orderedMarks as $result) {
    QuizUser::create([
        'user_id' =>  Auth::user()->id,
        'quiz_id' => request()->quiz_id,
        'mark' => $result->$mark,
    ]);
}
     
        // $data = new QuizUser();
        // $data->user_id = Auth::user()->id;
        // $data->quiz_id = request()->quiz_id;
        // $data->mark = $mark;
        // $data->save();
         
    }

    // public function quiz_question_mark($id){
    //     $submittedAnswer = QuizQuestionSubmissions::where('quiz_id', $id)->get()->groupBy('question_id');
    //       $mark = 0;
    //     foreach($submittedAnswer as $index => $answer) {
    //         $option = QuizQuestionsOptions::where('question_id', $index)->where('is_correct', 1)->pluck('id')->toArray();
    //         //dd($option);
    //         if ($answer->pluck('option_id')->toArray() == $option) {
    //             $mark =  $mark + 1;
    //         }
    //     }
    //     dd($mark);
    // }





    public function quiz_question_submit_answer($id)
    {

        $correct_answer = QuizQuestionsOptions::where('question_id', $id)->where('is_correct', 1)->count();

        $Notcorrect_answer = QuizQuestionsOptions::where('question_id', $id)->where('is_correct', 0)->count();



        // dd($correct_answer,  $Notcorrect_answer);
    }
}
