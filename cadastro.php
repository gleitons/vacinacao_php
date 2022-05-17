<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lib/css/styles.css">
    <title>Vacinação - Projeto</title>
</head>
<body>
    <?php
        include "./lib/php/menu.php";
        menuTop();
    ?>
    <main>
    <section class="cadastroVacinado">
        <h2>Cadastro de vacinação</h2>
        <form class="formularioVacina" action="./cadastro-efetuado.php" method="get">
            <div>
                <p>Nome:</p>
                <input type="text" placeholder="Digite seu nome" name="nome" id="">
            </div>
            <div>
                <p>Sobrenome:</p>
                <input type="text" placeholder="Digite seu nome" name="sobrenome" id="sobrenome">
            </div>
            <div>
                <p>Sexo:</p>
                <select name="sexo" id="sexo">
                    <option value="">Selecione</option>
                    <option value="m">Masculino</option>
                    <option value="f">Feminina</option>
                    <option value="o">Outra</option>
                    <option value="p">Prefiro não dizer</option>
                </select>
            </div>
            <div>
                <p>Estado:</p>
                <?php
                include "./lib/php/estados.php";
                estadoB();
                ?>             
            </div>
            <div>
                <p>Idade:</p>
                <input type="number" placeholder="Digite sua idade" name="idade" id="idade">
            </div>
        </form>
        <p>*Todas as informações são de responsabilidade do seu informante</p>
    </section>
    </main>
    <footer>

    </footer>
    
</body>
</html>
