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

<!--nomineringer-->
<main class="container-fluid contact pt-5 text-center text-md-start">
    <h2 class="fw-bold mb-3">Nominering</h2>
    <article>
        <p class="text-muted">
            Nominer en kandidat for 2025
        </p>

        <p class="text-muted">
            Udfyld formularen her og indsend din nominering.
            <br> Læs gerne kategorierne <a href="priser.php">her</a>, og nominer din kandidat.
        </p>

        <p class="text-muted">
            Efter nomineringerne vil en dommerkomité gennemgå alle indstillinger, inden en vinder udvælges.
        </p>

        <p class="text-muted">
            Vinderne vil blive annonceret til arrangementet den 7. november 2025
            <br> Indsend derfor din nominering senest den 1. september 2025
        </p>
    </article>

    <!--Email formular-->
    <form class="contactform" action="action_page.php">
        <section class="row g-3 w-100">
            <div class="col-md-6">
                <label for="fname">Dit navn</label>
                <input type="text" class="form-control" id="fname" name="firstname" placeholder="">
            </div>
            <div class="col-md-6">
                <label for="email">Din e-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="" required>
            </div>
        </section>

        <section class="row g-3 w-100 mt-2">
            <div class="col-12">
                <label for="nomineret">Kandidaten</label>
                <input type="text" class="form-control" id="nomineret" name="nomineret" required>
            </div>

            <div class="col-12">
                <label for="nomineret">Virksomhed</label>
                <input type="text" class="form-control" id="virksomhed" name="virksomhed" required>
            </div>

            <div class="col-12">
                <label for="pris">Nominering</label>
                <select class="form-select" id="pris" name="pris" required>
                    <option selected disabled>Vælg venligst nominerings pris</option>
                    <option value="1">Frontløberprisen</option>
                    <option value="2">Grangia</option>
                    <option value="3">Initiativprisen</option>
                    <option value="4">Iværksætterprisen</option>
                    <option value="5">Klima- og miljøprisen</option>
                    <option value="6">Praktikprisen</option>
                    <option value="7">Årets leder</option>
                </select>
            </div>
        </section>

        <section class="row g-3 w-100 mt-2">
            <div class="col-12">
                <label for="subject">Begrundelse for nomineringen</label>
                <textarea class="form-control" id="subject" name="subject" placeholder="Skriv din begrundelse her.." style="height:100px" required></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-cta2 w-100" type="submit">Send</button>
            </div>
        </section>
    </form>
</main>

<p class="text-muted mb-5 text-center">
    Har du spørgsmål vedrørende nomineringen? Så kan du kontakte os <a href="kontakt-os.php">her</a>.
</p>

<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
    </html><?php
