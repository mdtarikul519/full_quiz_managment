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
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{


     public function quiz()
     {
          $alldata = Quiz::get();
          // dd($alldata->toArray());
          return view('forntend.quiz',compact('alldata'));
     }
     public function all_qiiz()
     {
          $data = Quiz::get();
          dd($data->toArray());
     }


     public function user_oies_quiz($id)
     {
          $user_quiz = QuizUser::with('userdetails', 'userQuiz')
               ->where('user_id', $id)
               ->get();
          dd($user_quiz->toArray());
          //dd($quiz_user);

     }

     public function user_attend_quiz()
     {

          $mainQuery = QuizQuestionSubmissions::whereExists(function ($query) {
               $query->select(DB::raw(1))
                   ->from('user_roles')
                   ->where('serial', 2)
                   ->whereColumn('id', 'user_roles.id');
           })
           ->get();


          //$uesr_yous_quiz = QuizQuestionSubmissions::select('user_id')->get();
          //dd($uesr_yous_quiz->toArray());
           dd($mainQuery->toArray());
          //dd(User::all()->count()-$uesr_yous_quiz->count());

     }
     public function quiz_question_option($id)
     {
          $quiz_question_option = Quiz::with('quizQuestions', 'quizQuestions.quizQuestionsOption')
               ->where('id', $id)
               ->first();

          dd($quiz_question_option->toArray());
     }

     public function quiz_question_correct_ans($quiz_id)
     {
          $quiz_question_ans = QuizQuestions::with('quizQuestionsOption', 'correct_answer')
               ->where('quiz_id', $quiz_id)
               ->get();
          dd($quiz_question_ans->toArray());
     }


     public function question_total_submission($id)
     {
          $total_question_submit = QuizQuestionSubmissions::where('question_id', $id)->get();
          dd($total_question_submit->toArray());
     }

     function question_answer($id)
     {
          $correct_answer = QuizQuestionSubmissions::where('question_id', $id)->where('is_correct', 1)->get();
          dd($correct_answer->toArray());
          $incorrect_answer = QuizQuestionSubmissions::where('question_id', $id)->where('is_correct', 0)->get();
          //dd($incorrect_answer->toArray());

     }


     public function quize_details($id)
     {
          $start = microtime(true);
          $quizs = Quiz::join('quiz_questions', 'quiz_questions.quiz_id', '=', 'quizzes.id')
               ->join('quiz_questions_options','quiz_questions_options.question_id','=','quiz_questions.id')
               ->select([
                    'quizzes.id',
                    'quizzes.title',

                    'quiz_questions.id as quiz_questions_id',
                    'quiz_questions.title as quiz_questions_title',

                    // 'quiz_questions_options.id as quiz_questions_options_id',
                    // 'quiz_questions_options.title as quiz_questions_options_title', 

               ])
               ->where('quizzes.id', $id)
               // ->groupBy('quizzes.id','quiz_questions.title','quiz_questions.id')
               ->get();
          // $quiz = Quiz::with('quizQuestions')->where('id',$id)->first();
          foreach ($quizs as $quiz) {
               $quiz->options = QuizQuestionsOptions::select(['question_id','title','is_correct'])->where('question_id',$quiz->quiz_questions_id)->get();
           }

          // $quizs = Quiz::where('id',$id)
          //      ->with([
          //           'quizQuestions'=>function($q){
          //                return $q->with(['quizQuestionsOption']);
          //           }
          //      ])->first();
          $time = microtime(true) - $start;
          dd($quizs->toArray(), $time);

          $quizeDetails = QuizUser::with([
               'quizQuestion',
               'quizQuestionsOptionDetails'
          ])
               ->where('user_id', $id)->get();
          dd($quizeDetails->toArray());
     }


     public function quize_attends($id){
          $quizNotAttend = QuizUser::where('quiz_id', $id)->count();

          dd(User::all()->count() - $quizNotAttend);

          dd($quizNotAttend->toArray());

     }


     public function total_quize_attends(){
          $quizAttend = QuizQuestionSubmissions::get()->pluck('user_id')->toArray();
           $allUser = User::get()->pluck('id')->toArray();
           $result = array_diff($allUser, $quizAttend);
           dd($quizAttend, $allUser, $result);
     }


     public function quiz_height_mark($id){
           $height_mark = QuizUser::where('quiz_id',$id)->orderBy('mark', 'desc')->get();
           dd($height_mark->toArray());
     }


     public function total_quiz_mark(){
          $quizTotalMark = QuizQuestions::select('mark')->sum('mark');
          dd( $quizTotalMark);
     }

     public function user_total_quiz_attend($id){
             $userAttendTotalQuiz = QuizUser::where('user_id', $id)->get();

             dd($userAttendTotalQuiz->toArray());
     }


     public function total_quiz_wise_leaderbox(){

          $totalQuizWiseLeaderbox = QuizUser::orderBy('mark', 'desc')->get();

          dd($totalQuizWiseLeaderbox->toArray());
     } 



















     public function quiz_question_option_view($id)
     {
          $alldata = QuizQuestions::where('quiz_id', $id)->with('question_option_relation')->get();
          // dd($alldata);
          return view('forntend.quiz_question_option', compact('alldata'));
     }
}
