<?php

session_start();
if(isset($_SESSION["prijavljen"]) && $_SESSION["prijalvjen"] == true){
    echo "prijavljeni ste ze od prej";
}
else{
    if(isset($_POST["ime"]) && isset($_POST["geslo"])){

        $user = $_POST["ime"];
        $pass = $_POST["geslo"];

    if($user == "brinsoko" && $pass == "geslo123"){
            echo "Vpisali ste se";
            $_SESSION["prijavljen"] = true;
    }   

    else{
        echo "Napacni podatki";
    }
    }
    else{
        echo "Ni podatkov";
    }
}


?>