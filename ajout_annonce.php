<?php

require_once('templates/header.php');

require_once('libs/category.php');


$categories = getCategories();

?>


<div class="form-listing w-100 m-auto">
    <h1>Ajouter une annonces</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label" for="title">Titre de l'annonce</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Prix</label>
            <input class="form-control" type="price" name="price" id="price">
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="category">Catégories</label>
            <select name="category" id="category" class="form-select">
                <?php foreach ($categories as $key => $category) { ?>
                    <option value="<?= $key ?>"><?= $category['name'] ?></option>

                <?php } ?>
            </select>
        </div>
        <input class="btn btn-primary" type="submit" value="Publier annonce">
    </form>
</div>













<?php

require_once('templates/footer.php');

?>