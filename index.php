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
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include ("includes/navbar.php");
?>

<section class="hero position-relative">
    <img src="/pic/Hero.png" alt="ErhvervsAward stemning" class="w-100" style="max-height: 500px; object-fit: cover;">
    <div class="position-absolute top-50 start-50 translate-middle text-white text-center"></div>
</section>

<section class="py-5 bg-light">
    <div class="container text-center">
        <h1 class="display-5 text-center fw-bold">ErhvervsAward</h1>
        <p class="lead mx-auto" style="max-width: 700px;">
            Vær med når vi hylder årets erhvervsliv i Slagelse Kommune.
            Hvert år samles virksomheder, store som små og samarbejdspartnere til en festlig aften,
            hvor vi fejrer de mange lokale erhvervssucceser.
        </p>
        <a href="sponsoratsalg.php" class="btn btn-cta2 btn-lg">Sponsorat</a>
    </div>
</section>

<section class="awards py-5">
    <div class="container">
        <h2 class="text-center mb-5">Nominerings kategorier</h2>
        <div class="row g-4">

            <!-- Første -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3 placeholder bg-secondary rounded" style="width: 80px; height: 80px; margin: auto;"></div>
                        <h5 class="card-title">Frontløberprisen</h5>
                        <p class="card-text">Gives til en virksomhed, der har klaret sig stærkt efter modgang.</p>
                    </div>
                </div>
            </div>

            <!-- Anden -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3 placeholder bg-secondary rounded" style="width: 80px; height: 80px; margin: auto;"></div>
                        <h5 class="card-title">Klima- og Miljøpris</h5>
                        <p class="card-text">Tildeles til en virksomhed, institution eller organisation,en virksomhed med bemærkelsesværdig vækst og engagement.</p>
                        som gennem et målrettet initiativ på markant vis gjort en særlig indsats for at beskytte
                        klimaforandringer og understøtte et bæredygtigt miljø, inden for de 17 verdensmål.
                    </div>
                </div>
            </div>

            <!-- Tredje -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3 placeholder bg-secondary rounded" style="width: 80px; height: 80px; margin: auto;"></div>
                        <h5 class="card-title">Krise- og rejseprisen</h5>
                        <p class="card-text">Gives til en virksomhed, der har klaret sig stærkt efter modgang.</p>
                    </div>
                </div>
            </div>

            <!-- Fjerde -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3 placeholder bg-secondary rounded" style="width: 80px; height: 80px; margin: auto;"></div>
                        <h5 class="card-title">Krise- og rejseprisen</h5>
                        <p class="card-text">Gives til en virksomhed, der har klaret sig stærkt efter modgang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="highlight py-5">
    <div class="container">
        <img src="/pic/IværksætterPrisen.png" class="img-fluid rounded shadow" alt="Iværksætterpris vinder 2024">
    </div>
</section>


<?php
include ("includes/sponsor-bar.php");
?>

<?php
include ("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const track = document.querySelector(".sponsor-track");

        if (!track) return;

        //loop-effekt
        track.innerHTML += track.innerHTML;

        let scrollPos = 0;
        let paused = false;

        // Pause på hover (desktop)
        track.addEventListener("mouseenter", () => paused = true);
        track.addEventListener("mouseleave", () => paused = false);

        // Pause på touch (mobil og tablet)
        track.addEventListener("touchstart", () => paused = true);
        track.addEventListener("touchend", () => paused = false);

        const scroll = () => {
            if (!paused) {
                scrollPos -= 0.5;

                // Loop-effekt: nulstil når halvdelen er scrollet væk
                if (Math.abs(scrollPos) >= track.scrollWidth / 2) {
                    scrollPos = 0;
                }

                track.style.transform = `translateX(${scrollPos}px)`;
            }

            requestAnimationFrame(scroll);
        };

        scroll();
    });
</script>
</body>
</html>