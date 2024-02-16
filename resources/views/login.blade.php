<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form action="{{url('/login')}}" method="post">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="Sumbit">
    </form>
</body>
</html>