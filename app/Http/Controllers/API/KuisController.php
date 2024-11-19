<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Prize;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with(['answers', 'prize'])->get();
        $question = $questions->where('answered', false)->first();


        return response()->json(['question' => $question, 'questions' => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'answer' => 'required',
            'question_id' => 'required',
        ]);

        $answerUser = $request->answer;
        $currentQuestion = $request->question_id;

        $question = Question::with(['prize', 'answers'])->find($currentQuestion);
        if (!$question) {
            return response()->json(['message' => 'No more questions']);
        }

        if ($answerUser !== $question->correctAnswer) {
            return response()->json(['message' => 'Wrong answer', 'answer' => $answerUser, 'correctAnswer' => $question->correctAnswer]);
        }

        if ($question->prize && $question->prize->checkpoint) {
            User::query()->where('id', 1)->update([
                'prize' => $question->prize->value,
            ]);
        }

        $question->answered = true;
        $question->save();

        $nextQuestion = $currentQuestion + 1;
        if ($nextQuestion > count(Question::all())) {
            return response()->json(['message' => 'You win!']);
        }

        $question = Question::with(['prize', 'answers'])->find($nextQuestion);

        return response()->json(['question' => $question, 'nextQuestion' => $nextQuestion]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $prize = User::query()->where('id', 1)->first()->prize;
        return response()->json(['prize' => $prize]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
