<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?= getTitleHead(); ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <?= getMetaShared(); ?>

        <!--font awesome-->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <link rel="stylesheet" href="css/tema-escuro.css">
        
        <link rel=icon href="midia/geral/logo.ico">
    </head>
    <body>
        <header class="topo border-line-bottom">
            <nav class="navbar navbar-expand-lg">
                <?php $infoGrupo = getInfoGrupo(); ?>
                <a class="navbar-brand" href="<?= "index.php?pagina=home"; ?>">
                    <img src="midia/geral/<?= $infoGrupo["logo"]; ?>" alt="Logo <?= $infoGrupo["nome_grupo"]; ?>" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars fa-lg"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="row container-navBarLogo">
                        <div class="col-6">
                            <a href="index.php?pagina=home">
                                <img src="midia/geral/<?= $infoGrupo["logo"]; ?>" alt="Logo <?= $infoGrupo["nome_grupo"]; ?>" class="logo d-block d-lg-none w-100">
                            </a>
                        </div>
                        <div class="col-6">
                            <button class="navbar-toggler float-right mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fas fa-bars fa-lg"></span>
                            </button>
                        </div>
                    </div>

                    <ul class="navbar-nav mr-auto">
                        <?php
                        $itensMenu = getValuesMenu();
                        foreach ($itensMenu as $indice => $item) {
                            $id = isset($item["id"]) ? "&id=".$item["id"] : "";
                            $isActiveBtn = $item["link"] == getActivBtnMenu();
                            if(!isset($item["subMenu"][0])) {
                        ?>
                                <li class="nav-item <?= $isActiveBtn ? "active" : ""; ?>">
                                    <a class="nav-link" href="<?= "index.php?pagina=".$item["link"].$id; ?>"> 
                                        <?= $item["nome"]; ?>
                                        <?= $item["link"] == getActivBtnMenu() ? ' <span class="sr-only">(current)</span>': ""; ?>
                                    </a>
                                </li>
                        <?php
                            } else {
                        ?>
                                <li class="nav-item dropdown <?= $isActiveBtn ? "active" : ""; ?>">
                                    <a id="navbarDropdown<?= $indice; ?>" class="nav-link dropdown-toggle" href="<?= "index.php?pagina=".$item["link"].$id; ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= $item["nome"]; ?>
                                        <?= $isActiveBtn ? ' <span class="sr-only">(current)</span>': ""; ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown<?= $indice; ?>">
                                        <?php 
                                        foreach ($item["subMenu"] as $subItem) { 
                                            $idSubMenu = isset($subItem["id"]) ? "&id=".$subItem["id"] : "";
                                            $id_page = $_GET["id"] ?? false;
                                            $idSubItem = $subItem["id"] ?? false;
                                            if ((!in_array(false, [$id_page, $idSubItem]) && ($id_page === $idSubItem))
                                                 or $subItem["link"] == getActivBtnSubMenu()) {
                                                $isActiveSubMenu = true;
                                            } else {
                                                $isActiveSubMenu = false;
                                            }
                                        ?>
                                        <a class="dropdown-item <?= $isActiveBtn && $isActiveSubMenu ? "active" : ""; ?>" href="<?= "index.php?pagina=".$subItem["link"].$idSubMenu; ?>">
                                            <?= $subItem["nome"]; ?>
                                            <?= $isActiveBtn && $isActiveSubMenu ? ' <span class="sr-only">(current)</span>': ""; ?>
                                        </a>
                                        <?php } ?>
                                    </div>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </header>
        
        <hr class="hrDanca">