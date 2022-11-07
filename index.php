<?php
require_once 'database.php';
require_once 'Models/User.php';


if(isset($_POST["name"])){
    $argo = new User(null, htmlspecialchars($_POST["name"]));
    User::create($argo);
    header('location:./');
}

function afficher_argonautes(){
    $argonautes = User::read();
    foreach ($argonautes as $argonaute){
        echo '<div class="member-item w-1/3 flex flex-col text-center my-4">'.$argonaute->name.'</div>';
    }
}

require_once 'Views/base.php';
?>