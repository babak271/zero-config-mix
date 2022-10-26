<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>App</title>
</head>
<body>
    <h1>Hello World</h1>
    @env('local')
        <script src="http://localhost:35729/livereload.js"></script>
    @endenv
</body>
</html>