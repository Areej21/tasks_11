<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
<form action ="/about">
    @csrf
    <input type="text" name ="name" id="name"> 
    <input type ="submit" value="send">
</form>
@if(isset($name))
<h1> {{$name}}</h1>
@endif
    </body>
</html>