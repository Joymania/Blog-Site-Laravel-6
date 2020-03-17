<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud_Learning</title>
</head>
<body>
    <ul>

           @foreach ($sociallinks as $key=>$value)

           @if (Auth::check())
           <li>
               <a href="{{ $value }}">{{$key}}</a>
               <br>
            </li>
            @endif

           @endforeach

    </ul>
</body>
</html>
