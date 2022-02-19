<?php

include __DIR__.'/../../src/entity/Articles.php';
include __DIR__.'/../../template/ViewAddArticle.php';


 

   $entry = new Articles;
   $entry->titre = $_POST['titre'];
   $entry->description = $_POST['description'];
   $entry->prix =$_POST['prix'];
   $entry->image = "";
   $entry->save();
    
 ?>
