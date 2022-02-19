<?php include "header.php"; ?>
    <h1>Catalog</h1>
    <br />
    <br />
    <?php foreach ($entry as $monarticle ) { ?>

        
        <div class="card">
    <img class="card-img-top"  src="http://localhost:3000/img/<?=$monarticle->image ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Article : <?=$monarticle->titre ?></h5>
      <p class="card-text"><?=$monarticle->description ?></p>

      <form method="POST" action="/add_cart">
                        <input type="hidden" value="<?=$monarticle->id ?>" name="id">
                        Quantité<input type="number" name="quantite" value=1 min=1 max=10>
                        <input type="submit" value="Ajouter au panier">
                    </form>
    
  </div>
</div>

    <?php } ?>
<?php include "footer.php"; ?>
<div class="card">
    <img class="card-img-top"  src="http://localhost:3000/img/<?=$monarticle->image ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Article : <?=$monarticle->titre ?></h5>
      <p class="card-text"><?=$monarticle->description ?></p>
    </div>
