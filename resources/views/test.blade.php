<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Route::has('login'))
        <div>
            <h4>hello noumel</h4>
        </div>
    @else
        <div>
            <h4 style="color:red;">Undefined!</h4>
        </div>
    @endif
</body>
</html>
