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

    <title>Arkiv</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include("includes/navbar.php");
?>

<main class="py-5 container">
    <section class="container py-5" aria-labelledby="billedarkiv">
            <header class="mb-4 text-center">
                <h2 id="billedarkiv" class="fw-bold">Billedarkiv</h2>
                <p class="text-muted">
                    Har du billeder du vil dele med os som blev taget til arrangementet, så hører vi gerne fra dig.<br>
                    Kontakt os på <a href="mailto:press@slagelse.dk">press@slagelse.dk</a>
                </p>

                <!-- Årstal -->
                <nav class="d-flex justify-content-center gap-3 my-4" aria-label="Vælg årstal">
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
                            <img src="/pic/arkiv-pic/champagner.jpg" class="img-fluid rounded shadow-sm" alt="champagne fyldes op">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/erhvervspris.jpg" class="img-fluid rounded shadow-sm" alt="grangia erhvervspris">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/frontløberpris.jpg" class="img-fluid rounded shadow-sm" alt="frontløber (cafe tidslös) og grangia (kærsgaard motorservice) nominerede">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/frontløberpris.jpg" class="img-fluid rounded shadow-sm" alt="frontløberpris vinder (idalou)">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/guitar.jpg" class="img-fluid rounded shadow-sm" alt="guitar spiller">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/harboe-drink.jpg" class="img-fluid rounded shadow-sm" alt="harboe drink fyldes op">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/harboe-flaske.jpg" class="img-fluid rounded shadow-sm" alt="harboe kildevand flaske på bord med glas">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/initiativpris.jpg" class="img-fluid rounded shadow-sm" alt="initiativpris vinder (slagelse vinkompagni)">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/kameramand.jpg" class="img-fluid rounded shadow-sm" alt="kameramand filmer">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/miljøpris.jpg" class="img-fluid rounded shadow-sm" alt="klima og miljøpris vinder (ebk-huse)">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/musikker.jpg" class="img-fluid rounded shadow-sm" alt="scene, musikker, trummer">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/poplic-service.jpg" class="img-fluid rounded shadow-sm" alt="poplic service trummer">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/scene-dame.jpg" class="img-fluid rounded shadow-sm" alt="dame på scenen til arrangementet">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/stor-skærm.jpg" class="img-fluid rounded shadow-sm" alt="storskærm til eventet">
                        </figure>
                    </article>

                    <article class="col-6 col-md-4 col-lg-3">
                        <figure class="m-0">
                            <img src="/pic/arkiv-pic/årets-leder.jpg" class="img-fluid rounded shadow-sm" alt="åretsleder pris vinder (slagelse sygehus, akutafdelingen">
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

<?php
include("includes/footer.php");
?>

<script>
    const yearButtons = document.querySelectorAll('.year-btn');
    const gallery2024 = document.getElementById('gallery-2024');
    const galleryEmpty = document.getElementById('gallery-empty');

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
</script
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>