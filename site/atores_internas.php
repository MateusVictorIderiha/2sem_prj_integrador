<?php
    $atores = atoresContent();
    $page_id = $_GET['id'];
    $ator = getIdArray( $page_id, $atores);
?>
    <div class="container teatro_content">
    <main class="bio_content">
        <h1 class="titulo text-center"><?=$ator['titulo']?></h1>
        <div class="row">
            <aside class="col-12 col-lg-4 bio_aside_margin">
                    <div class="line line_perfil d-md-none"></div>
                        <img class="d-block mx-auto img-fluid bio_aside_img" src="midia/teatro/<?=$ator['imagem']?>.jpg" alt="<?=$ator['alt']?>" title="<?=$ator['credito']?>" >
                    <div class="line line_perfil d-md-none"></div>
            </aside>
        <article class="bio_article_margin text-justify text-md-left col-12 col-lg-8">
            <p><?=$ator['textoUm']?></p>
            <p><?=$ator['textoDois']?></p>
               </article>
        </div>
    </main>
            <section class="row text-center">
                <div class="line line_obras d-none"></div>
                <h2 class="subtitulo obras_sub_heading col-12">Recentes no Banco de Dados</h2>
		    <?php 
			foreach ($atores as $maisAtores) {
			    if($maisAtores['titulo'] <> $ator['titulo'] ){
		    ?>
                        <section class="text-center float-left col-12 col-md-6 col-lg-2 section_atores">
                            <div class="line sub_line"></div>
                            <img class="img_mais_bios d-block mx-auto" src="midia/teatro/<?=$maisAtores['imagem']?>.jpg" alt="<?=$maisAtores['alt']?>" title="<?=$maisAtores['credito']?>" width="150" height="215">
                            <a href="index.php?pagina=atores_internas&id=<?=$maisAtores['id']?>"><h2 class="heading_atores"><?=$maisAtores['titulo']?></h2></a>
                        </section>
		    <?php 
			    }
			} 
		    ?>
            </section>   
    </div>
