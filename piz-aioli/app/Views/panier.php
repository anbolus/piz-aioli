<?=include 'templates/header.php';?>

<h3>Panier</h3>
<table>
    <tr>
        <thead>
        <th>Nom</th>
        <th>Ingrédients</th>
        <th>Image</th>
        <th>Prix</th>
        <th>Action</th>
        </thead>
    </tr>
    <?php if($items) : ?>
        
    <?php foreach($items as $item) : ?>
        
        <tbody>
        <tr>
            <td><?= $item['Nom']; ?></td>
            <td><?= $item['Ingredients'] ?></td>
            <td>
            <img src="<?= base_url('images/'.$item['Image'])?>"?width="120" height="100">
            </td>
            <td><?= $item['Prix'] ?></td>
            <td><?= $item['qte'] * $item['Prix'] ?></td>
            
        </tr>
        </tbody>
        <?php endforeach ?>
        <?php endif ?>
</table>