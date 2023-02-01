<?php
        require_once ('../src/connexion.php');
        $nom=$_POST['nom']; 
        $prenom=$_POST['pre']; 
        $mail=$_POST['mail']; 
        $mdp=$_POST['mdp']; 
        $ddn=$_POST['ddn']; 
        $ajouter= "INSERT INTO utilisateurs(nom, prenom, d_naissance, mail, mdp) VALUES ('$nom', '$prenom','$ddn', '$mail' ,'$mdp' ) "; 
        mysqli_query($connect, $ajouter); 
        echo "<script> alert('Ajouter successful');</script> ";
        header("Location:user_List.php"); 
?>