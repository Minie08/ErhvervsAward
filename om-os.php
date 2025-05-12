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
            <h1>Hvem er vi?</h1>
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

<main class="team container py-5">
    <div class="container">
        <div class="row justify-content-center g-4">
            <article class="col-md-5 col-lg-4 position-relative member">
                <figure class="photo" aria-hidden="true"></figure>
                <section class="info text-center mt-5 pt-4">
                    <h2 class="h6">Formand</h2>
                    <p class="mb-1">Peter Pedersen</p>
                    <p class="mb-1">Tlf.: 22 56 66 88</p>
                    <a href="mailto:pepe@erhvervsawards.dk">pepe@erhvervsawards.dk</a>
                </section>
            </article>

            <article class="col-md-5 col-lg-4 position-relative member">
                <figure class="photo" aria-hidden="true"></figure>
                <section class="info text-center mt-5 pt-4">
                    <h2 class="h6">Formand</h2>
                    <p class="mb-1">Peter Pedersen</p>
                    <p class="mb-1">Tlf.: 22 56 66 88</p>
                    <a href="mailto:pepe@erhvervsawards.dk">pepe@erhvervsawards.dk</a>
                </section>
            </article>

            <article class="col-md-5 col-lg-4 position-relative member">
                <figure class="photo" aria-hidden="true"></figure>
                <section class="info text-center mt-5 pt-4">
                    <h2 class="h6">Formand</h2>
                    <p class="mb-1">Peter Pedersen</p>
                    <p class="mb-1">Tlf.: 22 56 66 88</p>
                    <a href="mailto:pepe@erhvervsawards.dk">pepe@erhvervsawards.dk</a>
                </section>
            </article>

            <article class="col-md-5 col-lg-4 position-relative member">
                <figure class="photo" aria-hidden="true"></figure>
                <section class="info text-center mt-5 pt-4">
                    <h2 class="h6">Formand</h2>
                    <p class="mb-1">Peter Pedersen</p>
                    <p class="mb-1">Tlf.: 22 56 66 88</p>
                    <a href="mailto:pepe@erhvervsawards.dk">pepe@erhvervsawards.dk</a>
                </section>
            </article>
        </div>
    </div>
</main>


<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>