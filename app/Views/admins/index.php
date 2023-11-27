<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div>
        <h1>Liste des plats <a href="add.php">Ajouter</a></h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Categorie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <form action="dashboard.php" method="post">
                <input type="hidden" name="logout" value="OUI">
                <button type="submit">Deconnexion</button>
            </form>
        </tbody>
    </table>
</body>
</html>