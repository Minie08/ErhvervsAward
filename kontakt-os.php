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

<main class="container-fluid contact col-md-12">
    <h2>Kontakt os</h2>
    <article>
        <p>Mandag - Fredag kl. 10.00 - 14.00
            <br>
            Lørdag, søndag og helligdage holder vi lukket
            <br>
            Tlf: <a href="tel:+4551262299">+45 51 26 22 99</a>
            <br>
            Mail: <a href="email:hsm@event-slagelse.dk">hsm@event-slagelse.dk</a>
            <br><br>
            Har du spørgsmål til eventet sidder vi altid klar på telefonen og svarer på mails indenfor kort tid.
            <br>
            Du kan også altid kontakte os ved at udfylde nedenstående formular.
            <br>
        </p>
        <!--Email formular-->
        <form class="contactform" action="action_page.php">
            <section class="row g-3 w-100">
                <div class="col-md-6">
                    <label for="fname">Fornavn:</label>
                    <input type="text" class="form-control" id="fname" name="firstname" placeholder="Fornavn...">
                </div>
                <div class="col-md-6">
                    <label for="lname">Efternavn:</label>
                    <input type="text" class="form-control" id="lname" name="lastname" placeholder="Efternavn...">
                </div>
            </section>
            <section class="row g-3 w-100">
            <label for="email">Email adresse:</label>
            <input type="email" class="form-control" id="floatingInput" placeholder="navn@eksempel.dk" required>
            </section>
            <section class="row g-3 w-100">
            <label for="subject">Besked</label>
            <textarea class="form-control" id="subject" name="subject" placeholder="Skriv besked her..."
                      style="height:100px"></textarea>
                <button class="form-control btn-cta2 btn-cta2hover" type="submit">Send</button>
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