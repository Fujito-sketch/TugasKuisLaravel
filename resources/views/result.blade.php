<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main>
    <h1>Hasil Kuis</h1>
    <p>{{!$prize || $prize === 0 ? 'GADAPET APA APA WKWKKWKWKWKW' : $prize}}</p>

    <h4>Mau main lagi???</h4>
    <a href="{{route('games.restart')}}" style="padding: 8px 12px; background-color: #333; color: #fff; text-decoration: none">Gasss</a>
</main>
</body>
</html>
