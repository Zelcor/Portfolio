<div class="jumbotron" id="jumbotron">
    <div class="row center">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading "><u>Projet 1 : Galaxy Swiss Bourdin</u></h1>
                <img class="image-responsive" src="https://i.imgur.com/qdkr3AY.jpg" alt="logo gsb">
                <p class="lead">
                    Les technologies utilisées lors de ce projet furent : <strong>PHP 7</strong>, <strong>IDE NetBeans</strong>, <strong>MySQL</strong>
                </p>
                <h2 class="jumbotron-heading">Contexte du projet : </h2>
                <p class="lead text-justify">
                    Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain <strong>Galaxy</strong> (spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat européen
                    <strong>Swiss Bourdin</strong> (travaillant sur des médicaments plus conventionnels), lui-même déjà union de trois petits laboratoires.
                    Après deux années de réorganisations internes, tant au niveau du personnel que du fonctionnement administratif, l'entreprise <strong>GSB souhaite moderniser</strong> l'activité de visite médicale.
                    Une <strong>gestion</strong> unique de ces <strong>frais</strong> et le <strong>remboursement</strong> pour l'ensemble des visites est souhaitée.
                </p>
                <div class="text-left">
                    <h3 class="jumbotron-heading text-left colapse multi-collapse" data-toggle="collapse" data-target="#generation_pdf" aria-controls="generation_pdf" aria-expanded="true">Tâche 1 : Génération d'un pdf</h3>
                    <hr>
                    <div class="collapse multi-collapse mb-4 show" id="generation_pdf">
                        <div class="lead text-justify">
                            J'ai eu du mal à déterminer la meilleure librairie, mon professeur m'ayant recommandé <a class="text-danger" href="http://www.fpdf.org/" target="_blank">FPDF</a>. Je l'ai essayé et abandonnée parce que j'ai rencontré de difficultés avec l'encodage. <br>
                            J'ai donc utilisé <a class="text-primary" href="https://www.html2pdf.fr/" target="_blank">HTML2PDF</a> car elle me paraissait plus simple. Celle-ci m'a tout de même posé problème avec l'utilisation de bootstrap qui n'est pas prise en compte. <br>
                            J'ai donc décidé de trouver une alternative de <a class="text-danger" href="http://www.fpdf.org/" target="_blank">FPDF</a>, il se trouve qu'il y a beaucoup de librairies qui améliorent <a class="text-danger" href="http://www.fpdf.org/" target="_blank">FPDF</a>.
                            J'ai donc essayé <a class="text-info" href="http://www.fpdf.org/en/script/script92.php" target="_blank">TFPDF</a>.<br>
                            Au final j'ai choisi <a class="text-success" href="https://tcpdf.org/" target="_blank">TCPDF</a> qui est une version améliorée de <a class="text-info" href="http://www.fpdf.org/en/script/script92.php" target="_blank">TFPDF</a>, elle gère notamment l'encodage UTF-8.
                            <br>
                            <br>
                            <div class="col-md-auto">
                                <div class="card bg-light mb-4 shadow">
                                    <h5 class="card-header text-center"> Avec l'aide de la documentation j'en suis donc arrivé à ce résultat (version finale) :</h5>
                                    <div class="card-body center">
                                        <embed src="../image/documents/REMBOURSEMENT_FRAIS_202111-Villechalane.pdf" width=800 height=500 type='application/pdf'/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="card bg-light mb-4 shadow">
                                    <h5 class="card-header text-center">J'ai donc mis un bouton permettant de générer le pdf seulement si la fiche est validée.<br>En effet, il y a la signature du comptable.</h5>
                                    <div class="card-body">
                                        <img class="card-img-top" src="../image/gsb_interface_avant.png" alt="interface_pdf">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="jumbotron-heading text-left colapse multi-collapse" data-toggle="collapse" data-target="#eco_dans_appli" aria-controls="eco_dans_appli" aria-expanded="true">Tâche 2 : Davantage d'écologie et renforcement de la sécurité lors de la génération du pdf</h3>
                    <hr>
                    <div class="collapse multi-collapse show" id="eco_dans_appli">
                        <div class="lead text-justify">
                            La fiche de remboursement de frais est stockée dans un fichier <strong>généré automatiquement</strong> lors de la génération du premier PDF. <br>
                            Ce dossier est stocké dans les vues et s'appelle "files".
                            <div class="col-md-auto">
                                <div class="card bg-light mb-4 shadow">
                                    <h5 class="card-header text-center">Fonctionnement dans les fichiers de l'application</h5>
                                    <div class="card-body">
                                        <img class="card-img-top" src="../image/emplacement_pdf_genere.png" alt="emplacement pdf généré">
                                    </div>
                                </div>
                            </div>
                            Par la suite j'ai réalisé divers tests. J'ai vérifié que <strong>l'utilisateur final</strong> générant la fiche de remboursement y soit bien <strong>autorisé</strong>.
                            <div class="col-md-auto">
                                <div class="card bg-light mb-4 shadow">
                                    <h5 class="card-header text-center">Tests pour davantage de sécurité et si le pdf n'est pas déjà existant</h5>
                                    <div class="card-body">
                                        <img class="card-img-top" src="../image/tests_pour_la_securitee_dans_l'application.png" alt="tests pour plus de sécuritée">
                                    </div>
                                </div>
                            </div>
                            Une fois les données injectés dans la librairie (<a class="text-success" href="https://tcpdf.org/" target="_blank">TCPDF</a>), elle se charge de générer le pdf.
                            <div class="col-md-auto">
                                <div class="card bg-light mb-4 shadow">
                                    <h5 class="card-header text-center">Génération du pdf et création du répertoire si c'est le premier pdf généré</h5>
                                    <div class="card-body" data-toggle="collapse" data-target="#auto-formation" aria-controls="auto-formation" aria-expanded="true">
                                        <img class="card-img-top" src="../image/generation_du_pdf.png" alt="emplacement pdf généré">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="jumbotron-heading text-left colapse multi-collapse" data-toggle="collapse" data-target="#doc_technique_pdf" aria-controls="doc_technique_pdf" aria-expanded="true">Tâche 3 : Documentation utilisateur</h3>
                    <hr>
                    <div class="collapse multi-collapse show" id="doc_technique_pdf">
                        <div class="lead text-justify">
                            <div class="col-md-6 center">
                                <div class="card bg-light mb-4 shadow">
                                    <h5 class="card-header text-center">Documentation utilisateur pour se connecter</h5>
                                    <div class="card-body">
                                        <img class="card-img-top" src="../image/doc_gsb_1.png" alt="documentation authentification GSB">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lead text-justify">
                            <div class="col-md-auto">
                                <div class="card bg-light mb-4 shadow">
                                    <h5 class="card-header text-center">Documentation utilisateur pour générer le PDF</h5>
                                    <div class="card-body">
                                        <img class="card-img-top" src="../image/doc_gsb_2.png" alt="documentation génération PDF">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="jumbotron-heading">Conclusion : </h2>
                <div class="lead text-justify">
                    Ce projet m'a permis de progresser en PHP. La génération du PDF étant complexe, cependant avec le soutien et le travail d'équipe j'ai réussi. Je suis personnellement fier de mon PDF. Je ressors grandi de ce projet.
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <a role="button" class="btn btn-primary" href="../pages/C_ptitmvc.php">↢ TP : MonPetitMVC</a>
                    <a role="button" class="btn btn-primary" href="#">Projet 2 : MDL (bientôt) ↣</a>
                </div>
            </div>
        </section>
    </div>
</div>