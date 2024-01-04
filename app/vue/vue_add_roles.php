<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un roles</title>
</head>
<body>
    <?php include_once './app/vue/vue_navbar.php'?>
    <h1>Ajouter un roles :</h1>
    <form action="" method="post">
        <label for="nom_roles">Saisir le nom du roles :</label>
        <input type="text" name="nom_roles">
        <input type="submit" value="Ajouter" name="submit">
    </form>
    <p><?=$message?></p>
</body>
</html>
