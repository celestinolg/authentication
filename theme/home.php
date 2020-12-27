<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Authentication</title>
    <link rel="stylesheet" href="<?= url("assets/css/style.css") ?>">
</head>

<body>
    <nav class="side-menu">
        <div class="img">
            <img src="<?= url("assets/img/perfil.jpg") ?>" alt="Perfil">
            <h5><?=$user["name"]?></h5>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="<?=url("home")?>">Principal</a>
                </li>
                <li>
                    <a href="<?=url("sair");?>">Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <h1>Geat (y)</h1>
    </section>
</body>

</html>