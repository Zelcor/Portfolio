        <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                    <span class="sr-only">Navigation raccourcie</span>☰
                </button>
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
                                <li role="presentation" class="dropdown-header dropdown-item"> En autonomie </li>
                                 <li role="presentation" class="dropdown-item">
                                    <a role="menuitem" href="../../pages/C_portfolio.php">Portfolio</a>
                                 </li>
                                <li role="presentation" class="dropdown-divider"></li>
                                <li role="presentation" class="dropdown-header dropdown-item"> En classe </li>
                                 <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php"> Projet Nolark </a>
                                 </li>
                                <li role="presentation" class="dropdown-divider"></li>
                                <li role="presentation" class="dropdown-header dropdown-item">
                                    Stages</li>
                                <li role="presentation" class="dropdown-item">
                                    <a role="menuitem" href="../../pages/C_stage_1ere_annee.php">Stage de 1<sup>ère</sup> année</a>
                                </li>
                                <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php">Stage de 2<sup>ème</sup> année</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if($page===3) { ?>active <?php } ?>">
                            <a href="../../pages/C_veille.php" class="nav-link">
                                <span class ="fa fa-gears"></span> Veille technologique
                            </a>
                        </li>
                        <li class="dropdown nav-item <?php if($page===4) { ?>active <?php } ?>">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button">
                                <span class="fa fa-graduation-cap"></span> Jury E4 BTS SIO
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header dropdown-item" role="presentation"> Documentations contexte </li>
                                <li role="presentation" class="dropdown-item">
                                    <a role="menuitem" href="../../pages/C_Presentation_epreuve_E4.php">Présentation</a>
                                </li>
                                <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php">Application</a>
                                </li>
                                <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php">Missions à réaliser</a>
                                </li>
                                <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php">Annexes</a>
                                </li>
                                <li role="presentation" class="dropdown-divider"></li>
                                <li role="presentation" class="dropdown-header dropdown-item"> Fiches d'examen </li>
                                <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php">Situation professionnelle n°1</a>
                                </li>
                                <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php">Situation professionnelle n°2</a>
                                </li>
                                <li role="presentation" class="dropdown-divider"></li>
                                <li role="presentation" class="dropdown-header dropdown-item"> Démonstrations </li>
                                <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php">Démo SP n°1</a>
                                </li>
                                <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php">Démo SP n°2</a>
                                </li>
                                <li role="presentation" class="dropdown-divider"></li>
                                <li role="presentation" class="dropdown-header dropdown-item"> Codes sources </li>
                                <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php">Sources SP n°1</a>
                                </li>
                                <li role="presentation" class="dropdown-item disabled">
                                    <a role="menuitem" href="../../pages/C_seeulater.php">Sources SP n°2</a>
                                </li>
                            </ul>
                        <li class ="nav-item <?php if($page===5) { ?>active <?php } ?>">
                            <a href="../../pages/C_contact.php" class="nav-link"><span class="fa fa-envelope"></span>
                                Me contacter
                            </a>
                        </li> 
                    </ul>
                </div>
        </nav>