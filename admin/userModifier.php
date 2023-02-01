<?php
    //Connexion
    include ("../src/connexion.php");
    //Prendre l'identifiant de la modification
    $m_id=$_GET['sid']; 
    $edit_sql="SELECT * FROM utilisateurs WHERE id=$m_id"; 
    $re=mysqli_query($connect, $edit_sql); 
    $row =mysqli_fetch_assoc($re); 
?>
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
    <title>User Modification</title>
</head>
<body>
    <h1>User Modification</h1>
    <form action="userModifier_action.php" method='POST'>
        <input type="hidden" name="sid" value="<?php echo $m_id; ?>" id="">
        <table>
            <tr>
                <td>Nom*</td>
                <td colspan="2"><input type="text" name="nom" value="<?php echo $row['nom']?>"></td>
            </tr>
            <tr>
                <td>Prenom*</td>
                <td colspan="2"><input type="text" name="pre" value="<?php echo $row['prenom']?>"></td>
            </tr>
            <tr>
                <td>Mail*</td>
                <td colspan="2"><input type="text" name="mail" value="<?php echo $row['mail']?>"></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td colspan="2"><input type="password" name="mdp" value="<?php echo $row['mdp']?>"></td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><input type="text" name="ddn" value="<?php echo $row['d_naissance']?>"></td>
                <td>aaaa/mm/jj</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><button type="submit" name="add" class="btn btn-warning">Modifier</button></td>
            </tr>
        </table>
    </form>
</body>
</html>