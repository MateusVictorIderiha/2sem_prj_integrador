<?php
$musicas = getMusica();
$id = $_GET["id"];
$musica = getIdArray($id, $musicas);
?>
<div class="container p-2">
    <div class="row">
        <div class="col-md-4">
 
            <article>
                <h1 class="text-center titulo"><?= $musica["titulo"]; ?></h1>
                <picture>
                    <source media="(max-width: 720px)" srcset="<?= "midia/musicas/" .$musica["imagem"]; ?>">
                    <source media="(min-width: 720px)" srcset="<?= "midia/musicas/" .$musica["imagem"]; ?>">
                    <source media="(min-width: 1200px)" srcset="<?= "midia/musicas/" .$musica["imagem"]; ?>">
                    <img class="img-fluid img-thumbnail" src="<?= "midia/musicas/" .$musica["imagem"]; ?>" alt="<?= $musica["alt"]; ?>">
                </picture>
                <p class="text-justify"><?= $musica["texto"]; ?>...</p>
                <p class="text-justify"><?= $musica["texto"]; ?>...</p>
                <p class="text-justify"><?= $musica["texto"]; ?>...</p>
            </article>
        </div>
        <div class="col-md-8">
            <!--PARTE EXTRA-->
            <h2 class="text-center subtitulo"><?= $musica["extra"]["tituloExtra"]; ?></h2>
            <div class="container-fluid">
                <div class="row">
                    <?php foreach ($musica["extra"]["sectionExtra"] as $valor) { ?>
                        <div class="col-md-6">
                            <section>
                                <h2 class="text-center subtitulo"><?= $valor["titulo"]; ?></h2>
                              <?php if (isset($valor["imagem"])){ ?>
                                <picture>
                                    <source media="(max-width: 720px)" srcset="<?= "midia/musicas/" . $valor["imagem"]; ?>">
                                    <source media="(min-width: 720px)" srcset="<?= "midia/musicas/" . $valor["imagem"]; ?>">
                                    <source media="(min-width: 1200px)" srcset="<?= "midia/musicas/" . $valor["imagem"]; ?>">
                                    <img class="img-fluid img-thumbnail rounded-circle m-2 float-left" style="width: 175px; height: 175px" src="<?= "midia/musicas/" . $valor["imagem"]; ?>" alt="imagem de uma banda de j-pop denominada de ...">
                                </picture>
                               <?php } ?>
                                <p class="text-justify"><?= substr($valor["texto"], 0, 225); ?>...</p>
                                <p class="text-justify"><?= substr($valor["texto"], 0, 225); ?>...</p>
                                <p class="text-justify"><?= substr($valor["texto"], 0, 225); ?>...</p>
                            </section>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <section class="row mb-4 mt-4">
        <?php include 'sidebar-busca.php'; ?>
    </section>
</div>
