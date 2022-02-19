<?php


// recuperer  l entité article
include __DIR__.'/../entity/Articles.php';

// GET ALL ARTICLES
$entry = Articles::all();


// affiche une vue
include __DIR__.'/../../template/ViewCatalog.php';

