<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body{
            display:flex;
            justify-content:center;
        }
    </style>
</head>
<body>
   <form action="/create" method="post">
    @csrf
   <label for="name">NAME :</label><br><br>
    <input type="text" name="name" id="name"><br><br>
    <label for="name">EMAIL:</label><br><br>
    <input type="email" name="email" id="email"><br><br>
    <button type="submit">Register</button>
   </form>
</body>
</html>