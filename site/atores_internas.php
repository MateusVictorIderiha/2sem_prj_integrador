<?php
    $atores = atoresContent();
    $page_id = $_GET['id'];
    $ator = getIdArray( $page_id, $atores);
    var_dump($ator);
    
?>
    <div class="container teatro_content">
    <main class="bio_content">
        <h1 class="titulo text-center"><?=$ator['titulo']?></h1>
        <div class="row">
            <aside class="col-12 col-lg-4 bio_aside_margin">
                    <div class="line line_perfil d-md-none"></div>
                        <img class="d-block mx-auto img-fluid bio_aside_img" src="midia/teatro/<?=$ator['imageSource']?>.jpg" alt="Ator">
                    <div class="line line_perfil d-md-none"></div>
            </aside>
        <article class="bio_article_margin text-justify text-md-left col-12 col-lg-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.</p>
               </article>
        </div>
    </main>
            <section class="row text-center">
                <div class="line line_obras d-none"></div>
                <h2 class="subtitulo obras_sub_heading col-12">Recentes no Banco de Dados</h2>
		<div class="">
<?php 
foreach ($atores as $maisAtores) {
    if($maisAtores['titulo'] <> $ator['titulo'] ){
 ?>
                        <section class="text-center float-left col-12 col-md-6 col-lg-3">
                            <div class="line sub_line"></div>
                            <img class="img_mais_bios d-block mx-auto" src="midia/teatro/<?=$maisAtores['imageSource']?>.jpg" alt="imagem teste" width="150" height="215">
                            <a href="index.php?pagina=atores_internas&id=<?=$maisAtores['id']?>"><?=$maisAtores['titulo']?></a>
                        </section>
<?php 
    }

    } ?>
		    </div>
            </section>   
    </div>