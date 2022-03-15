        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"><span class="sr-only">Navigation raccourcie</span>☰ </button>
            <a class="navbar-brand" href="#">Clément LOZE</a>
            <div id="navbar" class="flex-column navbar-collapse collapse">
                <ul class = "nav navbar-nav">
                    <li class="nav-item <?php if($page===0) { ?>active <?php } ?>">
                        <a href="<?php __DIR__?>/" class="nav-link">
                            <span class ="fa fa-home"></span> Accueil
                        </a>
                    </li>
                    <li class ="nav-item <?php if($page===1) { ?>active <?php } ?>">
                        <a href="../../pages/C_cv.php" class="nav-link">
                            <span class ="fa fa-id-badge"></span> CV
                        </a>
                    </li>
                    <li class="dropdown nav-item <?php if($page===2) { ?>active <?php } ?>">
                        <a href ="#" class  = "dropdown-toggle nav-link" data-toggle="dropdown" role ="button">
                            <span class = "fa fa-list-alt"></span> Réalisations <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation" class="dropdown-header dropdown-item disabled"> En classe </li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="../../pages/C_nolark.php"> TP Nolark </a>
                            </li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="../../pages/C_portfolio.php"> Portfolio </a>
                            </li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="../../pages/C_choco.php"> TP Chocolate'in </a>
                            </li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="../../pages/C_ptitmvc.php"> TP MonPetitMVC </a>
                            </li>
                            <li role="presentation" class="dropdown-item disabled">
                                <a role="menuitem" href="../../pages/C_seeulater.php"> Projet 1 : GSB </a>
                            </li>
                            <li role="presentation" class="dropdown-divider"></li>
                            <li role="presentation" class="dropdown-header dropdown-item disabled">
                                Stages</li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="../../pages/C_stage_1ere_annee.php">Stage de 1<sup>ère</sup> année</a>
                            </li>
                            <li role="presentation" class="dropdown-item disabled">
                                <a role="menuitem" href="../../pages/C_seeulater.php">Stage de 2<sup>ème</sup> année</a>
                            </li>
                            <li role="presentation" class="dropdown-divider"></li>
                            <li role="presentation" class="dropdown-header dropdown-item disabled"> En autonomie </li>
                            <li role="presentation" class="dropdown-item">
                                <a role="menuitem" href="../../pages/C_portfolio-php.php">Portfolio en PHP</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item <?php if($page===3) { ?>active <?php } ?>">
                        <a href="../../pages/C_veille.php" class="nav-link">
                            <span class ="fa fa-gears"></span> Veille technologique
                        </a>
                    </li>
                    <li class="nav-item <?php if($page===6) { ?>active <?php } ?>">
                        <a href="../../pages/C_patrimoine.php" class="nav-link">
                            <span class ="fa fa-laptop"></span> Gestion patrimoine
                        </a>
                    </li>
                    <li class="nav-item <?php if($page===4) { ?>active <?php } ?>">
                        <a class="nav-link" href="../../pages/C_Presentation_epreuve_E4.php"><span class ="fa fa-info-circle"></span> Présentation épreuve E4</a>
                    </li>
                    <li class ="nav-item <?php if($page===5) { ?>active <?php } ?>">
                        <a href="../../pages/C_contact.php" class="nav-link"><span class="fa fa-envelope"></span>
                            Me contacter
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
<?php if($page !==1){ ?><div class="mt-5"> <?php } ?>