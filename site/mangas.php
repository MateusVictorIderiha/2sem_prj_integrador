<?php
$id_cat = $_GET["id"] ?? 1;

$mangasAll = getDadosMangas();
$mangasCat = getMangasCat($mangasAll, $id_cat);

$categorias = getDadosCategoria();
$imgsCat = $categorias["imagens"];
?>
<div class="mangas">
    <header class="containerCat">
        <div class="img-cat1">
            <div class="clip">
                <a href="<?= $imgsCat[0]["credito"]; ?>" title="<?= $imgsCat[0]["title"]; ?>">
                    <picture class="">
                        <source media="(max-width: 960px)" srcset="">
                        <source media="(min-width: 960px)" srcset="midia/manga/<?= $imgsCat[0]["nome"]."_220".$imgsCat[0]["ext"]; ?>">
                        <img class="mw-100 d-none d-md-block" src="" class="w-100" alt="<?= $imgsCat[0]["alt"]; ?>"/>
                    </picture>
                </a>
            </div>
        </div>
        <div class="contentCat">
            <div class="clip">
                <h1 class="titulo text-center"><?= $categorias["nome"]; ?></h1>
                <p class="subtitulo text-center"><?= $categorias["subtitulo"]; ?></p>
                <p class="texto"><?= $categorias["texto"]; ?></p>
            </div>
        </div>
        <div class="img-cat2">
            <div class="clip">
                <a href="<?= $imgsCat[1]["credito"]; ?>" title="<?= $imgsCat[1]["title"]; ?>">
                    <picture class="">
                        <source media="(max-width: 960px)" srcset="">
                        <source media="(min-width: 960px)" srcset="midia/manga/<?= $imgsCat[1]["nome"]."_220".$imgsCat[1]["ext"]; ?>">
                        <img class="mw-100 d-none d-md-block" src="" class="w-100" alt="<?= $imgsCat[1]["alt"]; ?>"/>
                    </picture>
                </a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <?php
            foreach ($mangasCat as $manga) {
                $texto = substr($manga["texto"], 0, 175);
                $img = $manga["imagem"];
            ?>
            <section class="col-12 col-md-6 col-lg-3 manga">
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
</div>
