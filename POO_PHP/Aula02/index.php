<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta();
            
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = FALSE;
            echo '<pre>';
            print_r($c1);
            echo '</pre>';
            $c1->rabiscar();
        ?>
    </body>
</html>
