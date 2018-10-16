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
    <body> <pre>
        <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $l = [];
        $l[0] = new Lutador("Pretty Boy","França", 30, 1.75, 90.9, 11, 2, 1 );
        $l[1] = new Lutador("Puttscript","Brasil", 29, 1.68, 57.8, 4, 2, 3 );
        $l[2] = new Lutador("SnapShadow","China", 35, 1.65, 68.9, 12, 2, 1 );
        $l[3] = new Lutador("dead Code","Angola", 28, 1.93, 68.9, 13, 0, 2 );
        $l[4] = new Lutador("UFOCobol","Brasil", 37, 1.70, 119.3, 5, 4, 3 );
        $l[5] = new Lutador("Nerdaart","Argentina", 30, 1.81, 105.7, 112, 2, 4 );
         
         
        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[2],$l[3]);
        $UEC01->lutar();
        $l[2]->status();
        $l[3]->status();
        
         
        
        ?></pre>
    </body>
</html>
