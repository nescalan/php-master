<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="card">
        <form action="validacion.php" method="post">
            <div class="card-header">
                <h1>Log In</h1>
            </div>
            <div class="card-main">
                <label for="user">Username or Email Address</label>
                <input type="text" name="user" id="">
                <label for="password">Password</label>
                <input type="password" name="password" id="">
            </div>
            <div class="card-signin">
                <input type="submit" value="Sign In" name="submit">
            </div>
        </form>
    </div>
</body>
</html>