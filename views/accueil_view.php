<h1 class="text-center text-3xl">Vos restaurants préférés</h1>
<?php foreach($restaurants as $restaurant):?>
<a class=" px-3 text-center text-2xl hover:underline decoration-2" href="/?page=restaurant&idRestaurant=<?=$restaurant['idRestaurant']?>"><?=$restaurant['nom']?></a>
<p class="my-3 px-3"><?=$restaurant["ville"]?></p>
<div class=" px-3">
    <?=$restaurant['description']?>
</div>
<br>
<?php endforeach; ?>