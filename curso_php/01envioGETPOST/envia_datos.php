<?php
    if(isset($_GET["enviar_btn"])){
        echo'Los datos los enviaste por el metodo get, 
        los datos son:'."<br>". $_GET["nombre_txt"]."<br> EL password es ". $_GET["password_txt"];
    } else if(isset($_POST["enviar_btn"])){
        echo'Los datos los enviaste por el metodo post, 
        los datos son:'."<br>". $_POST["nombre_txt"]."<br> EL password es ". $_POST["password_txt"];
    }