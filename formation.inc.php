<?php
    $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','root','');
    $formation = $db->query("SELECT * FROM formation")->fetchAll(PDO::FETCH_ASSOC);

    foreach($formation as $key){
        echo"<div class=$key[classFormation]>
                <h2>$key[nomFormation]</h2>
                <p>$key[descriptifFormation]</p>
            </div>";
    }