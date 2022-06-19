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
                <p>Idade:</p>
                <input type="number" placeholder="Digite sua idade" name="idade" id="idade">
            </div>
            <div>
                <p>Grau de parentesco:</p>
                <select name="gparente" id="gparente">
                    <option value="">Selecione</option>
                    <option value="mae">Mãe</option>
                    <option value="pai">Pai</option>
                    <option value="irmao">Irmão</option>
                    <option value="irma">Irmã</option>
                    <option value="tio">Tio</option>
                    <option value="tia">Tia</option>                    
                    <option value="conhecido">Conhecido</option>
                    <option value="desconhecido">Desconhecido</option>
                    <option value="naoD">Prefiro não dizer</option>
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
                <p>Cidade:</p>
                <input type="text" placeholder="Digite sua Cidade" name="sobrenome" id="sobrenome">       
            </div>
           
            <div>
                <p>Doses aplicadas:</p>
                
                <select name="doseV" id="doseV">
                    <option value="">Selecione</option>
                    <option value="1">Uma dose</option>
                    <option value="2">Duas doses</option>
                    <option value="3">Três doses</option>
                    <option value="4">Quatro doses</option>
                    <option value="0">Não tomei</option>
                </select>
            </div>
            <div>
                <p>Vacina aplicada:</p>
                <?php
                include "./lib/php/doses.php";
                vacAplicada();
                ?>             
            </div>
            <input type="submit" value="Cadastrar">
            
        </form>
        <p>*Todas as informações são de responsabilidade do seu informante</p>
    </section>
    </main>
    <footer>

    </footer>
    
</body>
</html>
