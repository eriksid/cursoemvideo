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
        <pre>
        <?php
            require_once 'caneta.php';
            
           $c1 = new Caneta();
           $c1->setModelo("Bic");
           $c1->setPonta(0.7);
           var_dump($c1)
        ?>
        </pre>
    </body>
</html>
