<?php
    require_once ('../src/connexion.php');
    $nom=$_POST['nom']; 
    $prenom=$_POST['pre']; 
    $mail=$_POST['mail']; 
    $mdp=$_POST['mdp']; 
    $ddn=$_POST['ddn']; 
    $id=$_POST['sid']; 
    $maj= "UPDATE utilisateurs SET nom='$nom', prenom='$prenom', d_naissance='$ddn', mail='$mail', mdp='$mdp' WHERE id=$id"; 
    mysqli_query($connect, $maj); 
    echo "<script>alert('Update successful');</script> ";
    header("Location:user_List.php"); 
?>