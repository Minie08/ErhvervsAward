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
        <h2>Om os</h2>
        <p>
            ErhvervsAward startede i 2015, først som en del af Slagelse Kommunes måder at støtte
            op om og hylde det lokale erhvervsliv.
            <br>
            Der blev taget en politisk beslutning i 2024 om at
            kommunens engagement i eventet stoppede, og et miks af erhvervsforeninger overtog
            dernæst eventet.
            <br>
            Eventet er 100% sponsorfinansieret.
        </p>
    </section>
</main>

<?php
include ("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>