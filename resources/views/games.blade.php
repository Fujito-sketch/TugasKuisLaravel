<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            font-family: "JetBrains Mono", monospace;
        }
        .kuis-heading {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            margin-top: 50px;
        }

        .kuis-heading-title {
            color: #333;
            font-size: 50px;
            text-align: center;
        }

        .kuis-heading-header {
            display: flex;
            flex-direction: column;
            gap: 12px;
            text-align: center;
        }

        .kuis-heading-prize {
            border: 1px solid #333;
            padding: 10px 20px;
            position: absolute;
            right: 24px;
            top: 24px;
            display: flex;
            flex-direction: row;
            gap: 12px;
            border-radius: 5px;
        }

        .kuis-heading-prize .active {
            background-color: #333;
            color: #fff;
        }

        .kuis-heading-prize .active-answered {
            background-color: red;
            color: #fff;
        }

        .kuis-soal {
            border: 1px solid #000;
            max-width: 500px;
            margin: 12px auto;
            padding: 20px;
            border-radius: 10px;
        }

        .kuis-jawaban {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            max-width: 500px;
            margin: 12px auto;
        }

        .kuis-jawaban button {
            width: 100%;
            padding: 10px;
            cursor: pointer;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<main>
    <div class="kuis-heading">
        <div class="kuis-heading-header">
            <h1 class="kuis-heading-title">Kuis Online</h1>
            @if(session()->has('error'))
                <p style="background-color: red">{{ session('error') }}</p>
            @endif
        </div>
        <div class="kuis-heading-prize">
            <ul>
                @foreach($questions as $q)
                    <li
                        class="{{($question->prize->value === $q->prize->value) ? 'active' : ''}} {{($q->answered) ? 'active-answered' : ''}}">
                        {{ $q->prize->value }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="kuis-wrapper">
        @if(isset($question))
        <div class="kuis-soal">
            {{ $question->name }}
        </div>
        @endif
        <div class="kuis-jawaban">
            @foreach($answers as $answer)
                <form action="{{route('games.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="question_id" value="{{ $question->id }}">
                    <input type="hidden" name="prize" value="{{ $question->prize->value }}">
                    <input type="hidden" name="answered" value="{{ $question->answered }}">
                    <input type="hidden" name="answer" value="{{ $answer }}">

                    <button type="submit">{{$answer}}</button>
                </form>
            @endforeach
        </div>
    </div>
</main>
</body>
</html>
