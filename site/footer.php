<?php
$infoGrupo = getInfoGrupo();

$integrantes = [];
foreach ($infoGrupo["integrantes"] as $integrante) {
    $integrantes[] = "<a href='index.php?pagina=quem_somos#".formatName($integrante["nome"])
            ."' title='Integrante do grupo ".$infoGrupo["nome_grupo"]." com as funcões de: ".$integrante["funcoes"]."'>"
            .$integrante["nome"]."</a>";
}
?>

    <hr class="hrDanca">
        <footer class="rodape border-line-top pb-4">
            <div class="row ml-0 mr-0">
                <div class="col-12 col-lg-1">
                    <img class="simu_logo" src="midia/geral/<?= $infoGrupo["logo"]; ?>" alt="Logo <?= $infoGrupo["nome_grupo"]; ?>" />
                </div>
                <nav class="col-10">
                    <div class="row">
                        <?php
                        $itensMenu = getValuesMenu();
                        foreach ($itensMenu as $item) {
                            $id = isset($item["id"]) ? "&id=".$item["id"] : "";
                            if(isset($item["subMenu"])) {
                        ?>
                        <ul class="col-2 d-none d-lg-block">
                            <li class="foot_li_title"> <a href="<?= "index.php?pagina=".$item["link"].$id; ?>"> <?= $item["nome"]; ?> </a></li>
                            <?php
                            foreach ($item["subMenu"] as $subItem) { 
                                $subItemId = isset($subItem["id"]) ? "&id=".$subItem["id"] : "";
                            ?>
                            <li class="foot_li"> <a href="<?= "index.php?pagina=".$subItem["link"].$subItemId; ?>"> <?= $subItem["nome"]; ?> </a></li>
                            <?php } ?>
                        </ul>
                        <?php
                             }
                        }
                        ?>
                    </div>
                </nav>
            </div>
            <div class="row ml-0 mr-0">
                <small class="direito col-12">Copyright <?= $infoGrupo["nome_grupo"].". ".implode(", ", $integrantes)."." ?></small>
            </div>
        </footer>

        <div id="filter-overlay"></div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="js/scripts.min.js"></script>
    </body>
</html>
