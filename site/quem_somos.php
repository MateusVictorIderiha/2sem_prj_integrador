<?php
$dadosGrupo = getInfoGrupo();
?>
<article class="container quem-somos">
    <h1 class="titulo text-center">Quem somos</h1>
    <div class="row oriart">
        <div class="col-sm-12">
            <figure class="text-center">
                <img src="midia/geral/logo.svg" alt="Logo do grupo <?= $dadosGrupo["nome_grupo"]; ?>" class="logo"/>
                <figcaption>
                    <?= $dadosGrupo["descricao_logo"]; ?>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-12">
            <p class="text-justify"><?= $dadosGrupo["descricao"]; ?></p>
        </div>
    </div>
    <?php foreach ($dadosGrupo["integrantes"] as $integrante) { ?>
    <div class="row integrante">
        <section class="col-lg-2 col-md-4 col-12 img mb-3 mb-sm-0 text-center">
            <?= returnHtmlImg("geral", $integrante["imagem"], "", "mw-100 rounded-circle"); ?>
        </section>
        <ul class="col-lg-10 col-md-8 col-12">
            <li><strong>Nome:</strong> <?= $integrante["nome"]." ".$integrante["sobre_nome"]; ?></li>
            <li><strong>RA:</strong> <?= $integrante["ra"]; ?></li>
            <li><strong>FunÃ§Ãµes:</strong> <?= $integrante["funcoes"]; ?></li>
            <li>
                <strong>Ã�reas responsÃ¡vel:</strong> 
                <?php
                foreach ($integrante["links"] as $link) { 
                    if (!empty($link["nome"])) {
                        $id = isset($link["id"]) ? "&id=".$link["id"] : "";
                ?>
                <a href="index.php?pagina=<?= $link["page"].$id; ?>" title="<?= $link["title"] ?>"><?= $link["nome"]; ?></a><?= end($integrante["links"]) != $link ? ", " : ""; ?>
                <?php 
                    } 
                } 
                ?>
            </li>
            <li><strong>Mini biografia:</strong> <?= substr($integrante["bibliografia"], 0, 144); ?></li>
        </ul>
    </div>
    <?php } ?>
</article>
