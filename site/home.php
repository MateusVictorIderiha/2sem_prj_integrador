<?php
$danca = dancatopicos();
$visites = visiteoutros();
$mangas = getDadosMangas();
array_reverse($mangas);
$musicas = getMusica();
$teatroValues = teatroContent();
?>
<div class="container">
    <article>
        <div class="row">
            <div class="col-lg-4 col-md-12 text-center">
                <h1 class="titulo text-center">Danças japonesas</h1>
                <picture class="d-none d-sm-block">
                    <source media="(min-width: 1200px)" srcset="midia/danca/danca_170.jpg">
                    <img class="rounded-circle my-3" src="midia/danca/danca_170.jpg" alt="Mulher ajoelhada em dança tipica do japão, usando yukata (vestido usado em eventos tradicionais)">
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
                            <aside class="sectionDanca">
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
                            </aside>
                        </div>                
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>                
    </article>
</div>

<hr class="hrDanca">

<div class="container mb-5">
    <article>
        <div class="row"> 
            <div class="col-lg-4 col-md-12 text-center">
                <h1 class="titulo text-center">Músicas</h1>
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
                            <aside class="sectionDanca">  
                                <h2 class="text-center subtitulo"><a class="internoDancaA" href="index.php?pagina=musica&id=<?= $musica["id"]; ?>"><?= $musica["titulo"]; ?></a></h2>
                                <picture>
                                    <source media="(max-width: 720px)" srcset="<?= "midia/musicas/" . $musica["imagem"]; ?>">
                                    <source media="(min-width: 720px)" srcset="<?= "midia/musicas/" . $musica["imagem"]; ?>">
                                    <source media="(min-width: 1200px)" srcset="<?= "midia/musicas/" . $musica["imagem"]; ?>">
                                    <img class="img-rounded img-fluid" style="height: 140px; width: 250px;" src="<?= "midia/musicas/" . $musica["imagem"]; ?>" alt="imagem relacionada ao gênero musical j-pop">
                                </picture>
                                <p class="text-justify text-center mt-2"><a class="internoDancaA" href="index.php?pagina=musica&id=<?= $musica["id"]; ?>">Continuar lendo</a></p>
                            </aside>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </article>
</div>

<hr class="hrDanca">

<div class="container mb-5">
    <article>
        <div class="row">
            <div class="col-lg-4 col-md-12 text-center">
                <h1 class="titulo text-center">Teatro japones</h1>
                <picture class="d-none d-sm-block">
                    <source media="(min-width: 1200px)" srcset="midia/danca/teatro_170.jpg">
                    <img class="rounded-circle my-3" src="midia/danca/teatro_170.jpg" alt="peça de teatro tipica do japão">
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
                        <aside class="col-12 col-md-6 col-lg-6 thumb_nail text-center">
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
                        </aside>
                    <?php } ?>
                </div>
            </div>
        </div>
    </article>
</div>

<hr class="hrDanca">

<div class="container mb-5">
    <article class="mangas">
        <div class="row">
            <div class="col-lg-4 col-md-12 text-center">
                <h1 class="titulo text-center">Mangás</h1>
                <picture class="d-none d-sm-block">
                    <source media="(min-width: 1200px)" srcset="midia/danca/akihabara_170.jpg">
                    <img class="rounded-circle my-3" src="midia/danca/akihabara_170.jpg" alt="area do japao de akihabara muito popular de cultura de animes jogos etc">
                </picture>
                <p class="d-none d-md-block text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mauris quam, 
                    eleifend eget tempor ut, tempor tempor purus. Aliquam vestibulum, eros vel 
                    venenatis vestibulum, nisi augue consequat tellus, in laoreet lorem odio non libero. 
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc et purus ac sapien auctor 
                    dapibus eget at mi. Mauris metus nisi, dictum sed egestas ac, imperdiet a arcu. Quisque metus est, 
                    iaculis ac diam ut, elementum facilisis nibh.
                </p>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <?php
                    foreach ($mangas as $ind => $manga) {
                        if ($ind == 4) {
                            break;
                        }
                        $manga = $mangas[$ind];
                        $texto = substr($manga["texto"], 0, 175);
                        $img = $manga["imagem"];
                        ?>
                        <aside class="col-12 col-sm-6 col-md-6 col-lg-3 manga mt-4">
                            <div class="borderManga">
                                <div class="contentManga">
                                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>"><h2 class="titulo text-center"><?= $manga["titulo"]; ?></h2></a>
                                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>"><p class="subtitulo text-center"><?= $manga["subtitulo"]; ?></p></a>
                                    <div class="containerImg text-center">
                                        <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class="creditos">
                                        <!--<a href="<?= $img["credito"] ?>" title="<?= $img["title"]; ?>" class="" target="_blank">-->
                                            <?php if ($img["ext"] == ".svg") { ?>
                                                <object width="523" type="image/svg+xml" data="<?= "midia/manga/" . $img["nome"] . $img["ext"]; ?>" title="<?= $img["alt"] . ". " . $img["title"]; ?>"></object>
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
                                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class=""><p class="text-justify texto"><?= $texto; ?></p></a>
                                    <a href="index.php?pagina=manga&id=<?= $manga["id"]; ?>" class="d-md-none btn btn-outline-primary btn-lg">Leia +</a>
                                </div>
                            </div>
                        </aside>
                    <?php } ?>
                </div>
            </div>
        </div>
    </article>
</div>