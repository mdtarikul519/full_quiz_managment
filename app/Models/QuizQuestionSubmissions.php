<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestionSubmissions extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'quiz_id',
        'question_id',
        'option_id',
        'is_correct',

    ];

    // public function userQuestionSubmit(){
    //     return $this->hasMany(User::class);
    // }
}
