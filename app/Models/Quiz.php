<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    public function quizQuestions()
    {
        return  $this->hasMany(QuizQuestions::class);

    }

    public function quizSubmissionRelation()
    {
        return  $this->hasMany(QuizQuestionSubmissions::class);

    }

}
