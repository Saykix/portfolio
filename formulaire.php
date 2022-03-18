<?php
$db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','root','');

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

echo 'the name: '.$_POST['name'].'<br>';
echo 'the email: '.$_POST['email'].'<br>';
echo 'the subject: '.$_POST['subject'].'<br>';
echo 'the message: '.$_POST['message'].'<br>';
    
    try{
        //On se connecte à la BDD
        $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // $db->query($requete);
        //On insère les données reçues
        $sth = $db->prepare("
            INSERT INTO formulaire(nameFormulaire, emailFormulaire, subjectFormulaire, messageFormulaire)
            VALUES(:nom, :email, :subject, :message)");
        $sth->bindParam(':nom',$name);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':subject',$subject);
        $sth->bindParam(':message',$message);
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("location:index.php#contact");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }





