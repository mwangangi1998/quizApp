<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    //
    public function fetchInsert()
    {
        $Questions = Http::get('https://quizapi.io/api/v1/questions', [
            'apiKey' => 'G5l1iKG2sxXiVpD5PLvCQpeYvxRIKY4wT5OJDhG5',
            'limit' => 5,
        ]);
        $Questions = json_decode($Questions->body());
        foreach ($Questions as $quiz) {
            $question = new question();
            $question->question = $quiz->question;
            $question->answer_a = $quiz->answers->answer_a;
            $question->answer_b = $quiz->answers->answer_b;
            $question->answer_c = $quiz->answers->answer_c;
            $question->save();
        }
        return "data fetched for quiz Api";
    }
    public function show()
    {
        # code...
        $data['Questions'] = question::all();
        return view('welcome', $data);
    }
}
