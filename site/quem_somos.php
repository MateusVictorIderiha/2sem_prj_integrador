<?php
$dadosGrupo = getInfoGrupo();
?>
<article class="container">
    <h1 class="titulo text-center">Quem somos</h1>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <figure class="text-center">
                    <img src="midia/geral/logo.svg" alt="Logo do grupo <?= $dadosGrupo["nome_grupo"]; ?>"/>
                    <figcaption>
                        <?= $dadosGrupo["descricao_logo"]; ?>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <p><?= $dadosGrupo["descricao"]; ?></p>
            </div>
        </div>
    <?php foreach ($dadosGrupo["integrantes"] as $integrante) { ?>
    <div class="row">
            
            <div class="col-lg-2 col-md-4 col-12">
                <section class="img"><?= returnHtmlImg("geral", $integrante["imagem"]); ?></section>
            </div>

            <div class ="col-lg-10 col-md-8 col-12">
                <ul class="border-line-top">        
                    <li><strong>Funções:</strong> <?= $integrante["funcoes"]; ?></li>
                    <li>
                        <strong>Áreas responsável:</strong> 
                        <?php foreach ($integrante["links"] as $link) { ?>
                        <a href="index.php?page=<?= $link["page"]; ?>" title="<?= $link["title"] ?>"><?= $link["nome"]; ?></a> <?= $link["descricao"] ?? ""; ?>
                        <?php } ?>
                    </li>
                    <li><strong>Nome:</strong> <?= $integrante["nome"]." ".$integrante["sobre_nome"]; ?></li>
                    <li><strong>RA:</strong> <?= $integrante["ra"]; ?></li>
                    <li><strong>Mini biografia:</strong> <?= substr($integrante["bibliografia"], 0, 144); ?></li>
                </ul>
            </div>
                
    </div>
    <?php } ?>
</article>
