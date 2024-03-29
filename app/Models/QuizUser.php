<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizUser extends Model
{
    use HasFactory;

    public function userdetails()
    {
        return $this->hasOne(User::class, 'id');
    }

    public function userQuiz()
    {
        return $this->hasOne(Quiz::class, 'id', 'user_id');
    }


    public function quizQuestion()
    {
        return $this->hasMany(QuizQuestions::class, 'quiz_id');
    }

    public function quizQuestionsOptionDetails()
    {
        return  $this->hasMany(QuizQuestionsOptions::class, 'question_id');
    }

    public function quizUserRoleRelation()
    {
        return  $this->hasMany(UserRole::class, 'id');
    }
}
