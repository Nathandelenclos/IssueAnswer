<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<main class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Question</th>
            <th scope="col">Answer 1</th>
            <th scope="col">Answer 2</th>
            <th scope="col">Answer 3</th>
            <th scope="col">Answer 4</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($issues as $issue)
            <tr>
                <th scope="row">{{ $issue["id"] }}</th>
                <th >{{ $issue["question"] }}</th>
                @for($i = 1; $i < 5; $i++)
                    <td>{{ $issue["answer_" . $i] }}@if("answer_" . $i == $issue["good_answer"]) <span class="badge bg-success">Good Answer</span>@endif</td>
                @endfor
                <td>
                    <a href="{{ route('issue.destroy', $issue["id"]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    <a class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-between">
        <div>
            <a href="{{ route("welcome") }}" type="button" class="btn btn-primary">Home</a>
            <a href="{{ route("issue.create") }}" type="button" class="btn btn-primary">Create</a>
        </div>
        {{ $issues->links() }}
    </div>
</main>
</body>
</html>
