<?php include 'templates/header.php';?>
<link rel="stylesheet" type="text/css" href="/assets/form.css"> 
    <h3>Carte des pizzas</h3>


<div class="row">

        
<?php if($pizzas) : ?>
<?php foreach($pizzas as $index => $pizza) : ?>
        

        <?php if ($index < 3) {?>
            
            <div class="col-lg-4 col-md-12">
                <div class="card align-items-center">
                
                <img  src="<?= base_url('/assets/images/'.$pizza['Image'])?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $pizza['Nom']; ?></h5>
                    <p class="card-text text-center"><?= $pizza['Ingredients'] ?></p>
                </div>
                <div class="card-body">
                    <p class="card-text text-center"><?= $pizza['Prix'] ?> €</p>
                </div>
                <div class="card-footer align-items-center">
                    <a href="#" class="card-link btn btn-success">Ajouter au panier</a>
                </div>
            
            </div>
        
        </div>
<?php } else {?>
    <div class="col-lg-4 col-md-12 ">
    <div class="card align-items-center">
    
    <img  src="<?= base_url('/assets/images/'.$pizza['Image'])?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title text-center"><?= $pizza['Nom']; ?></h5>
        <p class="card-text text-center"><?= $pizza['Ingredients'] ?></p>
    </div>
    <div class="card-body">
        <p class="card-text text-center"><?= $pizza['Prix'] ?> €</p>
    </div>
    <div class="card-footer">
        <a href="#" class="card-link btn btn-success">Ajouter au panier</a>
    </div>

</div>

</div>
<?php }; ?>

<?php endforeach ?>
<?php endif ?>
</div>