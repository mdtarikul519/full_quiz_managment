<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Quiz_questions;
use App\Models\QuizQuestions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create()
    {
        $quiz = Quiz::get();
        return view('admin.question.create', compact('quiz'));
    }


    public function store(request $request)
    {

        $data = new QuizQuestions();
        // dd(request()->all());
        $data->quiz_id = $request->quiz_id;
        $data->title = $request->title;
        $data->mark = $request->mark;
        $data->is_multipol = $request->is_multipol;


        // $data->answer = $request->answer;

        // if ($request->multipal == "0") {
        //     $data->answer = $request->answer;
        //     $data->save();
        // } else if ($request->multipal == "1") {
        //     $tarek_multipal = explode(',', request()->answer);
        //     $decode = json_encode($tarek_multipal);
        //     $data->answer = $decode;
        //     $data->multipal = 1;
        //     $data->save();
        //     //  dd(request()->all());
        // }

        $data->save();
        //    dd($data);
        return redirect()->route('admin.question.view')->with('success', 'data insert successfully');
    }

    public function view()
    {
        $alldata = QuizQuestions::with('quiz_relation')->get();
        return view('admin.question.view', compact('alldata'));
    }


    public function edit($id)
    {

        $editdata = QuizQuestions::find($id);
        $quiz = Quiz::get();
        return view('admin.question.edit', compact('editdata', 'quiz'));
    }


    public function update(Request $request, $id)
    {
        $data = QuizQuestions::find($id);

        $data->quiz_id = $request->quiz_id;
        $data->title = $request->title;
        $data->mark = $request->mark;
        $data->is_multipol = $request->is_multipol;

        // if ($request->multipal == "0") {
        //     $data->answer = $request->answer;
        //     $data->save();
        // } else if ($request->multipal == "1") {
        //     $tarek_multipal = explode(',', request()->answer);
        //     $decode = json_encode($tarek_multipal);
        //     $data->answer = $decode;
        //     $data->multipal = 1;
        //     $data->save();
        //     //  dd(request()->all());
        // }

        $data->update();
        //    dd($data);
        return redirect()->route('admin.question.view')->with('success', 'data update successfully');
    }


    public function delete($id)
    {
        QuizQuestions::where('id', $id)->delete();
        return redirect()->back();
    }
}
