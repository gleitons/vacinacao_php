<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lib/css/styles.css">
    <title>Cadastro usuário - Vacinação Online</title>
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
            <h2>Cadastro Usuário</h2>
            <form class="formularioVacina" action="./cadastro-efetuado.php" method="get">
                <div>
                    <p>Nome:</p>
                    <input type="text" placeholder="Digite seu nome" name="nomeUser" id="nomeuser">
                </div>
                <div>
                    <p>Sobrenome:</p>
                    <input type="text" placeholder="Digite seu nome" name="sobrenomeUser" id="sobrenomeUser">
                </div>
                <div>
                    <p>Email:</p>
                    <input type="email" placeholder="Digite seu nome" name="emailUser" id="emailUser">
                </div>
                <div>
                    <p>Senha:</p>
                    <input type="text" placeholder="Digite seu nome" name="senhaI" id="senhaI">
                </div>
                <div>
                    <p>Repetir a senha:</p>
                    <input type="text" placeholder="repita a senha" name="repsenha" id="repsenha">
                </div>
                <input type="submit" value="Cadastrar">
            </form>
            <p>*Todas as informações são de responsabilidade do seu informante</p>
        </section>
    </main>
</body>
</html>