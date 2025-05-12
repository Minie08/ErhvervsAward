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
                ErhvervsAward blev grundlagt i 2015 som en del af Slagelse Kommunes indsats for at støtte og anerkende det lokale erhvervsliv.<br>
                I 2024 blev det besluttet, at kommunen ikke længere skulle spille en aktiv rolle i eventet, og ansvaret blev overdraget til en styregruppe.<br>
                Efter kommunens tilbagetrækning i 2023 blev der handlet hurtigt for at sikre, at eventet kunne fortsætte.<br>
                I dag er ErhvervsAward 100% sponsorfinansieret og fortsætter med at fejre og anerkende lokale erhvervslivets succeser.
            </p>
        </section>
    </div>
</header>

<main class="team container py-5 mb-5">
    <div class="team-row justify-content-center g-5">

        <!-- Medlem 1 -->
        <article class="col-md-5 col-lg-4 member">
            <figure class="photo mx-auto">
                <img src="pic/placeholder.png" alt="billede af medlem" class="img-fluid rounded-circle">
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
                <img src="pic/placeholder.png" alt="billede af medlem" class="img-fluid rounded-circle">
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
                <img src="pic/placeholder.png" alt="billede af medlem" class="img-fluid rounded-circle">
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
                <img src="pic/placeholder.png" alt="billede af medlem" class="img-fluid rounded-circle">
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