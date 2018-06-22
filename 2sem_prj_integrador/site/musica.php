<?php
$musicas = getMusica();
$id = $_GET["id"];
$musica = getIdArray($id, $musicas);
?>
<div class="container p-2">
    <div class="row">
        <div class="col-md-4">
            <!--PARTE PRINCIPAL-->
            <article>
                <h2 class="text-center subtitulo"><?= $musica["titulo"]; ?></h2>
                <picture>
                    <source media="(max-width: 720px)" srcset="midia/musicas/logo_j.jpg">
                    <source media="(min-width: 720px)" srcset="midia/musicas/logo_j.jpg">
                    <source media="(min-width: 1200px)" srcset="midia/musicas/logo_j.jpg">
                    <img class="img-fluid img-thumbnail" src="midia/musicas/logo_j.jpg" alt="Imagem/logo da pagina relacionada ao gênero musical J-POP">
                </picture>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?
                </p>
            </article>
        </div>
        <div class="col-md-8">
            <!--PARTE EXTRA-->
            <h2 class="text-center subtitulo">Principais Artistas</h2>
            <div class="container-fluid">
                <div class="row">
                    <!--USAR FOREACH APENAS NO PRIMEIRO NESSE E APAGAR OS OUTROS DEPOIS QUE TUDO ESTIVER PRONTO-->

                    <!--SECTION EXTRA-->
                    <?php foreach ($musica["extra"]["sectionExtra"] as $valor) { ?>
                        <div class="col-md-6">
                            <section>
                                <h3 class="text-center"><?= $valor["titulo"]; ?></h3>
                                <picture>
                                    <source media="(max-width: 720px)" srcset="<?= "midia/musicas/" . $valor["imagem"]; ?>">
                                    <source media="(min-width: 720px)" srcset="<?= "midia/musicas/" . $valor["imagem"]; ?>">
                                    <source media="(min-width: 1200px)" srcset="<?= "midia/musicas/" . $valor["imagem"]; ?>">
                                    <img class="img-fluid img-thumbnail rounded-circle m-2 float-left" style="width: 175px; height: 175px" src="<?= "midia/musicas/" . $valor["imagem"]; ?>" alt="imagem de uma banda de j-pop denominada de Perfume">
                                </picture>
                                <p class="text-justify"><?= substr($valor["texto"], 0, 225); ?>...</p>
                                <p class="text-justify"><?= substr($valor["texto"], 0, 225); ?>...</p>
                            </section>
                        </div>

                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
</div>