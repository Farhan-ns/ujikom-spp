<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form method="POST" action="{{ route('siswa.logout') }}">
        {{ csrf_field() }}
        <button class="btn btn-primary" type="submit">Logout</button>
    </form>
    {{ Auth::guard('siswa')->user()->nama}}
</body>
</html>