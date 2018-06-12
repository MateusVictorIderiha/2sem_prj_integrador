<?php
$mangas = getDadosMangas();
?>
<div class="container mangas">
    <div class="row">
        <section class="col-12">
            <h1 class="titulo">O manga</h1>
        </section>
    </div>
    <div class="row">
        <?php
        foreach ($mangas as $manga) {
            $texto = substr($manga["texto"], 0, 175);
            $img = $manga["imagem"];
        ?>
        <section class="col-12 col-md-3 manga">
            <div class="container">
                <h2 class="titulo text-center"><?= $manga["titulo"]; ?></h2>
                <p class="subtitulo text-center"><?= $manga["subtitulo"]; ?></p>
                <div class="containerImg text-center">
                    <!--<a href="<?= $img["credito"] ?>" title="<?= $img["title"]; ?>" class="" target="_blank">-->
                    <?php if ($img["ext"] == ".svg") { ?>
                        <img src="<?= "midia/manga/".$img["nome"]."_220".$img["ext"]; ?>" title="<?= $img["title"]; ?>" alt="<?= $img["alt"]; ?>" class="mw-100">
                    <?php } else { ?>
                        <picture class="">
                            <source media="(max-width: 960px)" srcset="<?= "midia/manga/".$img["nome"]."_220".$img["ext"]; ?>">
                            <source media="(min-width: 960px)" srcset="<?= "midia/manga/".$img["nome"]."_439".$img["ext"]; ?>">
                            <img src="<?= "midia/manga/".$img["nome"]."_220".$img["ext"]; ?>" title="<?= $img["title"]; ?>" alt="<?= $img["alt"]; ?>" class="mw-100">
                        </picture>
                    <?php } ?>
                    <!--</a>-->
                </div>
                <p class="text-justify"><?= $texto; ?></p>
                <button class="btn btn-primary m-auto">Leia +</button>
            </div>
        </section>
        <?php } ?>
    </div>
</div>
