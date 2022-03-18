<?php

$db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','root','');
$contact = $db->query("SELECT * FROM contact")->fetchAll(PDO::FETCH_ASSOC);

foreach($contact as $key){
    if($key['lienContact']==null){
        echo"<div id=$key[identifiantContact]>
                <img class=$key[classContact] src=$key[logoContact] alt=$key[altContact]>
                <p>$key[textContact]</p>
            </div>";
    }else{
        echo"<div>
                <a id=$key[identifiantContact] href='$key[lienContact]' target='_blank'>   
                <img class=$key[classContact] src=$key[logoContact] alt=$key[altContact]>
                $key[textContact]</a>
            </div>";
    }
}
