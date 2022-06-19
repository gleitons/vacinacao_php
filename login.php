<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lib/css/styles.css">
    <title>Login Vacinação Online</title>
</head>
<body>
    <header>
        <?php
        include "./lib/php/menu.php";
        menuTop();
        ?>
    </header>
    <main>
        <section class="cadastroVacinado">
            <h2>Login</h2>
            <form class="formularioVacina" action="./cadastro-efetuado.php" method="get">
                
                <div>
                    <p>Email:</p>
                    <input type="email" placeholder="Digite seu nome" name="email" id="email">
                </div>
                <div>
                    <p>Senha:</p>
                    <input type="text" placeholder="Digite seu nome" name="repsenha" id="repsenha">
                </div>
                
                <input type="submit" value="Login">
            </form>
            <p>*Todas as informações são de responsabilidade do seu informante</p>
        </section>
    </main>
</body>
</html>