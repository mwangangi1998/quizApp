@extends('layouts.app')
@section('content')
    <div class=" bg-secondary">
        <div class="container mt-5">
            @foreach ($questions as $question)
                <h4>{{ $question->id }}. &nbsp; {{ $question->question }}</h4>
                <div class="container">
                    <ul class="list-unstyled ml-0">
                        <li> A .&nbsp;{{ $question->answer_a }}</li>
                        <li> B .&nbsp; {{ $question->answer_b }}</li>
                        <li>C .&nbsp;{{ $question->answer_c }}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
