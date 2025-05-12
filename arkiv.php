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

    <title>Billedarkiv</title>

    <meta name="description" content="Se billeder fra tidligere års ErhvervsAward. Fejr vinderne og oplev stemningen fra arrangementet"/>
    <meta name="keywords" content="ErhvervsAward, billedarkiv, erhvervspris, Slagelse, vinderbilleder, prisuddeling, fællesskab, forsamling, event, arrangement, fest, gallaaften, underholdning, festmiddag"/>
    <meta name="robots" content="index, follow"/>
    <meta name="author" content="ErhvervsAward">
    <meta name="language" content="da"/>
    <meta name="copyright" content="© 2025 ErhvervsAwards Slagelse">

    <meta property="og:title" content="Arkiv - ErhvervsAwards Slagelse">
    <meta property="og:description" content="Se billeder fra tidligere års ErhvervsAwards i Slagelse.">
    <meta property="og:image" content="https://erhvervsaward.dk/pic/arkiv-pic/erhvervspris.jpg">
    <meta property="og:url" content="https://erhvervsaward.dk/arkiv">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ErhvervsAwards Slagelse">

    <link rel="canonical" href="https://erhvervsaward.dk/arkiv">

    <?php
    include("includes/font.php");
    ?>

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CollectionPage",
            "name": "Arkiv - ErhvervsAwards Slagelse",
            "description": "Se billeder fra tidligere års ErhvervsAwards i Slagelse.",
            "url": "https://erhvervsaward.dk/arkiv",
            "image": "https://erhvervsaward.dk/pic/arkiv-pic/erhvervspris.jpg",
            "publisher": {
                "@type": "Organization",
                "name": "ErhvervsAwards Slagelse",
                "url": "https://erhvervsaward.dk",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://erhvervsaward.dk/pic/logo.png"
                }
            }
        }
    </script>
</head>

<body>
<?php
include("includes/navbar.php");
?>

<main class="py-5 container">
    <section class="container py-5" aria-labelledby="billedarkiv">
            <header class="mb-4 text-center text-md-start">
                <h2 id="billedarkiv" class="fw-bold">Billedarkiv</h2>
                <p class="text-muted">
                    Har du billeder du vil dele med os som blev taget til arrangementet, så hører vi gerne fra dig.<br>
                    Kontakt os på <a href="mailto:press@slagelse.dk">press@slagelse.dk</a>
                </p>

                <!-- Årstal -->
                <nav class="d-flex text-center text-md-start gap-3 my-4" aria-label="Vælg årstal">
                    <button class="btn btn-link text-decoration-none fw-bold year-btn" data-year="2024">2024</button>
                    <button class="btn btn-link text-decoration-none fw-bold year-btn" data-year="2023">2023</button>
                    <button class="btn btn-link text-decoration-none fw-bold year-btn" data-year="2022">2022</button>
                    <button class="btn btn-link text-decoration-none fw-bold year-btn" data-year="2021">2021</button>
                    <button class="btn btn-link text-decoration-none fw-bold year-btn" data-year="2020">2020</button>
                    <button class="btn btn-link text-decoration-none fw-bold year-btn" data-year="2019">2019</button>
                </nav>
            </header>

            <!-- Gallerier -->
            <div id="gallery-2024" class="year-gallery">
                <div class="row g-3">

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/champagner.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="champagne fyldes op">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/erhvervspris.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="grangia erhvervspris">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/frontløber-grangia.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="frontløber (cafe tidslös) og grangia (kærsgaard motorservice) nominerede">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/frontløberpris.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="frontløberpris vinder (idalou)">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/guitar.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="guitar spiller">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/harboe-drink.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="harboe drink fyldes op">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/harboe-flaske.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="harboe kildevand flaske på bord med glas">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/initiativpris.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="initiativpris vinder (slagelse vinkompagni)">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/kameramand.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="kameramand filmer">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/miljøpris.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="klima og miljøpris vinder (ebk-huse)">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/musikker.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="scene, musikker, trummer">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/poplic-service.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="poplic service trummer">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/scene-dame.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="dame på scenen til arrangementet">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/stor-skærm.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="storskærm til eventet">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/årets-leder.jpg" class="img-fluid rounded shadow-sm gallery-lightbox-trigger" alt="åretsleder pris vinder (slagelse sygehus, akutafdelingen">
                        </figure>
                    </article>
                </div>
            </div>

            <!-- Tom arkiv -->
            <div id="gallery-empty" class="year-gallery text-center d-none">
                <p class="text-muted fs-5">Her er endnu ikke uploadet billeder, kontakt os gerne hvis du har billeder fra denne arrangement.</p>
            </div>
        </section>
</main>

<div class="gallery-lightbox-overlay" id="gallery-lightbox">
    <button class="gallery-lightbox-close" id="gallery-lightboxClose">&times;</button>
    <div class="gallery-lightbox-content">
        <img src="" alt="Stort billede">
        <div class="gallery-lightbox-text" id="gallery-lightboxText"></div>
    </div>
</div>


<?php
include("includes/footer.php");
?>

<script>
    const yearButtons = document.querySelectorAll('.year-btn');
    const gallery2024 = document.getElementById('gallery-2024');
    const galleryEmpty = document.getElementById('gallery-empty');
    const galleryLightbox = document.getElementById("gallery-lightbox");
    const galleryLightboxImg = galleryLightbox.querySelector("img");
    const galleryLightboxClose = document.getElementById("gallery-lightboxClose");
    const galleryLightboxText = document.getElementById("gallery-lightboxText");

    yearButtons.forEach(button => {
        button.addEventListener('click', () => {
            const year = button.dataset.year;
            if (year === '2024') {
                gallery2024.classList.remove('d-none');
                galleryEmpty.classList.add('d-none');
            } else {
                gallery2024.classList.add('d-none');
                galleryEmpty.classList.remove('d-none');
            }
        });
    });


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

    document.querySelectorAll(".gallery-lightbox-trigger").forEach(img => {
        img.addEventListener('click', () => {
            galleryLightboxImg.src = img.src;
            galleryLightboxText.textContent = img.alt;
            galleryLightbox.style.display = 'flex';
        });
    });

    galleryLightbox.addEventListener('click', (e) => {
        if (e.target === galleryLightbox || e.target === galleryLightboxClose) {
            galleryLightbox.style.display = 'none';
            galleryLightboxImg.src = '';
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>