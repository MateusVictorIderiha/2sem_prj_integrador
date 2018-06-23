<?php
$musicas=getMusica();
?>
<div class="container">
    <div class="jumbotron">
        <div class="container-fluid">
            <article>
                <h1 class="text-center titulo">Gêneros Musicais japoneses</h1>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo</p>
            </article>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
            <?php
            foreach ($musicas as $musica) { ?> 
        <div class="col-md-3">
   
          <section>  
                <h2 class="text-center subtitulo"><?= $musica["titulo"]; ?></h2>
                <picture>
                    <source media="(max-width: 720px)" srcset="<?= "midia/musicas/".$musica["imagem"]; ?>">
                    <source media="(min-width: 720px)" srcset="<?= "midia/musicas/".$musica["imagem"];?>">
                    <source media="(min-width: 1200px)" srcset="<?= "midia/musicas/".$musica["imagem"]; ?>">
                    <img class="img-rounded img-fluid center-block" style="height: 140px; width: 250px;" src="<?= "midia/musicas/".$musica["imagem"]; ?>" alt="imagem relacionada ao gênero musical j-pop">
                </picture>
          
                <p><?= substr($musica["texto"],0,225); ?><a href="index.php?pagina=musica&id=<?=$musica["id"];?>"> Continuar lendo</a></p>
                
            </section>

        </div>
                    <?php }?>
    </div>
</div>