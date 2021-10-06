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
        //1.feladat
            /*$data = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');
            foreach ($data as $value){
                if (is_numeric($value)){
                    echo gettype($value) . " " . "Igen" . "<br>";
                }
                else{
                    echo gettype($value) . " " . "Nem" . "<br>";
                }
            }*/
        
        //2.feladat
            /*$orszagok = array(  "Magyarország" => "Budapest", "Románia" => "Bukarest",
                    "Belgium" => "Brussels", "Austria" => "Vienna", "Poland" => "Warsaw");
                foreach ($orszagok as $a => $a_value){
                    echo $a . " fővárosa " . $a_value . "<br>";
                }*/
        
        //3.feladat
            /*$napok = array(
                        "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
                        "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
                        "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
                    );
                    foreach ($napok as $nap => $nap_value){
                        echo $nap . " : ";
                        foreach ($nap_value as $a){
                            echo $a . ", ";
                        }
                        echo "<br>";
                    }*/
        
        //4.feladat
            $szinek = array("A" => "Kek", "B" => "Zold", "c" => "Piros");
            function lowercase ($array){
                foreach ($array as $a => $a_value){
                    $string = $a_value;
                    echo $a . " " . strtolower($string). "<br>";
                }
            }
            function uppercase ($array){
                foreach ($array as $a => $a_value){
                    $string = $a_value;
                    echo $a . " " . strtoupper($string). "<br>";
                }
            }
            lowercase($szinek);
            echo "<br>";
            uppercase($szinek);
        ?>
    </body>
</html>
