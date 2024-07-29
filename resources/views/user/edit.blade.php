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
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto d-grip gap-2">
                    <form action="{{   url('books', $Books->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $books->title }}"/>
                        </div>
                        <div class="form-group mb-3">
                            <label>Author</label>
                        <input type="text" name="author" class="form-control" value="{{ $books->author }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Description</label>
                        <input type="text" name="description" class="form-control" value="{{ $books->description }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>ISBN</label>
                        <input type="text" name="isbn" class="form-control" value="{{ $books->isbn }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Published Year</label>
                        <input type="text" name="publishedyear" class="form-control" value="{{ $books->publishedyear }}">
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
