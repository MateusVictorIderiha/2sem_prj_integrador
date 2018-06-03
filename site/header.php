<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?= getTitleHead(); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body>
        <header class="topo border-line-bottom">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <?php $infoGrupo = getInfoGrupo(); ?>
                <a class="navbar-brand" href="<?= "index.php?pagina=home"; ?>">
                    <img src="midia/geral/<?= $infoGrupo["logo"]; ?>" alt="Logo <?= $infoGrupo["nome_grupo"]; ?>" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars fa-lg"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="text-center">
                        <img src="midia/geral/<?= $infoGrupo["logo"]; ?>" alt="Logo <?= $infoGrupo["nome_grupo"]; ?>" class="logo d-block d-lg-none">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars fa-lg"></span>
                        </button>
                    </div>

                    <ul class="navbar-nav mr-auto">
                        <?php
                        $itensMenu = getValuesMenu();
                        foreach ($itensMenu as $item) {
                            if(!isset($item["subMenu"][0])) {
                        ?>
                                <li class="nav-item <?= $item["link"] == getActivBtnMenu() ? "active" : ""; ?>">
                                    <a class="nav-link" href="<?= "index.php?pagina=".$item["link"]; ?>"> <?= $item["nome"]; ?></a>
                                    <?= $item["link"] == getActivBtnMenu() ? ' <span class="sr-only">(current)</span></a>': ""; ?>
                                </li>
                        <?php
                            } else {
                        ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= $item["nome"]; ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach ($item["subMenu"] as $subItem) { ?>
                                        <a class="dropdown-item" href="<?= "index.php?pagina=".$subItem["link"]; ?>"><?= $subItem["nome"]; ?></a>
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
