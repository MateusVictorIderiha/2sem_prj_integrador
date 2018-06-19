<?php
$danca = dancatopicos();
$visites = visiteoutros();
$mangas = getDadosMangas();
?>
    <div class="container-fluid">
        <section class="mb-5">
            <h1 class="titulo text-center">Teatro japones</h1>
            <div class="row">
            <?php
                $teatroValues = teatroContent();
                    foreach ($teatroValues as $teatroInfo){ 
            ?>
                <section class="col-12 col-md-6 col-lg-4 thumb_nail text-center">
                    <a href="index.php?pagina=<?= $teatroInfo["argumento"];?>&id=<?= $teatroInfo["id"];?>">    
                        <div class="circular">
                            <img class="thumb_img m-auto" src="midia/teatro/<?= $teatroInfo["imageSource"];?>.jpg" alt="<?= $teatroInfo["alt"];?>" title="<?= $teatroInfo["credito"];?>">
                                <div class="over_title">
                                    <h3 class="text-danger sub_cab"><?= $teatroInfo["title"];?></h3>
                                </div>
                                <div class="over_text">
                                    <p class="p_text"><?= $teatroInfo["texto"];?></p>
                                </div>
                        </div>
                    </a>
                </section>
            <?php } ?>
                </div>
        </section>
        <section class="mangas container mb-5">
            <h1 class="titulo text-center">Mangás</h1>
            <div class="row">
            <?php
            $mangasInd = array_rand($mangas, 4);
            foreach ($mangasInd as $ind) {
                $manga = $mangas[$ind];
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
        </section>
        <section>
            <h1 class="titulo text-center">Danças japonesas</h1>
            <div class="row">
                <?php
                    foreach ($danca as $valor) {
                ?>                
                <div class="col-lg-3 col-md-6 col-12">
                    <section class="sectionDanca">
                        <div class="row">
                            <div class="col-lg- col-md-4 col-4">
                                <a href="<?= "index.php?pagina=dancatopico&id=" . $valor["id"]; ?>">
                                    <picture>
                                        <source media="(max-width: 720px)" srcset="midia/danca/<?= $valor["imagem"]["nome"] . "_100" . $valor["imagem"]["ext"]; ?>">
                                        <source media="(min-width: 720px)" srcset="midia/danca/<?= $valor["imagem"]["nome"] . "_100" . $valor["imagem"]["ext"]; ?>">
                                        <source media="(min-width: 1200px)" srcset="midia/danca/<?= $valor["imagem"]["nome"] . "_100" . $valor["imagem"]["ext"]; ?>">
                                        <img class="img-fluid aImgDanca" src="midia/danca/<?= $valor["imagem"]["nome"] . "_100" . $valor["imagem"]["ext"]; ?>" alt="<?= $valor["imagem"]["alt"]; ?>" style="width:auto;">
                                    </picture>
                                </a>
                            </div>

                            <div class="col-lg-8 col-md-8 col-8">
                                <h2 class="subtitulo dancaText"><a class="internoDancaA" href="<?= "index.php?pagina=dancatopico&id=" . $valor["id"]; ?>"><?= $valor["titulo"]; ?></a></h2>
                                <a class="internoDancaA" href="<?= "index.php?pagina=dancatopico&id=" . $valor["id"]; ?>"><p><?= $valor["texto"]; ?></p></a>
                            </div>
                        </div>
                    </section>
                </div>                
            <?php
                }
            ?>
            </div>                
        </section>
    </div>