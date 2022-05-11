<h1><?=$restaurant['nom']?></h1>
<p><?=$restaurant['adresse']?><br>
<?=$restaurant["cp"]?> <?=$restaurant["ville"]?><br>
<?=chunk_split(sprintf("%'.010d",$restaurant["telephone"]),2,' ')?></p>
<?=$restaurant['description']?>

<h2>AVIS</h2>
<?php foreach($avis as $commentaire): ?>
<p>
    <?=$commentaire['auteur'] !== null ? $commentaire['auteur'] : "Anonyme"  ?>
 : 
<?php for($i=1;$i<6;$i++)
    echo $i <= $commentaire['note'] ?'🌟' : '☆'; 
?>
</p>
<p><?=$commentaire['commentaire'] ?></p>
<?php endforeach; ?>
            