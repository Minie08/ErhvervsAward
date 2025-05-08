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

    <title>Sponsorerne</title>

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

<main class="container py-5 text-center">
    <h2 class="fw-bold mb-3 mt-5 text-center">Vores sponsorer</h2>
    <p class="text-muted mb-5" style="max-width: 600px; margin: 0 auto;">
        Find vores sponsorer og se, hvem der bakker op til ErhvervsAward gennem deres sponsorater.
        Vi takker de engagerede virksomheder og organisationer, der med deres bidrag muliggør, at
        den offentlige stolthed kan løfte og anerkende de lokale erhvervsfolk.
        Denne støtte er uvurderlig, og vi sætter stor pris på deres opbakning.
    </p>

    <div class="row justify-content-center align-items-center g-4">

        <div class="col-6 col-md-4">
            <img src="/pic/Beierholm%20Logo.png" alt="Beierholm logo" class="img-fluid sponsor-logo">
        </div>
        <div class="col-6 col-md-4">
            <img src="/pic/BusinessSlagelse%20Logo.png" alt="Business Slagelse logo" class="img-fluid sponsor-logo">
        </div>
        <div class="col-6 col-md-4">
            <img src="/pic/Envafors%20Logo.png" alt="Envafors logo" class="img-fluid sponsor-logo">
        </div>

        <div class="col-6 col-md-4">
            <img src="/pic/KorsørErhvervsforening%20Logo.png" alt="Korsør Erhvervsforening logo" class="img-fluid sponsor-logo">
        </div>
        <div class="col-6 col-md-4">
            <img src="/pic/Skel%20Logo.png" alt="Skeldk Landinspektører logo" class="img-fluid sponsor-logo">
        </div>
        <div class="col-6 col-md-4">
            <img src="/pic/SkælskørErhvervs%20Logo.png" alt="Skælskør Erhvervs logo" class="img-fluid sponsor-logo">
        </div>

        <div class="col-12 col-md-4">
            <img src="/pic/Slagelseråd%20Logo.png" alt="Slagelseråd logo" class="img-fluid sponsor-logo">
        </div>

        <div class="col-12 col-md-4">
            <img src="/pic/Sydbank%20Logo.png" alt="Sydbank logo" class="img-fluid sponsor-logo">
        </div>

        <div class="col-12 col-md-4">
            <img src="/pic/Zealand%20Logo.png" alt="Zealand logo" class="img-fluid sponsor-logo">
        </div>
    </div>
</main>

<?php
include("includes/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>