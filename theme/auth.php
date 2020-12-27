<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Authentication</title>
    <link rel="stylesheet" href="<?= url("assets/css/style.css") ?>">
</head>

<body>
    <div class="screen">
        <div class="box">
            <form action="<?= url("acesso") ?>" method="post">
                <h1>Login</h1>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Entrar</button>
            </form>
           
        </div>
    </div>
</body>

</html>