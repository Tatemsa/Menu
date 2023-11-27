<form method = "post">
    <?= $form->input('name', 'Nom du repas')?>
    <?= $form->input('description', 'Description du plat', ['type' => 'textarea'])?>
    <?= $form->input('image', 'Image du repas')?>
    <?= $form->select('category_id', 'Quelle est la catégorie de ce plat', $categories)?>
    <button class="btn btn-primary">Enregistrer</button>
</form>