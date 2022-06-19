<?php
function menuTop() {
    echo '<header>
    <div class="atencao">
        <p><strong>SITE EM CONSTRUÇÃO</strong> - TODAS AS INFORMAÇÕES PODERÃO SER PERDIDAS</p>
    </div>
    <section class="MenuTopo">
        <picture>
            <a class="logoName" href="./">
                <img src="./lib/images/logo-vacina-vacinacao.webp" alt="Logo vacinação">
                <h1>VACINAÇÃO ONLINE</h1>
            </a>
        </picture>
        <ul>
            <a href="./">
                <li>Inicio</li>
            </a>
            <a href="./relatorio.php">
                <li>Relatório</li>
            </a>
            <a href="./cadastro.php">
                <li>Cadastro</li>
            </a>
            <a href="./login.php">
            <li>Login</li>
        </a>
            <a href="./">
                <li>Contato</li>
            </a>
        </ul>
    </section>
</header>';
}
?>
