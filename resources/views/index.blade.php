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
<body class="bg-green-100 w-3/4 m-auto" >
<h1 class="text-4xl text-center">Hadith</h1>
<br>
@foreach ($deeds as $deeds)
    <form action="/hadith/{{$deeds->id}}/edit" method="get">
    <div class="rounded-2xl ">
        <li> <a class="font-bold hover:text-blue-700" href="/hadith/{{$deeds->id}}"> {{$deeds->Narrator}} </a>
        {{$deeds->Hadith}}<button class=" text-green-700 hover:text-green-900 font-bold py-1 px-1 rounded" type="submit">Edit</button></div>
        <br>
        </li>
    </form>
@endforeach
<form action="/hadith/create" method="get">
    <button class=" bg-green-700 hover:bg-green-900 text-white font-bold py-1 px-52 rounded " type="submit">add hadith</button>
</form>
</body>
</html>

