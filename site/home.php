<?php
    $danca = dancatopicos();
    $visites = visiteoutros();
?>

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
