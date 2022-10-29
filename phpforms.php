<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
//client side form validation
<form action="submit.php" method="post">
    <label for="Name">Name</label>
    <input type="text" id="Name" name="jina" required maxlength="5"> <br>
    <label for="college">college</label>
    <input type="text" id="college" name="shule"> <br>
    <label for="year">year</label>
    <input type="text" id="year" name="mwaka" max="8"> <br>
    <input type="submit" value="login">
</form>
</body>
</html>

//NB:research on how to validate a form using different other ways ie server side validation