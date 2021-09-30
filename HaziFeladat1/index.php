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
        <!--2.feladat-->
        <!--<input name="n1" value=""><br>
        <input name="n2" value=""><br>
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="x">
        <input type="submit" name="sub" value="/"><br>
        <br>Result: <input type='text' value="<?php echo $ans; ?>"><br>-->
        <!--4.feladat-->
        <!--<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">-->
        <?php
            //1.feladat
            date('w');
            if(date('w') == 1){
                echo "Ma hetfo van";
            }
            else if(date('w') == 2){
                echo "Ma kedd van";
            }
            else if(date('w') == 3){
                echo "Ma szerda van";
            }
            else if(date('w') == 4){
                echo "Ma csutortok van";
            }
            else if(date('w') == 5){
                echo "Ma pentek van";
            }
            else if(date('w') == 6){
                echo "Ma szombat van";
            }
            else if(date('w') == 0){
                echo "Ma vasarnap van";
            }
        ?>
        <?php
            //2.feladat
            /*if(isset($_POST['sub'])){
                    $num1=$_POST['n1'];
                    $num2=$_POST['n2'];
                    $oprnd=$_POST['sub'];
                    if($oprnd=="+")
                            $ans=$num1+$num2;
                    else if($oprnd=="-")
                            $ans=$num1-$num2;
                    else if($oprnd=="x")
                            $ans=$num1*$num2;
                    else if($oprnd=="/")
                            $ans=$num1/$num2;
            }*/?>
        <?php 
            //3.feladat
            /*echo ("<br>");
            function OsztoTabla($szam){
                for ($a = 1; $a <= 10; $a++) {
                    $oszt = $a*$szam;
                    echo "$oszt : $szam = " . ($oszt / $szam) . "<br>";
                }
            }
            OsztoTabla(1);
            echo ("<br>");
            OsztoTabla(2);
            echo ("<br>");
            OsztoTabla(3);
            echo ("<br>");
            OsztoTabla(4);
            echo ("<br>");
            OsztoTabla(5);
            echo ("<br>");
            OsztoTabla(6);
            echo ("<br>");
            OsztoTabla(7);
            echo ("<br>");
            OsztoTabla(8);
            echo ("<br>");
            OsztoTabla(9);
            echo ("<br>");
            OsztoTabla(10);*/
        ?>
        <?php
            //4.feladat
            /*for($row=1;$row<=8;$row++)
                {
                echo "<tr>";
                for($col=1;$col<=8;$col++)
                        {
                $total=$row+$col;
                if($total%2==0)
                        {
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                }
                        else
                        {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
                }
                }
                echo "</tr>";
            }*/
        ?>
    </body>
</html>
