<?php include "header.php"; ?>
<?php foreach ($entry as $add ) { ?>
<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                </div>
            </div>
           
            
            <div class="row">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="http://localhost:3000/img/<?=$add->image ?>"></div>
                    <div class="col">
                        <div class="row text-muted"><?=$add->titre ?></div>
                        <div class="row"><?=$add->description ?></div>
                    </div>
                    
                    <div class="col">&euro; <?=$add->prix ?>    <input type="number" name="quantité" value=1 min=1 max=10></div>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>total</b></h5>
            </div>
            <hr>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">&euro; </div>
            </div> 
        </div>
    </div>
</div>
<?php } ?>  
<?php include "footer.php"; ?>