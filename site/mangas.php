<?php
$mangas = getMangasCategoria();
?>
<div class="container mangas">
    <div class="row">
        <section class="col-12">
            <h1 class="titulo text-center">O manga</h1>
        </section>
    </div>
    <div class="row">
        <?php
        foreach ($mangas as $manga) {
            $texto = substr($manga["texto"], 0, 175);
            $img = $manga["imagem"];
        ?>
        <section class="col-12 col-sm-6 col-md-3 manga">
            <div class="borderManga">
                <div class="contentManga">
                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class=""><h2 class="titulo text-center"><?= $manga["titulo"]; ?></h2></a>
                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class=""><p class="subtitulo text-center"><?= $manga["subtitulo"]; ?></p></a>
                    <div class="containerImg text-center">
                        <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class="creditos">
                        <!--<a href="<?= $img["credito"] ?>" title="<?= $img["title"]; ?>" class="" target="_blank">-->
                        <?php if ($img["ext"] == ".svg") { ?>
                            <object width="523" type="image/svg+xml" data="<?= "midia/manga/".$img["nome"].$img["ext"]; ?>" title="<?= $img["alt"].". ".$img["title"]; ?>"></object>
                        <?php } else { ?>
                            <picture>
                                <source media="(max-width: 960px)" srcset="<?= "midia/manga/".$img["nome"]."_220".$img["ext"]; ?>">
                                <source media="(min-width: 960px)" srcset="<?= "midia/manga/".$img["nome"]."_439".$img["ext"]; ?>">
                                <img src="<?= "midia/manga/".$img["nome"]."_220".$img["ext"]; ?>" title="<?= $img["title"]; ?>" alt="<?= $img["alt"]; ?>">
                            </picture>
                        <?php } ?>
                        </a>
                        <!--</a>-->
                    </div>
                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class=""><p class="text-justify texto"><?= $texto; ?></p></a>
                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class="d-md-none btn btn-outline-primary btn-lg">Leia +</a>
                </div>
            </div>
        </section>
        <?php } ?>
    </div>
</div>
