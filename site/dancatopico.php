<?php
    $dancas = dancatopicos();
    $visites = visiteoutros();
    $danca = getIdArray($_GET["id"], $dancas);
?>

<div class="container desktopTopo">
    <div class="row">
        <div class="col-lg-4">
            <section class="d-none d-lg-block">
                <h3 class="d-none">Imagem lateral</h3>
                <picture>
                    <source media="(min-width: 1200px)" srcset="midia/danca/bluedanca_300.jpg">
                    <img class="img-fluid" src="midia/danca/bluedanca_300.jpg" alt="casal japones com guarda chuva tipico de dança" style="width:auto;">
                </picture>
            </section>
        </div>
        
        <div class="col-lg-8 col-md-12 col-xs-12">
            <article>
                <h1 class="titulo"><?= $danca["titulo"]; ?></h1>
                <p>
                    <?= $danca["textob"] ?>
                </p>
            </article>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <aside>
                        <picture>
                            <source media="(max-width: 720px)" srcset="midia/danca/<?= $danca["imagem"]["nome"] . "_350" . $danca["imagem"]["ext"]; ?>">
                            <source media="(min-width: 720px)" srcset="midia/danca/<?= $danca["imagem"]["nome"] . "_700" . $danca["imagem"]["ext"]; ?>">
                            <source media="(min-width: 1200px)" srcset="midia/danca/<?= $danca["imagem"]["nome"] . "_700" . $danca["imagem"]["ext"]; ?>">
                            <img class="img-fluid imgTopicoDanca" src="midia/danca/<?= $danca["imagem"]["nome"] . "_700" . $danca["imagem"]["ext"]; ?>" alt="duas moças moças japonesas com roupas tipicas de dança japonesa" style="width:auto;">	
                        </picture>
                    </aside>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <aside>
                        <p>
                            <?= $danca["textoc"] ?>
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
                <h2 class="subtitulo">Visite outras categorias</h2>
            </section>
            
            <div class="row">
                <?php foreach ($visites as $valor) { ?>
                    <div class="col-lg-6">
                        <section class="categorias">
                            <h3 class="d-none">Catergorias para sem visitadas</h3>
                            <a href="<?= $valor["ref"]; ?>" ><img src="midia/danca/<?= $valor["nome"]; ?><?= $valor["ext"]; ?>" alt="<?= $valor["alt"]; ?>"></a>
                        </section>  
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="col-lg-8">
            <section>
                <h2 class="subtitulo text-center">Dança japonesa</h2>
            </section>    

            <div class="row">
                
                <?php
                    foreach ($dancas as $valor) {
                ?>                
                    <div class="col-lg-6 col-md-6 col-12">
                        <section class="sectionDanca">
                            <div class="row">
                                <div class="col-lg- col-md-4 col-4">
                                    <a href="<?= "index.php?pagina=dancatopico&id=".$valor["id"]; ?>">
                                        <picture>
                                            <source media="(max-width: 720px)" srcset="midia/danca/<?= $valor["imagem"]["nome"] . "_100" . $valor["imagem"]["ext"]; ?>">
                                            <source media="(min-width: 720px)" srcset="midia/danca/<?= $valor["imagem"]["nome"] . "_100" . $valor["imagem"]["ext"]; ?>">
                                            <source media="(min-width: 1200px)" srcset="midia/danca/<?= $valor["imagem"]["nome"] . "_100" . $valor["imagem"]["ext"]; ?>">
                                            <img class="img-fluid aImgDanca" src="midia/danca/<?= $valor["imagem"]["nome"] . "_100" . $valor["imagem"]["ext"]; ?>" alt= "<?= $valor["imagem"]["alt"]; ?>" style="width:auto;">
                                        </picture>
                                    </a>
                                </div>

                                <div class="col-lg-8 col-md-8 col-8">
                                    <h2 class="subtitulo"><a href="<?= "index.php?pagina=dancatopico&id=".$valor["id"]; ?>"><?= $valor["titulo"]; ?></a></h2>
                                    <p><?= $valor["texto"]; ?></p>
                                </div>
                            </div>
                        </section>
                    </div>                
                <?php
                    };
                ?>

            </div>
        </div>    
    </div>
</div>
