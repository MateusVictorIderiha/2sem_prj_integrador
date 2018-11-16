<div class="container">
    <div class="row d-none d-lg-block">
        <div class="col-lg-12 d-lg-block">
            <section class="sectionImgDanca">
                <h3 class="d-none">Imagem do desktop</h3>
                <picture>
                    <source media="(min-width: 1200px)" srcset="midia/danca/topoDesktopDanca_1200.jpg">
                    <img class="img-fluid" src="midia/danca/topoDesktopDanca_1200.jpg" alt="DanÃ§a tradicional japonesa, mulheres com roupa tradicional" style="width:auto;">
                </picture>
            </section>
        </div>
    </div>
</div>

<?php
$danca = dancatopicos();
$visites = visiteoutros();
?>

<div class="container desktopTopo">
    <div class="row">
        <div class="col-lg-4">
            <section class="d-none d-lg-block">
                <h3 class="d-none">Imagem do desktop</h3>
                <picture>
                    <source media="(min-width: 1200px)" srcset="midia/danca/lateralDesktopDanca_300.jpg">
                    <img class="img-fluid" src="midia/danca/lateralDesktopDanca_300.jpg" alt="casal japones com guarda chuva tipico de danÃ§a" style="width:auto;">
                </picture>
            </section>
        </div>

        <div class="col-lg-8 col-md-12 col-xs-12">
            <article>
                <h1 class="titulo">Dança como arte</h1>
                <p>
                    Pellentesque molestie diam lacus, ut sollicitudin mauris cursus vitae. Sed est orci, facilisis eu metus vel, maximus pretium est. Donec non gravida ligula. Fusce ac imperdiet lorem. Mauris feugiat tortor libero, non tempus nibh mattis eu. Quisque rhoncus libero bibendum sodales dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fermentum cursus pellentesque. Mauris eget elit rutrum, eleifend tortor sed, vehicula ante. Cras sed orci vel purus malesuada ultricies. Sed quis porttitor nibh. Praesent in massa tellus. In eget hendrerit massa. Mauris ut leo a purus aliquet rutrum.
                    Sed tristique lectus commodo, scelerisque mauris a, porta odio. Vestibulum tincidunt libero id mi auctor, a elementum ligula pharetra. Ut finibus nibh a arcu suscipit, et vulputate leo semper. Fusce vulputate ipsum ac pellentesque hendrerit. 
                </p>
            </article>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <aside>
                        <picture>
                            <source media="(max-width: 720px)" srcset="midia/danca/meioDesktopDanca_400.jpg">
                            <source media="(min-width: 720px)" srcset="midia/danca/meioDesktopDanca_400.jpg">
                            <source media="(min-width: 1200px)" srcset="midia/danca/meioDesktopDanca_400.jpg.">
                            <img class="img-fluid" src="midia/danca/meioDesktopDanca_400.jpg" alt="duas moÃ§as moÃ§as japonesas com roupas tipicas de danÃ§a japonesa" style="width:auto;">	
                        </picture>
                    </aside>
                </div>

                <div class="col-lg-6 col-md-6">
                    <aside class="d-none d-sm-block">
                        <p>
                            Pellentesque molestie diam lacus, ut sollicitudin mauris cursus vitae. Sed est orci, facilisis eu metus vel, maximus pretium est. Donec non gravida ligula. Fusce ac imperdiet lorem. Mauris feugiat tortor libero, non tempus nibh mattis eu. Quisque rhoncus libero bibendum sodales dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer fermentum cursus pellentesque. Mauris eget elit rutrum, eleifend tortor sed, Pellentesque molestie diam lacus, ut sollicitudin mauris cursus vitae. Sed est orci.
                        </p>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="hrDanca">

<div class="container">
    <div class="row">
        <div class="col-lg-4 d-none d-lg-block">
            <section>
                <h2 class="subtitulo text-center dancaText">Outras categorias</h2>
            </section>

            <div class="row">
                <?php foreach ($visites as $valor) { ?>
                    <div class="col-lg-6">
                        <section class="categoriasD">
                            <h3 class="d-none">categoria visitas</h3>
                            <a href="<?= $valor["ref"]; ?>" ><img class="img-fluid" src="midia/danca/<?= $valor["nome"]; ?><?= $valor["ext"]; ?>" alt="<?= $valor["alt"]; ?>"></a>
                        </section>  
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="col-lg-8">
            <section>
                <h2 class="subtitulo text-center dancaText">Dança japonesa</h2>
            </section>    

            <div class="row">

                <?php
                foreach ($danca as $valor) {
                    ?>                
                    <div class="col-lg-6 col-md-6 col-12">
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

                                <div class="col-lg-8 col-md-8 col-8 HiddenText-163">
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
</div>                  

