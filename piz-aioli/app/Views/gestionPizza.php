<?php include 'templates/header.php';?>

<img class="logo" src="assets/images/LogoPizz.png" alt="logo">


<div class="row">

<!-- <button class="btn btn-success"><a href="\addPizza">Créer une pizza</a></button> -->

<a href="<?php echo base_url("/addPizza")?>"></a>
        
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

                <div class="card-footer">
                    <a class="btn btn-warning card-text text-center" href="<?php echo base_url('\editPizza'.$pizza['Id_Pizza']);?>">Modifier la pizza</a>
                    <a class="btn btn-danger" href="<?php echo base_url('\deletePizza'.$pizza['Id_Pizza']);?>">Supprimer la pizza</a>
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
        <a class="btn btn-warning card-text text-center" href="<?php echo base_url('\editPizza'.$pizza['Id_Pizza']);?>">Modifier la pizza</a>
        <a class="btn btn-danger" href="<?php echo base_url('\deletePizza'.$pizza['Id_Pizza']);?>">Supprimer la pizza</a>
    </div>
</div>

</div>
<?php }; ?>

<?php endforeach ?>
<?php endif ?>
</div>

<button class="btn"><a href="<?php echo base_url("/addPizza")?>"></a></button>