@extends('forntend.layout.website')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($quizQuestion as $quizQuestions)
                        <h1>{{ $quizQuestions->title }}</h1>
                          @foreach ($quizQuestions->quizQuestionsOption as $options)
                          {{-- @dd($quizQuestions->quizQuestionsOption->toArray()); --}}
                          <input type="checkbox" name="title[{{ $options->id }}][]" value="{{ $options->title }}">
                          <label for="vehicle1"> {{ $options->title }}</label><br>    
                          @endforeach
                    @endforeach
           
                </form>

            </div>
        </div>
    </div>
@endsection
