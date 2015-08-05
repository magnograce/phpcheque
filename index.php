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
                    $pasta = "phpcheque";
                    $raiz = "localhost:8080/phpcheque/";
                    
                    $p = empty($_GET["pasta"]) ? "home" : $_GET["pasta"];
                    $a = $raiz . $pasta . ".php";
                    
                    if(file_exists($a)) {
                        include($pasta . "/" . $p . ".php");
                    }else{
                        require_once ("erro.php");
                    }
                    ?>
                
                <div id="footer">
                </div>
                </div>
        </div>
    </body>
</html>
