<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>ErhvervsAward</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <?php
    include("includes/font.php");
    ?>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include("includes/navbar.php");
?>

<header class="intro py-5">
    <div class="intro-container text-center text-md-start">
        <section class="intro-box text-white p-5">
            <h2 class="fw-bold mb-3">Om ErhvervsAward</h2>
            <p>
                Erhvervsaward startede i 2015, først som en del af Slagelse Kommunes måder at støtte op om og hylde det lokale erhvervsliv.
                Det blev taget godt imod, og i foråret 2022 er det kommunens engagement vi ønsker at stoppe, og i stedet drive
                erhvervsawarden privat og uafhængigt. Det skal ske på skuldrene af målet om at styrke og motivere små og store virksomheder.
                Siden vi fik Klaus på til at designe vores logo, har mange ønsket en bestemt grafisk identitet, hjemmeside mm. Eventet er nu
                100% sponsorfinansieret.
            </p>
        </section>
    </div>
</header>

<main class="team container py-5 mb-5">
    <div class="row justify-content-center g-5">

        <!-- Medlem 1 -->
        <article class="col-md-5 col-lg-4 member">
            <figure class="photo mx-auto">
                <img src="images/peter.jpg" alt="Peter Pedersen – Formand" class="img-fluid rounded-circle">
            </figure>
            <section class="info text-center text-md-start mt-4 pt-3">
                <h5 class="mb-3">Formand</h5>
                <p class="mb-1">Peter Pedersen</p>
                <p class="mb-1">
                    <a class="team-phone" href="tel:22566688">Tlf.: 22 56 66 88</a>
                </p>
                <p class="mb-0">
                    <a class="team-mail" href="mailto:pepe@erhvervsawards.dk">pepe@erhvervsawards.dk</a>
                </p>
            </section>
        </article>

        <!-- Medlem 2 -->
        <article class="col-md-5 col-lg-4 member">
            <figure class="photo mx-auto">
                <img src="images/lise.jpg" alt="Lise Andersen – Projektkoordinator" class="img-fluid rounded-circle">
            </figure>
            <section class="info text-center text-md-start mt-4 pt-3">
                <h5 class="mb-3">Projektkoordinator</h5>
                <p class="mb-1">Lise Andersen</p>
                <p class="mb-1">
                    <a class="team-phone" href="tel:23456789">Tlf.: 23 45 67 89</a>
                </p>
                <p class="mb-0">
                    <a class="team-mail" href="mailto:lise@erhvervsawards.dk">lise@erhvervsawards.dk</a>
                </p>
            </section>
        </article>

        <!-- Medlem 3 -->
        <article class="col-md-5 col-lg-4 member">
            <figure class="photo mx-auto">
                <img src="images/amir.jpg" alt="Amir Khan – Marketingansvarlig" class="img-fluid rounded-circle">
            </figure>
            <section class="info text-center text-md-start mt-4 pt-3">
                <h5 class="mb-3">Marketingansvarlig</h5>
                <p class="mb-1">Amir Khan</p>
                <p class="mb-1">
                    <a class="team-phone" href="tel:44556677">Tlf.: 44 55 66 77</a>
                </p>
                <p class="mb-0">
                    <a class="team-mail" href="mailto:amir@erhvervsawards.dk">amir@erhvervsawards.dk</a>
                </p>
            </section>
        </article>

        <!-- Medlem 4 -->
        <article class="col-md-5 col-lg-4 member">
            <figure class="photo mx-auto">
                <img src="images/tulle.jpg" alt="Tulle A – Marketingansvarlig" class="img-fluid rounded-circle">
            </figure>
            <section class="info text-center text-md-start mt-4 pt-3">
                <h5 class="mb-3">Marketingansvarlig</h5>
                <p class="mb-1">Tulle A</p>
                <p class="mb-1">
                    <a class="team-phone" href="tel:44556677">Tlf.: 44 55 66 77</a>
                </p>
                <p class="mb-0">
                    <a class="team-mail" href="mailto:at@erhvervsawards.dk">tulle@erhvervsawards.dk</a>
                </p>
            </section>
        </article>

    </div>
</main>


<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>