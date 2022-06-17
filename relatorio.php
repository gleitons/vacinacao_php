<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lib/css/styles.css">
    <title>Relatório de vacinados</title>
</head>
<body>
    <?php
            include "./lib/php/menu.php";
            menuTop();
    ?>
    <main>
        <section class="relatorio">
            <h2>Relatório completo de vacinações</h2>
            <fieldset>
                <legend>
                    <h3>Total de doses Aplicadas</h3>
                </legend>
                <p>A quantidade de doses aplicadas foi de <strong>200</strong>, somadas no total fornecido pelos próprios participantes deste site, as categorias, você pode conferir abaixo.</p>
                
            </fieldset>
            <fieldset>
                <legend>
                    <h3>Genero</h3>
                </legend>
                <table class="tabelaRelatorio">                
                    <tr>        
                        <td>Homens</td>
                        <td>100</td>
                        <td>50%</td>
                    </tr>
                    <tr>        
                        <td>Mulheres</td>
                        <td>100</td>
                        <td>50%</td>
                    </tr>
                    <tr>        
                        <td>Total</td>
                        <td>200</td>
                        <td>100%</td>
                    </tr>
    
                </table>

            </fieldset>
            
           
            <table class="tabelaRelatorio">
                <tr>        
                    <td>Total de Doses Aplicadas</td>
                    <td>50</td>
                </tr>
                
                <tr>        
                    <td>Crianças de de 16 a 18 anos</td>
                    <td>100</td>
                </tr>
                <tr>        
                    <td>Crianças de de 12 a 15 anos</td>
                    <td>100</td>
                </tr>
                <tr>        
                    <td>Crianças de de 05 a 11 anos</td>
                    <td>100</td>
                </tr>
                <tr>        
                    <td>Crianças de menos de 5 anos</td>
                    <td>100</td>
                </tr>
            </table>

        </section>
    </main>
    
</body>
</html>