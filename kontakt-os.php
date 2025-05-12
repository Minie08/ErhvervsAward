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

<!--Kontakt os-->

<main class="container-fluid contact col-md-12 py-5 text-center text-md-start">
    <h2 class="fw-bold mb-3">Kontakt os</h2>
    <article>
        <p class="text-muted">
            Træffetidspunkter: <br>
            Mandag – Fredag kl. 10.00 - 14.00 <br>
            Lørdag, søndag og helligdage holder vi lukket
            <br>
        </p>

        <p class="text-muted">
            Tlf: <a href="tel:+4551262299">+45 51 26 22 99</a>
            <br>
            Mail: <a href="email:hsm@event-slagelse.dk">hsm@event-slagelse.dk</a>
        </p>

        <p class="text-muted mb-5">
            Har du spørgsmål til arrangementet? <br>
            Du er altid velkommen til at ringe til os, og vi bestræber os på at besvare e-mails hurtigst muligt. <br>
            Du kan også udfylde kontaktformularen herunder – så vender vi tilbage snarest.
        </p>

        <!--Email formular-->
        <form class="contactform" action="action_page.php">
            <section class="row g-3 w-100">
                <div class="col-md-6">
                    <label for="fname" class="form-label">Fornavn</label>
                    <input type="text" class="form-control" id="fname" name="firstname" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form-label">Efternavn</label>
                    <input type="text" class="form-control" id="lname" name="lastname" placeholder="">
                </div>
            </section>

            <section class="row g-3 w-100 mt-2">
                <div class="col-12">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                </div>
            </section>

            <section class="row g-3 w-100 mt-2">
                <div class="col-12">
                    <label for="subject" class="form-label">Besked</label>
                    <textarea class="form-control" id="subject" name="subject" placeholder="Skriv din besked her..." style="height: 100px;" required></textarea>
                </div>
            </section>

            <section class="row g-3 w-100 mt-2">
                <div class="col-12">
                    <button class="btn btn-cta2 w-100" type="submit">Send</button>
                </div>
            </section>
        </form>
    </article>
</main>

<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>