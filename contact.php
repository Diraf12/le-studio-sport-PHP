<?php $title = "contact"; ?>
<?php require_once 'header.php'; ?> 
<img class="img-back " src="../images/visuel/header-contact.jpg" alt="#">
<?php require_once 'barnav.php'; ?>
<?php
ob_start();
session_start();
?>
    <div class="form contact">
        <div class="container">
            <div class="row mt-4 mb-4">
                <div class="col-md-3">
                    <h2 class="coordonnees mb-5">NOS COORDONNÉES</h2>
                    <p><strong>Studio Sport &amp; Coaching</strong><br>01 Allée Marie Politzer<br>64200 Biarritz</p>
                    <p><strong>Téléphone</strong><br>05 59 47 84 18</p>
                    <p><strong>Horaires</strong><br>Du lundi au vendredi<br>de 8h à 14h, de 16h à 21h<br>Leamedi<br>de
                        10h à 13h</p>
                    <p><strong>Email</strong><br>contact (at) lestudiobiarritz.com<br>ou via ce formulaire</p>
                </div>
                <div class="col-md-9">
                    <h2 class="coordonnees mb-5">FORMULAIRE DE CONTACT</h2>


                    <?php if (isset($_GET["add"]) && $_GET["add"] == 1): ?>
            <div class="alert alert-success">Formulaire envoyé avec success.</div>
            <?php header("refresh:2; url=index.php"); ?>
        <?php
elseif (isset($_GET["add"]) && $_GET["add"] == 0): ?>
            <div class="alert alert-danger">Formulaire non envoyé.</div>
        <?php
endif; ?>


                    <form action="form_contact.php" method="post" id="formContact">
                        <div class="row">
                            <div class="col-md-8" style="margin:10px 0">
                                <input type="text" name="nom" placeholder="VOTRE NOM" id="nom" class="form-control"
                                    value="">
                                <span id="error_name"></span>
                            </div>

                            <div class="col-md-4" style="margin:10px 0">
                                <input type="text" name="prenom" placeholder="VOTRE PRÉNOM" id="prenom"
                                    class="form-control " value="">
                                <span id="error_first_name"></span>
                            </div>

                            <div class="col-md-4" style="margin:10px 0">
                                <input type="text" name="telephone" placeholder="VOTRE TÉLÉPHONE" id="tel"
                                    class="form-control" value="">
                                <span id="error_tel"></span>
                            </div>

                            <div class="col-md-8" style="margin:10px 0">
                                <input type="email" name="email" placeholder="VOTRE EMAIL" id="email"
                                    class="form-control " value="">
                                <span id="error_e_mail"></span>
                            </div>

                            <div class="col-md-12" style="margin:10px 0">
                                <input type="text" name="subject" placeholder="SUJET" id="subject" class="form-control"
                                    value="">

                            </div>

                            <div class="col-md-12" style="margin:10px 0 30px 0">
                                <textarea cols="50" rows="5" name="message" placeholder="VOTRE MESSAGE" id="message"
                                    class="form-control "></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <input type="submit" name="envoyer" class="btn btn-env" value="ENVOYER">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- fin -->

    <!-- g-maps -->
    <div class="map bg-secondary">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11582.41246137468!2d-1.5406774!3d43.4688824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc114f378a7ebcc2!2sLe%20Studio!5e0!3m2!1sfr!2sfr!4v1658132842269!5m2!1sfr!2sfr"
            height="560" id="gmap_canvas" class="w-100 border-0">
        </iframe>
    </div>
    <!-- fin -->

    <?php require_once 'footer.php'; ?>