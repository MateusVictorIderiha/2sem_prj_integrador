<?php
    $teatros = teatroInternas();
    $page_id = $_GET["id"];
    $teatro = getIdArray( $page_id, $teatros);
    
?>
<article class="container teatro_content">
    <h1 class="titulo text-center teatro_titulo_pos"><?=$teatro['title']?></h1>
	<div class="row text-justify">
	    <p class="teatro_paragrafo col-12"><?=$teatro['paragrafoUm']?></p>
		<img class="tea_int_img img-fluid mx-auto d-block col-12 col-lg-6" src="midia/teatro/<?=$teatro['imagemUm']?>.jpg" alt="<?=$teatro['altUm']?>" title="<?=$teatro['creditoUm']?>">
		<img class="tea_int_img img-fluid mx-auto d-block col-12 col-lg-6" src="midia/teatro/<?=$teatro['imagemDois']?>.jpg" alt="<?=$teatro['altDois']?>" title="<?=$teatro['creditoDois']?>">
	    <p class="teatro_paragrafo col-12 col-lg-6"><?=$teatro['paragrafoDois']?></p>
	    <p class="teatro_paragrafo col-12 col-lg-6"><?=$teatro['paragrafoTres']?></p>
	    <p class="ultimo_paragrafo col-12"><?=$teatro['paragrafoQuatro']?></p>
	</div>
</article>
