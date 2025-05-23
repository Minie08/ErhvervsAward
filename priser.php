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

    <title>Pris kategorier</title>

    <meta name="description" content="Udforsk de 7 pris-kategorier til ErhvervsAward, som hylder innovation, lederskab, miljø og iværksætteri i Slagelse.">
    <meta name="keywords" content="ErhvervsAward, priser, erhvervspriser, Slagelse erhverv, Frontløberprisen, Grangia Erhvervspris, Initiativprisen, Iværksætterprisen, Klima- og Miljøprisen, Praktikprisen, Årets leder, erhvervspris 2024, lokale virksomheder, erhvervsliv Slagelse">
    <meta name="robots" content="index, follow">
    <meta name="author" content="ErhvervsAward">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Pris kategorier – ErhvervsAward">
    <meta property="og:description" content="Se alle pris kategorier ved ErhvervsAward – her hyldes initiativ, iværksætteri, miljø, praktik og ledelse.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.erhvervsaward.dk/priser.php">
    <meta property="og:image" content="https://www.erhvervsaward.dk/pic/priser.jpg">


    <link rel="canonical" href="https://www.erhvervsaward.dk/priser.php">

    <?php
    include("includes/font.php");
    ?>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "Pris-kategorier",
            "url": "https://www.erhvervsaward.dk/priser.php",
            "description": "ErhvervsAward uddeler priser til virksomheder og personer i Slagelse, i samarbejde med sponsorerede virksomheder",
            "publisher": {
                "@type": "Organization",
                "name": "ErhvervsAward",
                "url": "https://www.erhvervsaward.dk",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://www.erhvervsaward.dk/pic/logo.png"
                }
            }
        }
    </script>

</head>

<body>
<?php
include("includes/navbar.php");
?>

<main>
    <div class="content-wrapper">
        <article class="row gx-2">
            <aside class="sidebar text-center col-2">
                <nav id="simple-list-example"
                     class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
                    <a class="p-1 rounded" href="#simple-list-item-1">Frontløberprisen</a>
                    <a class="p-1 rounded" href="#simple-list-item-2">Grangia Erhvervspris</a>
                    <a class="p-1 rounded" href="#simple-list-item-3">Initiativprisen</a>
                    <a class="p-1 rounded" href="#simple-list-item-4">Iværksætterprisen</a>
                    <a class="p-1 rounded" href="#simple-list-item-5">Klima- og Miljøprisen</a>
                    <a class="p-1 rounded" href="#simple-list-item-6">Praktikprisen</a>
                    <a class="p-1 rounded" href="#simple-list-item-7">Årets leder</a>
                </nav>
            </aside>
        </article>


        <article class="main-text">
            <section data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0"
                     data-bs-smooth-scroll="true" class="scrollspy-example prizeentry" tabindex="0">
                <section class="prizeitem" id="simple-list-item-1">
                    <section class="prize-text">
                        <h2>Frontløberprisen</h2>
                        <p>Frontløberprisen gives til en virksomhed eller en person i Slagelse Kommune,
                            som går forrest med det gode eksempel, skaber positivitet og udvikling omkring sig til
                            inspiration for andre og til gavn og glæde for kunderne.</p>
                    </section>
                    <img src="pic/prisbilleder/frontløberprisen.JPG" class="prizeimg lightbox-trigger"
                         alt="Vinderen af 'Frontløber prisvinder' 2024" data-photographer="Foto: Jens Hansen">
                </section>

                <section class="prizeitem" id="simple-list-item-2">
                    <section class="prize-text">
                        <h2 id="simple-list-item-2">Grangia Erhvervspris</h2>
                        <p>Grangia Erhvervspris hylder lokale talenter, under 40 år, der er særligt innovative og
                            gode
                            til
                            at
                            netværke. Prisen gives til personer der i særlig grad har markeret sig inden for sit
                            felt og
                            gør
                            en
                            positiv forskel for det lokale erhvervsliv, samt har placeret Slagelse på
                            landkortet.</p>
                    </section>
                    <img src="pic/prisbilleder/grangiapris.JPG" class="prizeimg lightbox-trigger"
                         alt="Vinderen af 'Grangia Erhvervsprisvinder' 2024" data-photographer="Foto: Jens Hansen">
                </section>

                <section class="prizeitem" id="simple-list-item-3">
                    <section class="prize-text">
                        <h2 id="simple-list-item-3">Initiativprisen</h2>
                        <p>Initiativprisen er en ganske særlig pris, som Slagelse Erhvervsråd uddeler til en
                            virksomhed
                            eller
                            person i Slagelse Kommune, som har vist initiativ og vilje til vækst og dermed gjort
                            noget
                            ekstraordinært for den lokale erhvervsudvikling. Prisen uddeles hvert år under
                            ErhvervsAwards,
                            en
                            stor event, som hylder det lokale erhvervsliv, og som foregår i november måned.
                        </p>
                    </section>
                    <img src="pic/prisbilleder/initiativpris.JPG" class="prizeimg lightbox-trigger"
                         alt="Vinderen af 'Initiativ prisvinder' 2024" data-photographer="Foto: Jens Hansen">
                </section>

                <section class="prizeitem" id="simple-list-item-4">
                    <section class="prize-text">
                        <h2 id="simple-list-item-4">Iværksætterprisen</h2>
                        <p>Iværksætteri handler om at starte og drive en ny virksomhed, om at udvise
                            risikovillighed, innovation og om at finde måder hvor behov identificeres og
                            imødekommes.</p>
                    </section>
                    <img src="pic/prisbilleder/iværksætterpris.JPG" class="prizeimg lightbox-trigger"
                         alt="Vinderen af 'Iværksætter prisvinder' 2024" data-photographer="Foto: Jens Hansen">
                </section>

                <section class="prizeitem" id="simple-list-item-5">
                    <section class="prize-text">
                        <h2 id="simple-list-item-5">Klima- og Miljøprisen</h2>
                        <p>Prisen gives til en virksomhed, institution eller organisation beliggende i Slagelse
                            Kommune, som gennem et målrettet initiativ på markant vis har gjort en særlig
                            indsats for at beskytte mod klimaforandringer og understøtte et bæredygtigt
                            miljø.</p>
                    </section>
                    <img src="pic/prisbilleder/klimamiljøpris.JPG" class="prizeimg lightbox-trigger"
                         alt="Vinderen af 'Klima- og miljø prisvinder' 2024" data-photographer="Foto: Jens Hansen">
                </section>

                <section class="prizeitem" id="simple-list-item-6">
                    <section class="prize-text">
                        <h2 id="simple-list-item-6">Praktikprisen</h2>
                        <p>Alle studerende på Zealand - Sjællands Erhvervsakademi er i praktik i en virksomhed som
                            en
                            del af deres uddannelse. Praktikprisen gives til den virksomhed i Slagelse kommune, som
                            i
                            løbet af det seneste år har været praktikvirksomhed i et eller flere særligt gode
                            praktikforløb
                            for studerende på en af Zealands videregående uddannelser. </p>
                    </section>
                    <img src="pic/prisbilleder/praktikpris.JPG" class="prizeimg lightbox-trigger"
                         alt="Vinderen af 'Praktik prisvinder' 2024" data-photographer="Foto: Jens Hansen">
                </section>

                <section class="prizeitem" id="simple-list-item-7">
                    <section class="prize-text">
                        <h2 id="simple-list-item-7">Årets leder</h2>
                        <p>Prisen Årets Leder skal hylde et menneske, der i sin
                            lederrolle på en arbejdsplads inden for Slagelse Kommune
                            hver dag har afgørende betydning for den succes, dét i
                            sandhed er, når medarbejdere er glade og trives.
                            På vores egen arbejdsplads er god ledelse og
                            medarbejdertrivsel to sider af samme sag.
                            Gode ledere bidrager afgørende til at skabe rammer, hvor
                            mennesker går glade til og fra arbejde, og dét er vigtigt i
                            Skel.dk – og det er, eller burde i hvert fald være, lige så
                            vigtigt for alle andre arbejdspladser. Vi hylder med prisen de lokale ledere, nye som
                            erfarne på
                            små
                            som store arbejdspladser, der i hverdagen gør en ægte forskel for andres trivsel og
                            arbejdsglæde.</p>
                    </section>
                    <img src="pic/prisbilleder/åretsleder.JPG" class="prizeimg lightbox-trigger"
                         alt="Vinderen af 'Årets leder prisvinder' 2024" data-photographer="Foto: Jens Hansen">
                </section>
            </section>
        </article>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Gå til toppen">
        <i class="fas fa-arrow-up"></i>
    </button>
</main>

<div class="lightbox-overlay" id="lightbox">
    <button class="lightbox-close" id="lightboxClose">&times;</button>
    <div class="lightbox-content">
        <img src="" alt="Stort billede">
        <div class="lightbox-text" id="lightboxText"></div>
    </div>
</div>

<script>
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = lightbox.querySelector("img");
    const lightboxClose = document.getElementById("lightboxClose");
    const lightboxText = document.getElementById("lightboxText");

    let mybutton = document.getElementById("myBtn");

    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    document.querySelectorAll(".lightbox-trigger").forEach(img => {
        img.addEventListener('click', () => {
            const altText = img.alt;
            const photographer = img.dataset.photographer;

            lightboxImg.src = img.src;
            if (photographer) {
                lightboxText.innerHTML = `<p>${altText}</p><p class="text-muted small">${photographer}</p>`;
            } else {
                lightboxText.textContent = altText;
            }

            lightbox.style.display = 'flex';
        });
    });

    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox || e.target === lightboxClose) {
            lightbox.style.display = 'none';
            lightboxImg.src = '';
        }
    });
</script>

<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>