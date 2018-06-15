<?php
$manga = getDadosManga();
$textoLista = explode("\n", $manga["texto"]);
$texto = "<p class='text-justify'>".implode("</p><p class='text-justify'>", $textoLista)."</p>";
$img = $manga["imagem"];
?>
<div class="container">
    <div class="row">
        <sidebar class="col-12 col-md-3">

        </sidebar>
        <article class="col-12 col-md-9 contentManga <?= "layoutManga".$manga["layout"]; ?>">
            <div class="float-md-left text-center imgManga">
                <a href="<?= $img["credito"] ?>" title="<?= $img["title"]; ?>" class="" target="_blank">
                    <picture class="">
                        <source media="(max-width: 960px)" srcset="<?= "midia/manga/".$img["nome"]."_220".$img["ext"]; ?>">
                        <source media="(min-width: 960px)" srcset="<?= "midia/manga/".$img["nome"]."_439".$img["ext"]; ?>">
                        <img src="<?= "midia/manga/".$img["nome"]."_220".$img["ext"]; ?>" title="<?= $img["title"]; ?>" alt="<?= $img["alt"]; ?>" class="mw-100">
                    </picture>
                </a>
            </div>
            <header class="titulosManga">
                <h1 class="titulo text-center"><?= $manga["titulo"]; ?></h1>
                <p class="subtitulo text-center"><?= $manga["subtitulo"]; ?></p>
            </header>
            <div class="orderTexto">
                <?= $texto; ?>
            </div>
            <div class="buttons">
                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                <!-- Your share button code -->
                <?php 
                $url = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                ?>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $url; ?>" target="_blank">
                    Share on Facebook
                </a>
                <a class="d-none d-md-block" href="https://api.whatsapp.com/send?text=<?= $url; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a class="d-md-none" href="whatsapp://send?text=<?= $url; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
        </article>
    </div>
</div>