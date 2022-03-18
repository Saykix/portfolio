<?php

$db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','root','');
$projet = $db->query("SELECT * FROM projet")->fetchAll(PDO::FETCH_ASSOC);

foreach($projet as $key){
    if($key['typeProjet']==1){
        if($key['lienProjet']==null){
            echo"<div class=$key[classProjet]>
                    <h2>$key[nomProjet]</h2>
                    <p>$key[descriptionProjet]</p>
                </div>";
        }else{
            echo"<div class=$key[classProjet]>
                    <a href=$key[lienProjet] target='_blank'>
                    <h2>$key[nomProjet]</h2>
                    <p>$key[descriptionProjet]</p>
                    <img src='image/right-arrow.png' alt='logo flèche vers droite'>
                    </a>
                </div>";
        }
    }else{
    }
}