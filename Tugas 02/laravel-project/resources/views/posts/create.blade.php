<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap-5.3/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5.3/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Blog | Create Posst</title>
</head>
<body>
    <h1>Create a new post</h1>
    <form action="{{ url("posts") }}" method="POST" class="form-control">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="txt" class="form-control" id="title" name="title" placeholder="input a new blog">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Description</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</body>
</html>
