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

    <meta name="description" content="Se alle sponsorer, der støtter ErhvervsAward i Slagelse. Vi takker vores partnere for deres værdifulde støtte til det lokale erhvervsliv.">
    <meta name="keywords" content="ErhvervsAward sponsorer, sponsorer Slagelse, erhvervssponsorater, virksomheder Slagelse, lokale sponsorer, erhvervssamarbejde, ErhvervsAward 2024, støtte lokale virksomheder">
    <meta name="robots" content="index, follow">
    <meta name="author" content="ErhvervsAward">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Sponsorerne - ErhvervsAward Slagelse">
    <meta property="og:description" content="ErhvervsAward takker de virksomheder og organisationer, der støtter det lokale erhvervsliv.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.erhvervsaward.dk/sponsorer.php">
    <meta property="og:image" content="https://www.erhvervsaward.dk/pic/billede.jpg">

    <link rel="canonical" href="https://www.erhvervsaward.dk/priser.php">

    <?php
    include("includes/font.php");
    ?>

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "ErhvervsAward Slagelse",
          "url": "https://www.ditdomæne.dk/sponsorer.php",
          "logo": "https://www.ditdomæne.dk/pic/logo.png",
          "description": "ErhvervsAward i Slagelse hylder og støtter lokale virksomheder gennem sponsorater og priser.",
          "sponsor": [
            {
              "@type": "Organization",
              "name": "Beierholm"
            },
            {
              "@type": "Organization",
              "name": "Business Slagelse"
            },
            {
              "@type": "Organization",
              "name": "Envafors"
            },
            {
              "@type": "Organization",
              "name": "Korsør Erhvervsforening"
            },
            {
              "@type": "Organization",
              "name": "Skel.dk"
            },
            {
              "@type": "Organization",
              "name": "Skælskør Erhvervs"
            },
            {
              "@type": "Organization",
              "name": "Slagelseråd"
            },
            {
              "@type": "Organization",
              "name": "Sydbank"
            },
            {
              "@type": "Organization",
              "name": "Zealand"
}
          ]
        }
    </script>
    </head>

    <body>
<?php
include("includes/navbar.php");
?>

<main id="logo-gallery" class="logo-gallery container">
    <div class="sponsorer text-center text-md-start">
        <h2 class="fw-bold mb-3">Alle sponsorer</h2>
        <p class="text-muted mb-5">
        Find vores sponsorer og se, hvem der bakker op hos ErhvervsAward gennem deres sponsorater.
        Vi takker de engagerede virksomheder og organisationer, der med deres bidrag muliggør, at
        den offentlige stolthed kan løfte og anerkende de lokale erhvervsfolk.
        Denne støtte er uvurderlig, og vi sætter stor pris på deres opbakning. Nedenfor kan du se
            hvilke virksomheder der sponsorerer og med hvad. Vil du gerne være en del af vores sponsorer?<br>
            Så kontakt os gerne <a href="kontakt-os.php">her</a>
        </p>
    </div>

    <div class="row gap-2 justify-content-center mb-5">

        <article class="col-6 col-md-4 col-lg-2"> <!-- added offset to move it right -->
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Beierholm%20Logo.png" alt="Beierholm logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text text-center text-md-start mt-3">
                    Uddeler Iværksætterprisen
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/BusinessSlagelse%20Logo.png" alt="Business Slagelse logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text text-center text-md-start">
                    Uddeler Frontløberprisen sammen med 5 andre virksomheder
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Envafors%20Logo.png" alt="Envafors logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text text-center text-md-start">
                    Uddeler Klima- og Miljøpris i samarbejde med Sydbank
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/KorsørErhvervsforening%20Logo.png" alt="Korsør Erhvervsforening logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text text-center text-md-start">
                    Uddeler Frontløberprisen sammen med 5 andre virksomheder
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Skel%20Logo.png" alt="Skeldk Landinspektører logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text text-center text-md-start">
                    Uddeler Årets Lederpris
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/SkælskørErhvervs%20Logo.png" alt="Skælskør Erhvervs logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text text-center text-md-start">
                    Uddeler Frontløberprisen sammen med 5 andre virksomheder</figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Slagelseråd%20Logo.png" alt="Slagelseråd logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text text-center text-md-start">
                    Uddeler initiativprisen
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Sydbank%20Logo.png" alt="Sydbank logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text text-center text-md-start">
                    Uddeler Klima- og Miljøpris i samarbejde med Envafors
                </figcaption>
            </figure>
        </article>

        <article class="col-6 col-md-4 col-lg-2">
            <figure class="sponsor-card">
                <div class="logo-wrapper">
                    <img src="/pic/Zealand%20Logo.png" alt="Zealand logo" class="img-fluid">
                </div>
                <figcaption class="sponsor-text text-center text-md-start">
                    Uddeler Praktikprisen, lægger rammer til, står for aftenens menu og servering for 450 gæster
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