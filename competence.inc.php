<?php
    $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','root','');
    $competence = $db->query("SELECT * FROM competence")->fetchAll(PDO::FETCH_ASSOC);

    foreach($competence as $key){
        echo"<div class='$key[classCompetence] $key[classCompetence2]'>
                                    <img id=$key[identifiantCompetence] class='$key[classCompetence] $key[classCompetence2] logo' src=$key[logoCompetence] alt=$key[altCompetence]>
                                </div>";

    }

