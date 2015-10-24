<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
        $contador = 0;
        $developer = "elDonMoi";
        $author = "Moises Urias";
        $came_from = $_SERVER['HTTP_REFERRER'];
        
        print "Hola desde el Netbeans<br/>";
        echo "El valor del contador es: ",$contador,"<br/>";
        print "Mi nombre es &nbsp $developer"; 
        ?>
        
        <?php
        $out = <<< _END
        <br/><br/>Hola mundo este es un texto
        multilinea ingresado 
        con php.
_END;
        echo $out;
        print $came_from;
        
        ?>
    </body>
</html>
