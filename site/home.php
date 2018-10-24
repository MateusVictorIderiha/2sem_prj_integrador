<?php
$danca = dancatopicos();
$visites = visiteoutros();

$mangas = getDadosMangas();
array_reverse($mangas);
$mangasDestaque = getMangasDestaque($mangas, 3);

$musicas = getMusica();
$teatroValues = teatroContent();
?>
<div class="container">
    <section>
        <div class="row">
            <div class="col-lg-4 col-md-12 text-center">
                <h1 class="titulo text-center">danças japonesas</h1>
                <picture class="d-none d-sm-block">
                    <source media="(min-width: 1200px)" srcset="midia/danca/danca_170.jpg">
                    <img class="rounded-circle my-3" src="midia/danca/danca_170.jpg" alt="Mulher ajoelhada em danÃ§a tipica do japÃ£o, usando yukata (vestido usado em eventos tradicionais)">
                </picture>
                <p class="d-none d-md-block">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mauris quam, 
                    eleifend eget tempor ut, tempor tempor purus. Aliquam vestibulum, eros vel 
                    venenatis vestibulum, nisi augue consequat tellus, in laoreet lorem odio non libero. 
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et purus ac sapien auctor 
                    dapibus eget at mi.
                </p>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <?php
                    foreach ($danca as $valor) {
                        ?>                
                        <div class="col-lg-6 col-md-6 col-12">
                            <section class="sectionDanca">
                                <div class="row">
                                    <div class=" col-md-4 col-4">
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
            </div>
        </div>                
    </section>
</div>

<hr class="hrDanca">

<div class="container mb-5">
    <section>
        <div class="row"> 
            <div class="col-lg-4 col-md-12 text-center">
                <h1 class="titulo text-center">músicas</h1>
                <picture class="d-none d-sm-block">
                    <source media="(min-width: 1200px)" srcset="midia/danca/perfume_170.jpg">
                    <img class="rounded-circle my-3" src="midia/danca/perfume_170.jpg" alt="Banda japonesa composta apenas de mulheres">
                </picture>
                <p class="d-none d-md-block text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mauris quam, 
                    eleifend eget tempor ut, tempor tempor purus. Aliquam vestibulum, eros vel 
                    venenatis vestibulum, nisi augue consequat tellus, in laoreet lorem odio non libero. 
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et purus ac sapien auctor 
                    dapibus eget at mi. Mauris metus nisi, dictum sed egestas ac, imperdiet a arcu. Quisque metus est, 
                    iaculis ac diam ut, elementum facilisis nibh. Mauris maximus, augue sed varius sodales, ipsum neque 
                    ultricies metus, vitae egestas eros lectus nec tortor.
                </p>
            </div>
            <div class="col-lg-8">
                <div class="row text-center">   
                    <?php foreach ($musicas as $musica) { ?>
                        <div class="col-lg-6 col-md-6 col-12">
                            <section class="sectionDanca">  
                                <h2 class="text-center subtitulo"><a class="internoDancaA" href="index.php?pagina=musica&id=<?= $musica["id"]; ?>"><?= $musica["titulo"]; ?></a></h2>
                                <picture>
                                    <source media="(max-width: 720px)" srcset="<?= "midia/musicas/" . $musica["imagem"]; ?>">
                                    <source media="(min-width: 720px)" srcset="<?= "midia/musicas/" . $musica["imagem"]; ?>">
                                    <source media="(min-width: 1200px)" srcset="<?= "midia/musicas/" . $musica["imagem"]; ?>">
                                    <img class="img-rounded img-fluid" style="height: 140px; width: 250px;" src="<?= "midia/musicas/" . $musica["imagem"]; ?>" alt="imagem relacionada ao gÃªnero musical j-pop">
                                </picture>
                                <p class="text-justify text-center mt-2"><a class="internoDancaA" href="index.php?pagina=musica&id=<?= $musica["id"]; ?>">Continuar lendo</a></p>
                            </section>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>


<hr class="hrDanca">

<div class="container mb-5">
    <section class="mangas">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="titulo text-center">mangás</h1>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mauris quam, 
                    eleifend eget tempor ut, tempor tempor purus. Aliquam vestibulum, eros vel 
                    venenatis vestibulum, nisi augue consequat tellus, in laoreet lorem odio non libero. 
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et purus ac sapien auctor 
                    dapibus eget at mi. Mauris metus nisi, dictum sed egestas ac, imperdiet a arcu. Quisque metus est, 
                    iaculis ac diam ut, elementum facilisis nibh.
                </p>
            </div>
        </div>
        <div class="row">
            <section class="col-12 text-center mb-5">
                <h2 class="subtitulo">Destaque</h2>
                <div class="row">
                    <?php
                    foreach ($mangasDestaque as $ind => $manga) {
                        $texto = substr($manga["texto"], 0, 175);
                        $img = $manga["imagem"];
                    ?>
                        <section class="col-12 col-sm-6 col-lg-4 <?= $ind == 0 ? "" : ""; ?> manga">
                            <div class="borderManga">
                                <div class="contentManga">
                                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" title="<?= $manga["titulo"]; ?>"><h3 class="titulo text-center"><?= $manga["titulo"]; ?></h3></a>
                                    <a tabindex="-1" href="index.php?pagina=manga&id=<?= $manga["id"]; ?>"><p class="subtitulo text-center"><?= $manga["subtitulo"]; ?></p></a>
                                    <div class="containerImg text-center">
                                        <a tabindex="-1" href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class="creditos">
                                        <!--<a href="<?= $img["credito"] ?>" title="<?= $img["title"]; ?>" class="" target="_blank">-->
                                            <?php if ($img["ext"] == ".svg") { ?>
                                                <object tabindex="-1" width="523" type="image/svg+xml" data="<?= "midia/manga/" . $img["nome"] . $img["ext"]; ?>" title="<?= $img["alt"] . ". " . $img["title"]; ?>"></object>
                                            <?php } else { ?>
                                                <picture>
                                                    <source media="(max-width: 960px)" srcset="<?= "midia/manga/" . $img["nome"] . "_220" . $img["ext"]; ?>">
                                                    <source media="(min-width: 960px)" srcset="<?= "midia/manga/" . $img["nome"] . "_439" . $img["ext"]; ?>">
                                                    <img src="<?= "midia/manga/" . $img["nome"] . "_220" . $img["ext"]; ?>" title="<?= $img["title"]; ?>" alt="<?= $img["alt"]; ?>">
                                                </picture>
                                            <?php } ?>
                                        </a>
                                        <!--</a>-->
                                    </div>
                                    <a tabindex="-1" href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class=""><p class="text-justify texto"><?= $texto; ?></p></a>
                                    <a tabindex="-1" href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class="d-md-none btn btn-outline-primary btn-lg pl-4 pr-4">Leia +</a>
                                </div>
                            </div>
                        </section>
                    <?php } ?>
                </div>
            </section>            
        </div>

        <div class="row">
            <section class="col-12 text-center">
                <h2 class="subtitulo">Mais recentes</h2>
                <div class="row">
                    <?php
                    foreach (array_values($mangas) as $indManga => $manga) {
                        if ($indManga == 4) {
                            break;
                        }
                        $texto = substr($manga["texto"], 0, 175);
                        $img = $manga["imagem"];
                        
                        if ($indManga <= 1) {
                            $imgMangaPqn = "midia/manga/".$img["nome"]."_220".$img["ext"];
                            $imgMangaLg = "midia/manga/".$img["nome"]."_439".$img["ext"];
                            $imgMangaStandard = "midia/manga/".$img["nome"]."_220".$img["ext"];
                            $isHide = "";
                        } else {
                            $imgMangaPqn = "";
                            $imgMangaLg = "midia/manga/".$img["nome"]."_439".$img["ext"];
                            $imgMangaStandard = "";
                            $isHide = "d-none d-md-block";
                        }
                    ?>
                        <section class="col-12 col-sm-6 col-md-6 col-lg-3 manga <?= $isHide; ?>">
                            <div class="borderManga">
                                <div class="contentManga">
                                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>"><h3 class="titulo text-center"><?= $manga["titulo"]; ?></h3></a>
                                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>"><p class="subtitulo text-center"><?= $manga["subtitulo"]; ?></p></a>
                                    <div class="containerImg text-center">
                                        <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class="creditos">
                                        <!--<a href="<?= $img["credito"] ?>" title="<?= $img["title"]; ?>" class="" target="_blank">-->
                                            <?php if ($img["ext"] == ".svg") { ?>
                                                <object width="523" type="image/svg+xml" data="<?= "midia/manga/" . $img["nome"] . $img["ext"]; ?>" title="<?= $img["alt"] . ". " . $img["title"]; ?>"></object>
                                            <?php } else { ?>
                                                <picture>
                                                    <source media="(max-width: 960px)" srcset="<?= $imgMangaPqn; ?>">
                                                    <source media="(min-width: 960px)" srcset="<?= $imgMangaLg; ?>">
                                                    <img src="<?= $imgMangaStandard; ?>" title="<?= $img["title"]; ?>" alt="<?= $img["alt"]; ?>">
                                                </picture>
                                            <?php } ?>
                                        </a>
                                        <!--</a>-->
                                    </div>
                                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class=""><p class="text-justify texto"><?= $texto; ?></p></a>
                                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class="d-md-none btn btn-outline-primary btn-lg pl-4 pr-4">Leia +</a>
                                </div>
                            </div>
                        </section>
                    <?php } ?>
                </div>
            </section>
        </div>
    </section>
</div>

<hr class="hrDanca">

<div class="container mb-5">
    <section>
        <div class="row">
            <div class="col-lg-4 col-md-12 text-center">
                <h1 class="titulo text-center">Teatro japonês</h1>
                <picture class="d-none d-sm-block">
                    <source media="(min-width: 1200px)" srcset="midia/danca/teatro_170.jpg">
                    <img class="rounded-circle my-3" src="midia/danca/teatro_170.jpg" alt="peÃ§a de teatro tipica do japÃ£o">
                </picture>
                <p class="d-none d-md-block text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mauris quam, 
                    eleifend eget tempor ut, tempor tempor purus. Aliquam vestibulum, eros vel 
                    venenatis vestibulum, nisi augue consequat tellus, in laoreet lorem odio non libero. 
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et purus ac sapien auctor 
                    dapibus eget at mi. Mauris metus nisi, dictum sed egestas ac, imperdiet a arcu. Quisque metus est, 
                    iaculis ac diam ut, elementum facilisis nibh. Mauris maximus, augue sed varius sodales, ipsum neque 
                    ultricies metus, vitae egestas eros lectus nec tortor. In vel mi dapibus, laoreet arcu at, tristique urna.
                    Aliquam vitae ligula turpis. Curabitur condimentum, ligula in vulputate laoreet.
                </p>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <?php for ($i = 0; $i <= 3; $i++) { ?>
                        <section class="col-12 col-md-6 col-lg-6 thumb_nail text-center">
                            <a href="index.php?pagina=<?= $teatroValues[$i]["argumento"]; ?>&id=<?= $teatroValues[$i]["id"]; ?>">    
                                <div class="circular">
                                    <img class="thumb_img m-auto" src="midia/teatro/<?= $teatroValues[$i]["imagem"]; ?>.jpg" alt="<?= $teatroValues[$i]["alt"]; ?>" title="<?= $teatroValues[$i]["credito"]; ?>">
                                    <div class="over_title">
                                        <h3 class="text-danger sub_cab"><?= $teatroValues[$i]["title"]; ?></h3>
                                    </div>
                                    <div class="over_text">
                                        <p class="p_text"><?= $teatroValues[$i]["texto"]; ?></p>
                                    </div>
                                </div>
                            </a>
                        </section>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</div>

<hr class="hrDanca">

<div class="container mb-5">
    <div class="row">
        <section class="col-12 text-center">
            <h1 class="titulo text-center">Origamis</h1>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mauris quam, 
                eleifend eget tempor ut, tempor tempor purus. Aliquam vestibulum, eros vel 
                venenatis vestibulum, nisi augue consequat tellus, in laoreet lorem odio non libero. 
                Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et purus ac sapien auctor 
                dapibus eget at mi. Mauris metus nisi, dictum sed egestas ac, imperdiet a arcu. Quisque metus est, 
                iaculis ac diam ut, elementum facilisis nibh.
            </p>
            <div class="row">
                <section class="col-md-3 col-12">
                    <a href="index.php?pagina=aprenda_a_fazer2">
			<h2 class="subtitulo text-center">Aprenda a fazer o Tsuru </h2>
			<img class="img-rounded img-responsive center-block imgHome" style="height: 140px; width: 250px;" src="midia/origame/HomeCuriosidades1.jpg" alt="Origami representando um passaro feito em papel colorido">
                    </a>
			<p class="text-justify ml-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos</p>
                </section>
                <section class="col-md-3 col-12">
                    <a href="index.php?pagina=origami2">
			<h2 class="subtitulo text-center"> Modelo pronto  </h2>
			<img class="img-rounded img-responsive center-block imgHome" style="height: 140px; width: 250px;" src="midia/origame/modeloprontohome.jpg" alt="Origami representando um passaro feito em papel branco">
                    </a>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos</p>
                </section>
                <section class="col-md-3 col-12">
                    <a href="index.php?pagina=aprenda_a_fazer">
			<h2 class="subtitulo text-center">Faça Borboletas </h2>
			<img class="img-rounded img-responsive center-block imgHome" style="height: 140px; width: 250px;" src="midia/origame/aprendaafazerborboletashome.jpg" alt="Origami representando borboletas feito em papel colorido">
                    </a>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos</p>
                </section>
                <section class="col-md-3 col-12">
                    <a href="index.php?pagina=origami">
			<h2 class="subtitulo text-center"> Modelo pronto</h2>
			<img class="img-rounded img-responsive center-block imgHome" style="height: 140px; width: 250px;" src="midia/origame/vermelho.jpg" alt="Origami representando um passaro feito em papel colorido">
                    </a><p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos</p>
                </section>
            </div>
        </section>
    </div>
</div>
