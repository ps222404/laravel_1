<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
</head>
<body class="bg-green-100 w-3/4 m-auto">
<h1>Edit Hadith</h1>
<form  action="{{ route('update', $deeds->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input class="border-gray-300"type="text" name="Narrator" id="Narrator"  required value="{{ $deeds->Narrator }}">
    <br>
    <textarea class="w-1/2 h-1/4" name="Hadith" id="Hadith" required >{{ $deeds->Hadith }}</textarea>
    <button class=" bg-green-600 text-white hover:bg-green-800 font-bold py-1 px-1 rounded" type="submit">Submit</button>
</form>
<form action="{{ route('destroy', $deeds->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
</form>
</body>
</html>
