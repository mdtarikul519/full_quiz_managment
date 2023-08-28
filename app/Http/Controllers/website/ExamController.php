<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionSubmit;
use App\Models\Quiz;
use App\Models\Quiz_questions;
use App\Models\Quiz_user;
use App\Models\QuizQuestions;
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
              $user_quiz = QuizUser::with('userdetails','userQuiz')
              ->where('user_id', $id)
              ->get();
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

     public function quiz_question_correct_ans($quiz_id){
             $quiz_question_ans =QuizQuestions::with('quizQuestionsOption','correct_answer')
             ->where('quiz_id',$quiz_id)
             ->get();
             dd( $quiz_question_ans->toArray());
   }


   public function question_total_submission($id){
            $total_question_submit = QuizQuestionSubmissions::where('question_id', $id)->get();
            dd($total_question_submit->toArray());
            
   }

   public function question_correct_answer($id){
        $question_correct_answer = QuizQuestionSubmissions::where('user_id', $id)->get();
   }



















     public function quiz_question_option_view($id) 
     {
          $alldata = Quiz_questions::where('quiz_id', $id)->with('question_option_relation')->get();
          // dd($alldata);
          return view('forntend.quiz_question_option',compact('alldata'));
     }
}
