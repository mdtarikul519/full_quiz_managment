<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => '', 'middleware' => ['istudent'], 'namespace' => 'website'], function () {
//     Route::get('/', 'WebsiteController@index');

//     Route::get('/quiz_question/{id}', 'ExamController@quiz_question_option_view')->name('quiz_question');
//     Route::get('/quizs', 'ExamController@quiz')->name('quiz_view');
//     //query practice 
//     Route::get('/all-qiiz', 'ExamController@all_qiiz')->name('all_qiiz');
//     Route::get('/user-wise-user/{id}', 'ExamController@user_oies_quiz')->name('quiz_user');
//     Route::get('/user-attend-quiz', 'ExamController@user_attend_quiz')->name('user_quiz');
//     Route::get('/quiz-question-option/{id}', 'ExamController@quiz_question_option')->name('user_quiz');
//     Route::get('/quiz-question-correct-ans/{id}', 'ExamController@quiz_question_correct_ans')->name('user_quiz');
//     Route::get('/signal-question-total-submission/{id}', 'ExamController@question_total_submission')->name('user_quiz');
//     Route::get('/question-answer/{id}', 'ExamController@question_answer')->name('user_quiz');
//     Route::get('/quize-details/{id}', 'ExamController@quize_details')->name('user_quiz');
//     Route::get('/quize-attends/{id}', 'ExamController@quize_attends')->name('user_quiz');
//     Route::get('/total-user-attends', 'ExamController@total_quize_attends')->name('user_quiz');
//     Route::get('/quiz-height-mark/{id}', 'ExamController@quiz_height_mark')->name('user_quiz');
//     Route::get('/total-quiz-mark', 'ExamController@total_quiz_mark')->name('user_quiz');
//     Route::get('/user-total-quiz-attend/{id}', 'ExamController@user_total_quiz_attend')->name('user_quiz');
//     Route::get('/total-quiz-wise-leaderbox', 'ExamController@total_quiz_wise_leaderbox')->name('user_quiz');

//     // Route::get('/quiz_exam/{id}', 'ExamController@quiz_question_view')->name('quiz_question');
//     // Route::Post('/quiz_question_store', 'ExamController@quiz_question_store')->name('quiz_question_store');
//     // Route::get('/quiz_answer_view/{quiz_id}', 'ExamController@quiz_answer_view')->name('quiz_answer_view');
//     // Route::get('/exam_answer_view{id}', 'ExamController@exam_answer_view')->name('exam_answer_view');
//     // Route::get('/profile', 'WebsiteController@profile')->name('profile');
// });


Route::group(['prefix' => '', 'middleware' => ['istudent'], 'namespace' => 'website'], function () {
    Route::get('/', 'WebsiteController@index');

    Route::get('/quizs', 'QuizController@quiz')->name('quizs');
    Route::get('/quizs/question/{id}', 'QuizController@quiz_question')->name('quiz_question');
    Route::post('/quizs/question/submit', 'QuizController@quiz_question_submit')->name('quiz_question_submit');
    Route::get('/quizs/question/submit/answer/{id}', 'QuizController@quiz_question_submit_answer')->name('quiz_question_submit_answer');
    Route::get('/quizs/question/submit/answer/{id}', 'QuizController@quiz_question_submit_answer')->name('quiz_question_submit_answer');
    Route::get('/total/quizs/question/marks/{id}', 'QuizController@quiz_question_mark')->name('quiz_question_mark');
   // Route::get('/quizs/question/result/{id}', 'QuizController@quiz_question_result')->name('quiz_question_result');





});


///admin
Route::group(['prefix' => '', 'middleware' => ['isadmin'], 'namespace' => 'Admin'], function () {
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
    Route::get('/class/create', 'ClassController@classcreate')->name('classes.create');
    Route::post('/class/store', 'ClassController@store')->name('admin.classes.store');
    Route::get('/class/view', 'ClassController@view')->name('admin.classes.view');
    Route::get('/class/edit/{id}', 'ClassController@edit')->name('admin.classes.edit');
    Route::post('/class/update/{id}', 'ClassController@update')->name('admin.classes.update');
    Route::get('/class/delete/{id}', 'ClassController@delete')->name('admin.classes.delete');

    //quizzes
    Route::get('/quiz/create', 'QuizController@create')->name('admin.quiz.create');
    Route::post('/quiz/store', 'QuizController@store')->name('admin.quiz.store');
    Route::get('/quiz/view', 'QuizController@view')->name('admin.quiz.view');
    Route::get('/quiz/edit/{id}', 'QuizController@edit')->name('admin.quiz.edit');
    Route::post('/quiz/update/{id}', 'QuizController@update')->name('admin.quiz.update');
    Route::get('/quiz/delete/{id}', 'QuizController@delete')->name('admin.quiz.delete');
    Route::get('/quiz/examinner_details/{id}', 'QuizController@examinner_details')->name('examinner_details');


    //questions
    Route::get('/question/create', 'QuestionController@create')->name('admin.question.create');
    Route::post('/question/store', 'QuestionController@store')->name('admin.question.store');
    Route::get('/question/view', 'QuestionController@view')->name('admin.question.view');
    Route::get('/question/edit/{id}', 'QuestionController@edit')->name('admin.question.edit');
    Route::post('/question/update/{id}', 'QuestionController@update')->name('admin.question.update');
    Route::get('/question/delete/{id}', 'QuestionController@delete')->name('admin.question.delete');

    //option

    Route::get('/option/create', 'OptionController@create')->name('admin.option.create');
    Route::post('/option/store', 'OptionController@store')->name('admin.option.store');
    Route::get('/option/view', 'OptionController@view')->name('admin.option.view');
    Route::get('/option/edit/{id}', 'OptionController@edit')->name('admin.option.edit');
    Route::post('/option/update/{id}', 'OptionController@update')->name('admin.option.update');
    Route::get('/option/delete/{id}', 'OptionController@delete')->name('admin.option.delete');
});


Route::get('/t', function () {
    $users = User::select('id', 'role_id', 'email')->whereNotExists(function ($query) {
        $query->select(DB::raw('user_id'))
            ->from('quiz_question_submissions')
            ->whereColumn('quiz_question_submissions.user_id', 'users.id');
    })
        ->with([
            'userquiz' => function ($q) {
                return $q->select('id', 'user_id', 'quiz_id');
            }
        ])
        ->get();
    dd($users->toArray());
});
