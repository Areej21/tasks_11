<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <ul> 
            @foreach ($tasks as $index => $task)
            {{-- <li> {{++$index}} </li> --}}
            <li> <a href="contact/ . {{$task->id}}"> {{$task->name}}  </a> </li>
            @endforeach 
        </ul>
    </body>
</html>  