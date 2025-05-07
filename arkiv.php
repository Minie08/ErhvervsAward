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
    <section aria-labelledby="billedarkiv-overskrift">
        <header class="mb-4">
            <h2 id="billedarkiv-overskrift" class="fw-bold">Billedarkiv</h2>
            <p>
                Har du billeder du vil dele med os som blev taget til arrangementet, så hører vi gerne fra dig.<br>
                Kontakt os på <a href="mailto:press@slagelse.dk">press@slagelse.dk</a>
            </p>
        </header>

        <!-- Årstal -->
        <nav aria-label="Billedarkiv årstal" class="mb-4">
            <ul class="list-unstyled d-flex flex-wrap gap-3">
                <li><a href="#" class="fw-bold text-decoration-none">2024</a></li>
                <li><a href="#" class="text-decoration-none">2023</a></li>
                <li><a href="#" class="text-decoration-none">2022</a></li>
                <li><a href="#" class="text-decoration-none">2021</a></li>
                <li><a href="#" class="text-decoration-none">2020</a></li>
                <li><a href="#" class="text-decoration-none">2019</a></li>
            </ul>
        </nav>

        <!-- Galleri -->
        <section class="row g-3" aria-label="Galleri billeder">
            <!-- Ét billede -->
            <article class="col-6 col-md-4 col-lg-3">
                <figure class="m-0">
                    <img src="path/to/image1.jpg" class="img-fluid rounded shadow-sm" alt="Publikum til prisoverrækkelsen">
                    <!-- <figcaption>Valgfri billedtekst</figcaption> -->
                </figure>
            </article>

            <article class="col-6 col-md-4 col-lg-3">
                <figure class="m-0">
                    <img src="path/to/image2.jpg" class="img-fluid rounded shadow-sm" alt="Uddeling af award på scenen">
                </figure>
            </article>

            <!-- ... flere <article> med <figure> -->
        </section>
    </section>
</main>

<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
