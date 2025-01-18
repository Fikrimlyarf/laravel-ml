<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>

<body>

    <h1 class="text-center mt-3">Welcome to Mobile Legend</h1>

    <div class="d-flex flex-row mx-auto mt-5" style="align-items: center; justify-content: center;">
        <div class="p-2 ">
            <a class="btn text-white bg-primary" href="{{ route('hero.list-hero') }}">List Hero</a>
        </div>
        <div class="p-2">
            <a class="btn text-white bg-warning" href="{{ route('role.list-role') }}">Role</a>
        </div>
        <div class="p-2">
            <a class="btn text-white bg-success" href="{{ route('lane.index') }}">Lane</a>
        </div>
        
    </div>

</body>

</html>