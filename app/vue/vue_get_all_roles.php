<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des roles</title>
</head>
<body>
    <h1>Liste des rôles :</h1>
    <!--Afficher la liste des rôles -->
    <?php foreach($roles as $role):?>
        <p><?=$role["id_roles"]." : ".$role["nom_roles"]?></p>
    <?php endforeach?>
    <!-- Créer une liste déroulante -->
    <select name="">
        <?php foreach($roles as $role):?>
            <option value="<?=$role["id_roles"]?>"><?=$role["nom_roles"]?></option>
        <?php endforeach?>
    </select>
    <p><?= $message ?></p>
</body>
</html>
