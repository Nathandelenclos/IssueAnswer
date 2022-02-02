<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
    <main class="container">
        <div class="bg-light p-5 rounded">
            <h1>Question</h1>
            <p class="lead">{{ $issue["question"] }}</p>
            <select class="form-select" aria-label="Default select example">
                <option value="null" selected></option>
                <option value="answer_1">{{ $issue["answer_1"] }}</option>
                <option value="answer_2">{{ $issue["answer_2"] }}</option>
                <option value="answer_3">{{ $issue["answer_3"] }}</option>
                <option value="answer_4">{{ $issue["answer_4"] }}</option>
            </select>
            <a class="btn btn-lg btn-primary" href="" role="button">Next</a>
        </div>
    </main>

    </body>
</html>
