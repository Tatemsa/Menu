<h1>Administration des repas</h1>

<p>
    <a href="?p=admin.admins.add&id=<?=$_SESSION['auth']?>" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item): ?>
            <tr>
                <td><?= $item->id; ?></td>
                <td><?= $item->name; ?></td>
                <td>
                    <a href="?p=admin.admins.edith&id=<?= $item->id; ?>" class="btn btn-primary">Modifier</a>
                    
                    <form action="?p=admin.admins.delete" method="post" style="display: inline">
                        <input type="hidden" name="id" value="<?= $item->id; ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
