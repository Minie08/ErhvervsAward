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

<main id="logo-gallery" class="logo-gallery container">
    <div class="sponsorer">
        <h2 class="fw-bold mb-3">Alle sponsorer</h2>
        <p class="text-muted mb-5">
        Find vores sponsorer og se, hvem der bakker op hos ErhvervsAward gennem deres sponsorater.
        Vi takker de engagerede virksomheder og organisationer, der med deres bidrag muliggør, at
        den offentlige stolthed kan løfte og anerkende de lokale erhvervsfolk.
        Denne støtte er uvurderlig, og vi sætter stor pris på deres opbakning. Nedenfor kan du se
            hvilke virksomheder der sponsorerer og med hvad. Vil du gerne være en del af vores sponsorer?
            Så kontakt os gerne <a href="kontakt-os.php">her</a>
        </p>
    </div>

    <div class="row gap-2 justify-content-center mb-5">

        <article class="col-6 col-md-4 col-lg-2"> <!-- added offset to move it right -->
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Beierholm%20Logo.png" alt="Beierholm logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/BusinessSlagelse%20Logo.png" alt="Business Slagelse logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Envafors%20Logo.png" alt="Envafors logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/KorsørErhvervsforening%20Logo.png" alt="Korsør Erhvervsforening logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Skel%20Logo.png" alt="Skeldk Landinspektører logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/SkælskørErhvervs%20Logo.png" alt="Skælskør Erhvervs logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Slagelseråd%20Logo.png" alt="Slagelseråd logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Sydbank%20Logo.png" alt="Sydbank logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Zealand%20Logo.png" alt="Zealand logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </figcaption>
            </figure>
        </article>

    </div>
</main>

<?php
include("includes/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>