<?php
$mangas = getDadosMangas();
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($mangas as $manga) {
            $textoLista = explode("\n", $manga["texto"]);
            $texto = "<p class='text-justify'>".implode("</p><p class='text-justify'>", $textoLista)."</p>";
            $img = $manga["imagem"];
        ?>
        <article class="col-12 col-md-3">
            <div class="clearfix">
                <div class="float-md-left mr-md-4 mb-4 mb-md-0 text-center">
                    <a href="<?= $img["credito"] ?>" title="<?= $img["title"]; ?>" class="" target="_blank">
                        <picture class="">
                            <source media="(max-width: 960px)" srcset="<?= "midia/manga/".$img["nome"]; ?>_220.jpg">
                            <source media="(min-width: 960px)" srcset="<?= "midia/manga/".$img["nome"]; ?>_439.jpg">
                            <img src="<?= "midia/manga/".$img["nome"]; ?>_439.jpg" title="<?= $img["title"]; ?>" alt="<?= $img["alt"]; ?>" class="mw-100">
                        </picture>
                    </a>
                </div>
                <h1 class="titulo text-center"><?= $manga["titulo"]; ?></h1>
                <p class="subtitulo text-center"><?= $manga["subtitulo"]; ?></p>
                <?= $texto; ?>
            </div>
        </article>
        <?php } ?>
    </div>
</div>
