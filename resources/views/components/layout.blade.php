<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Benjamin Chemhuru</title>

        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body style="background-color: #0a192f">
        <div class="sidenav">
        <a href="/"><span class="icons"></span></a>
       <a href="/projects" style="text-decoration: none;">Projects</a>
       <a href="/dresume" style="text-decoration: none;">Resume</a>
       <a href="/contact" style="text-decoration: none;">Contact me</a>
       <div class=sidenav-btm>
        <a href="mailto:bencwebsite@gmail.com"><i class="fa fa-envelope"></i></a>
        <a href="https://github.com/PBChemhuru"><i class="fa fa-github"></i></a>
        <a href="https://www.linkedin.com/in/benjamin-chemhuru-858966240/"><i class="fa fa-linkedin"></i></a>
        <a><i></i></a>
       </div>

       </div>
    </body>
    <main>
    {{$slot}}
    </main>
</html>