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
include ("includes/navbar.php");
?>

<!--Om os-->
<main class="container-fluid col-md-12">
    <section class="omos">
        <h2>Om ErhvervsAward</h2>
        <p>
            ErhvervsAward startede i 2015, først som en del af Slagelse Kommunes måder at støtte
            op om og hylde det lokale erhvervsliv.
        </p>
        <p>
            Der blev taget en politisk beslutning i 2024 om at
            kommunens engagement i eventet stoppede, og et miks af erhvervsforeninger overtog
            dernæst eventet.
        </p>
        <p>
            Eventet er 100% sponsorfinansieret.
        </p>
    </section>

    <section class="container-fluid row team-cards">
        <article class="card omoscard col-12 col-sm-6 col-md-4">
            <img src="pic/placeholder.png" class="card-img-top" alt="Billede af formand">
            <figcaption class="card-body">
                <h3 class="card-title">Formand</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                <a href="#" class="btn btn-cta2" aria-label="Læs mere om formandens rolle">Læs mere</a>
            </figcaption>
        </article>
        <article class="card omoscard col-12 col-sm-6 col-md-4">
            <img src="pic/placeholder.png" class="card-img-top" alt="Billede af formand">
            <figcaption class="card-body">
                <h3 class="card-title">Næstformand</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                <a href="#" class="btn btn-cta2" aria-label="Læs mere om næstformandens rolle">Læs mere</a>
            </figcaption>
        </article>
        <article class="card omoscard col-12 col-sm-6 col-md-4">
            <img src="pic/placeholder.png" class="card-img-top" alt="Billede af formand">
            <figcaption class="card-body">
                <h3 class="card-title">Kassér</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                <a href="#" class="btn btn-cta2" aria-label="Læs mere om kassérerens rolle">Læs mere</a>
            </figcaption>
        </article>
    </section>
</main>

<?php
include ("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>