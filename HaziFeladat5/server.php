<?php
    $valid_formats = array("pdf");
    if(isset($_POST["submit"])){
        $fname = $_POST["firstName"];
        $lname = $_POST["lastName"];
        $email = $_POST["email"];
        $attend = $_POST["attend"] ?? [];
        if(isset($_POST["terms"])){
            if(!empty($fname) && !empty($lname) && !empty($email)){
                echo 'First name: ' . $fname . '<br>' . 'Last name: ' . $lname . '<br>' .'Email: ' . $email;   
            }
            else{
                echo 'Az egyik mezo hianyos!';
            } 
            
            if(!empty($attend)){
                echo "<br>";
                echo "Attends: ";
                foreach ($attend as $att){
                    echo $att . ", ";
                }
                                }
            else{
                echo '<br>' . 'Nem valasztott ki egy esemenyt sem!';
            } 
            
            if($_POST['tshirt'] != "Please select"){
                $tshirt = $_POST['tshirt'];
                switch ($_POST['tshirt']){
                    case 'S' : 
                        echo '<br>' . 'Size: ' . $tshirt; 
                        break;
                    case 'M' : 
                        echo '<br>' . 'Size: ' . $tshirt; 
                        break;
                    case 'L' : 
                        echo '<br>' . 'Size: ' . $tshirt; 
                        break;
                    case 'XL' : 
                        echo '<br>' . 'Size: ' . $tshirt; 
                        break;
                }
            }
            else{
                echo 'Nem valasztott ki meretet!';
            }
            
            //A fajl ellenorzes nem mukodik
            /*print_r($_FILES['abstract']);
            if (!in_array($_FILES['abstract']['type'], $valid_formats)){
                echo "Hibas formatum!";
            }
            if ($_FILES['abstract']['size'] > 3000000){
                echo "Tul nagy meret!";
            }
            move_uploaded_file($_FILES["abstract"]["tmp_name"], "uploads/" . $_FILES["abstract"]["tmp_name"]);*/
            
        }
        else{
            echo 'A tovabblepeshez, muszaj elfogadni a felteteket!';
        }
    }

