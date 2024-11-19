<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (auth()->user()->answeredQuestion) {
            return back();
        }

        $qs = Question::with(['prize', 'answers']);

        $questions = $qs->get()->reverse();
        $question = $qs->get()->where('answered', false)->first();

        $qsc = session()?->get('question');
        if ($qsc) {
            $question = $qs->get()->find($qsc);
        }

        $answers = [
            $question->answers[0]->answer1,
            $question->answers[0]->answer2,
            $question->answers[0]->answer3,
            $question->answers[0]->answer4
        ];

        return view('games', compact('questions', 'question', 'answers'));
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
    public function store(Request $request)
    {
        $request->validate([
            'answer' => 'required',
            'question_id' => 'required',
            'prize' => 'required',
            'answered' => 'required',
        ]);

        $question = Question::with(['prize', 'answers'])->find($request->question_id);
        if (!$question) {
            return back()->with('error', 'No more questions');
        }

        if ($request->answer !== $question->correctAnswer) {
            User::query()->where('id', auth()->user()->id)->update([
                'answeredQuestion' => true,
            ]);

            return redirect()->route('games.show');
        }

        if ($question->prize && $question->prize->checkpoint) {
            User::query()->where('id', auth()->user()->id)->update([
                'prize' => $question->prize->value,
            ]);
        }

        $question->update([
            'answered' => true
        ]);

        $nextQuestion = $question->id + 1;
        if ($nextQuestion > count(Question::all())) {
            User::query()->where('id', auth()->user()->id)->update([
                'answeredQuestion' => true,
            ]);

            return redirect()->route('games.show');
        }

        $question = Question::find($nextQuestion);

        return back()->with('question', $question);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $prize = User::query()->where('id', auth()->user()->id)->first()->prize;

        return view('result', compact('prize'));
    }

    public function restart()
    {
        User::query()->where('id', auth()->user()->id)->update([
            'answeredQuestion' => false,
            'prize' => 0
        ]);

        Question::query()->where('answered', true)->update([
            'answered' => false
        ]);

        return redirect()->route('games.index');
    }
}
