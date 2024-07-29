<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-primary">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>ISBN</th>
                            <th>Published Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $books)
                        <tr>
                            <td> {{ $books-> title }} </td>
                            <td> {{ $books-> author }} </td>
                            <td> {{ $books-> description }} </td>
                            <td> {{ $books-> isbn }} </td>
                            <td> {{ $books-> published_year }} </td>
                            <td>
                                <a href="{{ url('students', $student->id) }}/edit" class="btn btn-outline-success">Edit</a>
                                <form action=" {{  url('students', $student->id) }}"" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Sure kana ba?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
