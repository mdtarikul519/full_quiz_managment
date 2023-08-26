<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionSubmit;
use App\Models\Quiz;
use App\Models\Quiz_questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
     public function quiz_view()
     {
          $data = Quiz::get();
     //   dd( $data); 
          return view('forntend.quiz', compact('data'));
     }

   public function user_quiz(){

      $uesr_yous_quiz =Quiz::with('')
     // dd($uesr_yous_quiz);
     // return view('forntend.quiz');
   }




















     public function quiz_question_option_view($id) 
     {
          $alldata = Quiz_questions::where('quiz_id', $id)->with('question_option_relation')->get();
          // dd($alldata);
          return view('forntend.quiz_question_option',compact('alldata'));
     }
}
