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
<main class="container-fluid contact col-md-12">
    <h2>Nominering</h2>
    <article>
        <p>Mandag - Fredag kl. 10.00 - 14.00
            Hvem vil du nominere? Udfyld formularen her og indsend din nominering.
            <br>
            Læs kategorierne <a href="priser.php">her</a>, og nominer din vinder.
            <br>
            Indstil din kandidat senest den 1. september 2025
            <br>
            Efter nomineringerne vil en dommerkomite se alle indstillingerne igennem inden en vinder findes.
            <br>
            Vinderne vil annonceres på arrangementet den 7. november 2025
        </p>
        <!--Email formular-->
        <form class="contactform" action="action_page.php">
            <section class="row g-3 w-100">
                <div class="col-md-6">
                    <label for="fname">Dit navn</label>
                    <input type="text" class="form-control" id="fname" name="firstname" placeholder="Dit navn">
                </div>
                <div class="col-md-6">
                    <label for="email">Din email</label>
                    <input type="email" class="form-control" id="floatingInput" placeholder="Din email" required>
                </div>
                <label for="floatingInput">Nominerets navn</label>
                <input type="text" class="form-control" id="floatingInput" placeholder="Navn" required>
            </section>
            <section class="row g-3 w-100">
                <label for="pris">Pris nominering</label>
                <select class="form-select" id="pris" aria-label="vælg pris nominering" required>
                    <option selected>Vælg pris nominering</option>
                    <option value="1">Frontløberprisen</option>
                    <option value="2">Grangia</option>
                    <option value="3">Initiativprisen</option>
                    <option value="4">Iværksætterprisen</option>
                    <option value="5">Klima- og miljøprisen</option>
                    <option value="6">Praktikprisen</option>
                    <option value="7">Årets leder</option>
                </select>
            </section>
            <section class="row g-3 w-100">
                <label for="subject">Hvorfor er de nomineret?</label>
                <textarea class="form-control" id="subject" name="subject" placeholder="Hvorfor er de nomineret?"
                          style="height:100px" required></textarea>
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
    </html><?php
