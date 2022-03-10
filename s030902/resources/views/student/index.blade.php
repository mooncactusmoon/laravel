<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    student index blade
    <br><br>
    <a href="{{route('students.create')}}">create blade</a>
    <br><br>
    <a href="{{route('students.edit', ['student' => 55688])}}">edit 55688 blade</a>
</body>
</html>