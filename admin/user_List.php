<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>List Users</title>
</head>
<body>
    <div class="container">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mail</th>
            <th>Mot de passe</th>
            <th>Date de naissance</th>
            <th>Gestion des utilisateurs</th>
        </tr>
        <?php
            require_once ('../src/connexion.php');
            $Lister= "SELECT * FROM utilisateurs ORDER BY id"; 
            $result=mysqli_query($connect, $Lister); 
            while($r=mysqli_fetch_assoc($result)){
                
        ?>
        <tr>
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['nom']; ?></td>
            <td><?php echo $r['prenom']; ?></td>
            <td><?php echo $r['mail']; ?></td>
            <td><?php echo $r['mdp']; ?></td>
            <td><?php echo $r['d_naissance']; ?></td>
            <td align="center"><a href="userModifier.php?sid=<?php echo $r['id']; ?>" class="btn btn-warning">Modifier</a> 
            <a onclick="return confirm('Do you want to delete this user?');" href="userDelete_action.php?sid=<?php echo $r['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
            <?php    
            }
            ?>
    </table>
    <a href="user.php" class="btn btn-success">Add user</a>
    </div>
</body>
</html>
