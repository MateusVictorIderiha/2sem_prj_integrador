<?php
$infoGrupo = getInfoGrupo();

$integrantes = [];
foreach ($infoGrupo["integrantes"] as $integrante) {
    $integrantes[] = "<a href='index.php?pagina=quem_somos#".formatName($integrante["nome"])
            ."' title='Integrante do grupo ".$infoGrupo["nome_grupo"]." com as funcões de: ".$integrante["funcoes"]."'>"
            .$integrante["nome"]."</a>";
}
?>
    <footer class="rodape border-line-top">
        <div class="row">
            <div class="col-12 col-lg-1">
                <img class="simu_logo" src="midia/geral/<?= $infoGrupo["logo"]; ?>" alt="Logo <?= $infoGrupo["nome_grupo"]; ?>" />
            </div>
            <nav class="col-10">
                <div class="row">
                    <?php
                    $itensMenu = getValuesMenu();
                    foreach ($itensMenu as $item) {
                         if(isset($item["subMenu"])) {
                    ?>
                    <ul class="col-2 d-none d-lg-block">
                        <li class="foot_li_title"> <a href="#"></a> <?= $item["nome"]; ?> </li>
                        <?php
                            foreach ($item["subMenu"] as $subItem) { 
                        ?>
                        <li class="foot_li"> <a href="#"></a><?= $subItem["nome"]; ?></li>
                        <?php } ?>
                    </ul>
                    <?php
                         }
                    }
                    ?>
                </div>
            </nav>
        </div>
        <div class="row">
            <h3 class="direito">Copyright <?= $infoGrupo["nome_grupo"].". ".implode(", ", $integrantes)."." ?></h3>
        </div>
    </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
