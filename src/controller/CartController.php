<?php
// var_dump($_POST);
$id_articles = $_POST['id'];// on recuperer l'identifiant de l'article selectionné
$quantite = $_POST['quantite'];// on recuperer la quantité de l'article selectionné

// recuperer  l entité article et une ligne de panier
include __DIR__.'/../entity/Articles.php';
include __DIR__.'/../entity/Row_cart.php';
include __DIR__.'/../entity/Cart.php';
 
 $my_row_cart =new row_cart();

 $my_row_cart ->article =Articles::retrieveByPK($id_article) ;
 $my_row_cart ->quantite =$quantite ;
 $my_row_cart -> prix_total=$quantite*$my_row_cart->article->prix;

 echo "<br />";echo "<br />";echo "<br />";echo "<br />";
 
// il faut construire ensuite le panier complet
// on prend le cas ou le panier est vide car pas de cookies
$moncart=new cart();
$moncart->row_cart=$my_row_cart;
$moncart->total=$my_row_cart->prix_total;

// on doit convertir notre objet en chaine de caractere
$mon_cart_encode=json_encode($moncart);
// il faut faire le cookie
setcookie("cart",$mon_cart_encode) ;
// on créé un cookie qui s'appelle 
// "cart" le nom qu on veut
// deuxieme parametre ce qu on veut stocker
// renvoie la vue
include __DIR__.'/../../template/Viewcart.php';
