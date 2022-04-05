<div class="jumbotron" id="jumbotron">
    <div class="row center">
        <section class="jumbotron text-justify">
            <div class="container">
                <h1 class="jumbotron-heading text-center"><u>Stage de 2nde année</u></h1>
                <img class="image-responsive center" src="../image/DIRISI.png" alt="logo dirisi">
                <p class="lead text-center">
                    Les technologies utilisées lors de ce stage furent : <strong>Angular</strong>, <strong>node.js</strong>, <strong>PostgreSQL</strong>
                </p>
                <div class="row d-flex justify-content-around">
                    <div class="col-4">
                        <h3 class="jumbotron-heading text-justify">L'équipe du projet : </h3>
                        <p class="lead text-justify ml-4">
                            - Les développeurs la DIRISI <br>
                            - <a href="https://ilanwanounou.fr/">Ilan WANOUNOU</a><br>
                            - Clément LOZE (moi)
                        </p>
                    </div>
                    <div class="col-4">
                        <h3 class="jumbotron-heading text-justify">Configuration pour ce projet : </h3>
                        <p class="lead text-justify ml-4">
                            - <a class="text-primary">IDE</a> : Webstorm<br>
                            - <a class="text-primary">Versionning</a> : Gitlab et Gitkraken<br>
                            - <a class="text-primary">SGBD</a> : PostgreSQL<br>
                            - <a class="text-primary">Angular</a> : 11.2<br>
                            - <a class="text-primary">Node.JS</a> : 14
                        </p>
                    </div>
                </div>
                <h3 class="jumbotron-heading">Présentation de ce stage :</h3>
                <hr>
                <p class="lead">
                    Ce second stage s’est également déroulé au pôle développement du fort Lamalgue de la <strong>DIRISI</strong>.
                    A mon arrivée, 2 développeurs et un alternant s’étaient rajoutés à l’équipe, il n’y a pas eu de départ. L’équipe était donc composée de 10 personnes.
                </p>
                <p class="lead">
                    Après m’être re-familiarisé avec les technologies utilisées : <strong>Angular</strong> et <strong>Node.JS</strong>, nous avons pu observer les changements drastiques appliqués au projet depuis notre départ.
                </p>
                <h5>Première tâche</h5>
                <p class="lead">
                    Étant la première mission qui me fut donnée, en apparence guère complexe.
                    Il fallait faire un outil de conversion entre 2 unités : les <a href="https://www.asn.fr/lexique/M/Millisievert" target="_blank">mSv</a> et les <a href="https://www.cordial.fr/dictionnaire/definition/millirem.php" target="_blank">mRem</a> (unités utilisées pour donner une évaluation de l'impact des rayonnements ionisants sur l'homme).
                    J’ai donc utilisé le local storage afin que mes variables aient une portée sur toute l’application.
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-light mb-4 shadow">
                            <h5 class="card-header text-center">Aperçu de la fonctionnalité</h5>
                            <div class="card-body">
                                <img class="card-img-top" src="../image/conversion_msv-mrem.png" alt="ecran tache conversion unités">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-light mb-4 shadow">
                            <h5 class="card-header text-center">Utilisation du local storage</h5>
                            <div class="card-body">
                                <img class="card-img-top" src="../image/local_storage_exemple.png" alt="image local storage">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-light mb-4 shadow">
                    <h5 class="card-header text-center">Pull request de la fonctionnalité</h5>
                    <div class="card-body">
                        <img class="card-img-top" src="../image/PR_mrem-msv.png" alt="pull request tache conversion unités">
                    </div>
                </div>
                <h5>Seconde tâche</h5>
                <p class="lead">
                    Ensuite, j’ai créé un script permettant la génération d’un fichier JSON dynamique (jeu d’essai) afin de remplir un tableau.
                </p>
                <div class="card bg-light mb-4 shadow">
                    <h5 class="card-header text-center">Le script en question</h5>
                    <div class="card-body">
                        <img class="card-img-top" src="../image/script_generateur_de_fichier_JSON.png" alt="script js pour jeu d'essai">
                    </div>
                </div>
                <h5>Troisième tâche</h5>
                <p class="lead">
                    Enfin j’ai dû en partant d’un existant persister une observation dans le back. Et faire une refonte graphique de la page l’accompagnent (observation), depuis une fenêtre fonctionnelle.
                </p>
                <div class="card bg-light mb-4 shadow">
                    <h5 class="card-header text-center">Résultat final</h5>
                    <div class="card-body text-right">
                        1 - Ce message s'envoie lorsque l'observation s'affiche sur l'écran actuel <br> 2 - Ce message s'envoie pour confirmer que l'observation est stockée dans la base de donnée
                        <img class="card-img-top" src="../image/dernière_tache.png" alt="script js pour jeu d'essai">
                    </div>
                </div>
                <h3 class="jumbotron-heading">Conclusion sur ce stage : </h3>
                <hr>
                <p class="lead">
                    Ce stage m’a permis d'approfondir mes connaissances du monde de l’entreprise, de plus il m’a apporté des connaissances en Node.js et Angular, deux technologies recherchées par les employeurs.
                    Je souhaiterai approfondir mes connaissances dans ses technologies ou bien en découvrir d’autres au cours de ma poursuite d’étude.
                </p>
                <div class="d-flex justify-content-between">
                    <a role="button" class="btn btn-primary" href="../pages/C_stage_1ere_annee.php">↢ Stage 1<sup>ère</sup> année</a>
                    <a role="button" class="btn btn-primary" href="../pages/C_portfolio-php.php">Projet Personnel 1 : Portfolio en PHP ↣</a>
                </div>
            </div>
        </section>
    </div>
</div>