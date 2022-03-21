<div class="jumbotron" id="jumbotron">
    <div class="row center">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading "><u>Projet 1 : Galaxy Swiss Bourdin</u></h1>
                <img class="image-responsive" src="https://i.imgur.com/qdkr3AY.jpg" alt="logo gsb">
                <p class="lead">
                    Les technologies utilisées lors de ce projet furent : <strong>PHP 7</strong>, <strong>IDE NetBeans</strong>, <strong>MariaDB</strong>
                </p>
                <h2 class="jumbotron-heading">Contexte du projet : </h2>
                <p class="lead text-justify">
                    Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain <strong>Galaxy</strong> (spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat européen
                    <strong>Swiss Bourdin</strong> (travaillant sur des médicaments plus conventionnels), lui-même déjà union de trois petits laboratoires.
                    Après deux années de réorganisations internes, tant au niveau du personnel que du fonctionnement administratif, l'entreprise <strong>GSB souhaite moderniser</strong> l'activité de visite médicale.
                    Une <strong>gestion</strong> unique de ces <strong>frais</strong> et <strong>remboursement</strong> pour l'ensemble de la flotte visite est souhaitée.
                </p>
                <div class="text-left">
                    <h3 class="jumbotron-heading text-left colapse multi-collapse" data-toggle="collapse" data-target="#generation_pdf" aria-controls="generation_pdf" aria-expanded="true">Tâche 1 : Génération d'un pdf</h3>
                    <hr>
                    <div class="collapse multi-collapse mb-4 show" id="generation_pdf">
                        <div class="lead text-justify">
                            J'ai eu du mal a déterminer la meilleure librairie, mon professeur m'ayant recommandé <a class="text-danger" href="http://www.fpdf.org/">FPDF</a> je l'essaie mais l'abandonne parce que j'ai rencontré de difficultés avec l'encodage. <br>
                            J'ai donc essayé <a class="text-primary" href="https://www.html2pdf.fr/">HTML2PDF</a> car celui-ci me paraissais plus simple. Mais celui-ci m'a posé problème avec l'utilisation de bootstrap qui n'est pas prise en compte. <br>
                            J'ai donc décidé de trouver une alternative de <a class="text-danger" href="http://www.fpdf.org/">FPDF</a> et il se trouve qu'il y a moults librairies qui améliorent <a class="text-danger" href="http://www.fpdf.org/">FPDF</a>, j'ai donc tout d'abord essayé <a class="text-info" href="http://www.fpdf.org/en/script/script92.php">TFPDF</a>.<br>
                            Au final j'ai choisi <a class="text-success" href="https://tcpdf.org/">TCPDF</a> qui est une version améliorée de <a class="text-info" href="http://www.fpdf.org/en/script/script92.php">TFPDF</a> et qui gere notamment l'encodage utf-8.
                            <div class="col-md-auto">
                                <div class="card bg-light mb-4 shadow">
                                    <p class="card-header">Télécharger pdf si fiche validée et mise en paiement</p>
                                    <div class="card-body" data-toggle="collapse" data-target="#auto-formation" aria-controls="auto-formation" aria-expanded="true">
                                        <img class="card-img-top" src="../image/gsb_interface_avant.png" alt="interface_pdf">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="card bg-light mb-4 shadow">
                                    <p class="card-header">fiche générée de manière dynamique suite a la maquette du client</p>
                                    <div class="card-body center" data-toggle="collapse" data-target="#auto-formation" aria-controls="auto-formation" aria-expanded="true">
                                        <embed src="../image/documents/REMBOURSEMENT_FRAIS_202111-Villechalane.pdf" width=800 height=500 type='application/pdf'/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="jumbotron-heading text-left colapse multi-collapse" data-toggle="collapse" data-target="#eco_dans_appli" aria-controls="eco_dans_appli" aria-expanded="true">Tâche 2 : Davantage d'écologie dans l'application</h3>
                    <hr>
                    <div class="collapse multi-collapse show" id="eco_dans_appli">
                        <div class="lead text-justify">
                            blabla
                        </div>
                    </div>
                    <h3 class="jumbotron-heading text-left colapse multi-collapse" data-toggle="collapse" data-target="#doc_technique_pdf" aria-controls="doc_technique_pdf" aria-expanded="true">Tâche 3 : Documentation technique pour le PDF</h3>
                    <hr>
                    <div class="collapse multi-collapse show" id="doc_technique_pdf">
                        <div class="lead text-justify">blabla</div>
                    </div>
                </div>
                <h2 class="jumbotron-heading">Conclusion : </h2>
                <div class="lead text-justify">
                    texte de conclu
                </div>
                <div class="d-flex justify-content-between">
                    <a role="button" class="btn btn-primary" href="../pages/C_ptitmvc.php">↢ TP : MonPetitMVC</a>
                    <a role="button" class="btn btn-primary" href="#">Projet 2 : MDL ↣</a>
                </div>
            </div>
        </section>
    </div>
</div>