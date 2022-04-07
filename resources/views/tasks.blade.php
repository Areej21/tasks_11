<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <ul> 
            <?php foreach ($tasks as $key => $task): ?>
            <li> <a href="{{'show/' . $key}}" > <?php echo $task ?> </li>
            <?php  endforeach; ?>
        </ul>
    </body>
</html>