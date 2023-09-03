@extends('forntend.layout.website')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{route('quiz_question_submit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($quizQuestions as $quizQuestion)
                       {{ $quizQuestion->id }}
                        <h1>{{ $quizQuestion->title }}</h1>
                        @foreach ($quizQuestion->quizQuestionsOption as $options)
                         {{ $options->id }}
                            <input type="checkbox" name="title[{{ $quizQuestion->title }}][{{ $options->id }}][]" value="{{ $options->title }}">
                            <label for="vehicle1"> {{ $options->title }}</label><br>
                        @endforeach
                    @endforeach
                   <input  type="submit" value="Submit">
                </form>

            </div>
        </div>
    </div>
@endsection
