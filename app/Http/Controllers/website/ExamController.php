<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionSubmit;
use App\Models\Quiz;
use App\Models\Quiz_questions;
use App\Models\Quiz_user;
use App\Models\QuizQuestionsOptions;
use App\Models\QuizQuestionSubmissions;
use App\Models\QuizUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
     public function all_qiiz()
     {
          $data = Quiz::get();
          dd( $data->toArray()); 
       
     }


    public function user_oies_quiz($id){
              $user_quiz = QuizUser::where('user_id', $id)->get();
              dd($user_quiz->toArray());
         //dd($quiz_user);
       
    }
                      
   public function user_attend_quiz($id){

      $uesr_yous_quiz = QuizUser::where('quiz_id', $id)->get();
     //dd($uesr_yous_quiz->toArray());
     //dd($uesr_yous_quiz->count());
      //dd(User::all()->count()-$uesr_yous_quiz->count());
     
   }
   public function quiz_question_option($id){
     $quiz_question_option = Quiz::with('quizQuestions','quizQuestions.quizQuestionsOption')
     ->where('id', $id)
     ->get();

     dd( $quiz_question_option->toArray());
   }



















     public function quiz_question_option_view($id) 
     {
          $alldata = Quiz_questions::where('quiz_id', $id)->with('question_option_relation')->get();
          // dd($alldata);
          return view('forntend.quiz_question_option',compact('alldata'));
     }
}
