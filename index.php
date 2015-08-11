<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ferragista Camarguinho</title>
            <link rel="stylesheet" href="http://localhost:8080/phpcheque/css/bootstrap.min.css">
            <link rel="stylesheet" href="http://localhost:8080/phpcheque/css/normalize.css">
            <script src="http://localhost:8080/phpcheque/js/jquery-1.11.3.min.js"></script>
            <script src="http://localhost:8080/phpcheque/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div>
                <div id="header">
                   <ul class="nav nav-pills">
                        <li><a href="index.php?pag=home">Home</a></li>
                        <li><a href="index.php?pag=recebimento">Recebimento</a></li>
                        <li><a href="pagamento.php?pag=pagamento">Pagamento</a></li>
                        <li><a href="pessoas.php?pag=pessoas">Pessoas</a></li>
                        <li><a href="empresas.php?pag=empresas">Empresas</a></li>
                    </ul>
                </div>
                <div id="content">
 
                    
                    <?php
                        $index = 'home';
                        
                        if (!empty($_GET['pag']))    {
                            $index = $_GET['pag'];

                            if (file_exists($index) . "/phpcheque/{$index}.php")    {
                            $index = "erro";
                            }
                        }
                        if (('home' == $index) || ('erro' == $index))    {
                            $erro = dirname($index) . "/{$index}.php";
                        } else {
                            $erro = dirname($index) . "/phpcheque/{$erro}.php";
                        }
                        require_once $erro;
                    ?>
                
                <div id="footer">
                    
                    
                </div>
                </div>
        </div>
    </body>
</html>
