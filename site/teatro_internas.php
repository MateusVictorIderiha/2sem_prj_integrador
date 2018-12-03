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
                <div class="buttons text-center">
                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                <!-- Your share button code -->
                <?php 
                $url = urlencode("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
                ?>
                <a class="btn btn-lg" href="https://www.facebook.com/sharer/sharer.php?u=<?= $url; ?>" target="_blank"><i class="fab fa-facebook-f"></i> Compartilhar </a>
                <a class="d-none d-md-inline btn btn-lg" href="https://api.whatsapp.com/send?text=<?= $url; ?>" target="_blank"><i class="fab fa-whatsapp"></i> Compartilhar</a>
                <a class="d-md-none btn btn-lg" href="whatsapp://send?text=<?= $url; ?>" target="_blank"><i class="fab fa-whatsapp"></i> Compartilhar</a>
                <a class="btn btn-lg" href="http://www.twitter.com/share?url=<?= $url; ?>" target="_blank"><i class="fab fa-twitter"></i>Compartilhar</a>
            </div>
</article>
