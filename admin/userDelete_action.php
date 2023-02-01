<?php
    //obtenir des données à supprimer
    $sid=$_GET['sid']; 
    //Connect à bdd
    include ("../src/connexion.php");

    $delete_sql="DELETE FROM utilisateurs WHERE id=$sid"; 

    mysqli_query($connect, $delete_sql); 

    //retour à la page de liste
    header("Location:user_List.php"); 
?>