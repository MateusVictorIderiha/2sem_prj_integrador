<?php
$musicas= getMusica();
$id=$_GET["id"];
$musica= getIdArray($id, $musicas);
var_dump($musica);
?>
<div class="container p-2">
    <div class="row">
        <div class="col-md-4">
            <!--PARTE PRINCIPAL-->
            <article>
                <h2 class="text-center subtitulo">J-Pop</h2>
                <picture>
                    <source media="(max-width: 720px)" srcset="midia/musicas/logo_j.jpg">
                    <source media="(min-width: 720px)" srcset="midia/musicas/logo_j.jpg">
                    <source media="(min-width: 1200px)" srcset="midia/musicas/logo_j.jpg">
                    <img class="img-fluid img-thumbnail" src="midia/musicas/logo_j.jpg" alt="img">
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
                   <div class="col-md-6">
                       <h3 class="text-center">Perfume</h3>
                       <picture>
                           <source media="(max-width: 720px)" srcset="midia/musicas/perfume.jpg">
                           <source media="(min-width: 720px)" srcset="midia/musicas/perfume.jpg">
                           <source media="(min-width: 1200px)" srcset="midia/musicas/perfume.jpg">
                           <img class="img-fluid img-thumbnail rounded-circle m-2 float-left" style="width: 175px; height: 175px" src="midia/musicas/perfume.jpg" alt="imagem de uma banda de j-pop denominada de Perfume">
                       </picture>
                       <p class="text-justify">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class="text-justify">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                   </div>
                     
                     
                     <!--SECTION EXTRA-->
                    <div class="col-md-6">
                        <h3 class="text-center">Arashi</h3>
                        <picture>
                            <source media="(max-width: 720px)" srcset="midia/musicas/arashi_2.jpg">
                            <source media="(min-width: 720px)" srcset="midia/musicas/arashi_2.jpg">
                            <source media="(min-width: 1200px)" srcset="midia/musicas/arashi_2.jpg">
                            <img class="img-fluid img-thumbnail rounded-circle m-2 float-left" style="width: 175px; height: 175px" src="midia/musicas/arashi_2.jpg" alt="imagem de uma banda de j-pop denominada de Arashi">
                        </picture>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                    </div>

                     <!--SECTION EXTRA-->
                    <div class="col-md-6">
                        <h3 class="text-center">Ikimono Gakari</h3>
                        <picture>
                            <source media="(max-width: 720px)" srcset="midia/musicas/iki_gakari.jpg">
                            <source media="(min-width: 720px)" srcset="midia/musicas/iki_gakari.jpg">
                            <source media="(min-width: 1200px)" srcset="midia/musicas/iki_gakari.jpg">
                            <img class="img-fluid img-thumbnail rounded-circle m-2 float-left" style="width: 175px; height: 175px" src="midia/musicas/iki_gakari.jpg" alt="imagem de uma banda de j-pop denominada de Ikimono Gakari">
                        </picture>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                    </div>

                     <!--SECTION EXTRA-->
                    <div class="col-md-6">
                        <h3 class="text-center">Babymetal</h3>
                        <picture>
                            <source media="(max-width: 720px)" srcset="midia/musicas/bmtal.jpg">
                            <source media="(min-width: 720px)" srcset="midia/musicas/bmtal.jpg">
                            <source media="(min-width: 1200px)" srcset="imidia/musicas/bmtal.jpg">
                            <img class="img-fluid img-thumbnail rounded-circle m-2 float-left" style="width: 175px; height: 175px" src="midia/musicas/bmtal.jpg" alt="imagem de uma banda de j-pop denominada de BabyMetal">
                        </picture>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


