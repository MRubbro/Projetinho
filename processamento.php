<html>
    <head>    
        <meta charset="utf-8">
        <title>Processamento</title>
    </head>
    <body>
        isso é uma pagina de processamento
        <?php
            /*
            $fango = "Realmente é o fango.";
            $fango = 5;
            if($fango) {
                echo "fango é 5";
            } 
            else {
                echo "fango não é 5";
            }
            echo $fango + 300;*/

             var_dump($_GET);
        ?>
        <br/><br/>

        <?php
            /*echo "Mostrar: " ."<br/>". $_GET['nome'] ."<br/>". $_GET['senha'];  */  
            define("nome", "Wesley");
            define("senha", "123");

            if($_GET["nome"] != nome || $_GET["senha"] != senha) {
                echo "Nome de usuario ou senha estão invalidos ";
            }
            else {
                echo "Bem vindo " . nome;
            };
        

        ?>




    </body>
</html>