<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
</head>
<body class="bg-green-100 w-3/4 m-auto">
<h1>add Hadith</h1>
<form action="{{ route('store')}}" method="POST">
    @csrf
    <input  type="text" name="Narrator" id="Narrator" required>
    <input  type="text" name="Hadith" id="Hadith" required>
    <button type="submit">Submit</button>
</form>
</div>
</body>
</html>

