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
        <form action="{{ route("issue.store") }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Question</label>
                <input type="text" class="form-control" name="question" id="exampleFormControlInput1" placeholder="Question ... ?">
            </div>
            <div class="row">
                <div class="col mb-3 input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="good_answer" value="answer_1">
                    </div>
                    <input type="text" name="answer_1" class="form-control" id="exampleFormControlInput1" placeholder="answer 1">
                </div>
                <div class="col mb-3 input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="good_answer" value="answer_2">
                    </div>
                    <input type="text" name="answer_2" class="form-control" id="exampleFormControlInput1" placeholder="answer 2">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3 input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="good_answer" value="answer_3">
                    </div>
                    <input type="text" name="answer_3" class="form-control" id="exampleFormControlInput1" placeholder="answer 3">
                </div>
                <div class="col mb-3 input-group">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" name="good_answer" value="answer_4">
                    </div>
                    <input type="text" name="answer_4" class="form-control" id="exampleFormControlInput1" placeholder="answer 4">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Create new answer</button>
        </form>

    </div>
</main>

</body>
</html>
