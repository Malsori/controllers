<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>

    <form method="post" action="{{route('blog.store')}}">
        @csrf
        <input type="text" name="title">
        <input type="submit" value="Send">


    </form>
</body>
</html>