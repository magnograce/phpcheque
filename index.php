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
                    <?php include("menu.php") ?>
                </div>
                <div id="content">
                    <?php include("home.php") ?>
                    
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
