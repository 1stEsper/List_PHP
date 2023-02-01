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
    <script src='../js/Check.js'></script>
    <title>ADD Users</title>
</head>
<body>
    <div class="container">
    <h1>Nouvel utilisateur</h1>
    <form action="user_action.php" method="POST">
        <table>
            <tr>
                <td>Nom*</td>
                <td colspan="2"><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td>Prenom*</td>
                <td colspan="2"><input type="text" name="pre"></td>
            </tr>
            <tr>
                <td>Mail*</td>
                <td colspan="2"><input type="text" name="mail"></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td colspan="2"><input type="password" name="mdp"></td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><input type="text" name="ddn"></td>
                <td>aaaa/mm/jj</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><button type="submit" name="add">Envoyer</button></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>