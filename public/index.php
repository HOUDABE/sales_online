<?php
if (isset($_SERVER['PATH_INFO'])==false){
  
    include __DIR__.'/../src/controller/homeController.php';
    index();
 
}
else if ($_SERVER['PATH_INFO']=="/liste_article"){
   
    include __DIR__.'/../src/controller/articlesController.php';
    index();

 

}


else if ($_SERVER['PATH_INFO']=="/creer_article"){
    echo "vous êtes à la page creer article";
}

?>

