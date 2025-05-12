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
        <a href="sponsoratsalg.php" class="btn btn-cta2 btn-lg">Køb sponsorat</a>
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
                        <img src="/pic/frontløber-v.png" alt="Løbende sort tandstiks mand med pokal" class="pris-logo mb-3">
                        <h5 class="card-title">Frontløberprisen</h5>
                        <p class="card-text">Uddeles for 5. gang i 2025, en pris for den der skaber positivitet og udvikling omkring sig.</p>
                    </div>
                </div>
            </div>

            <!-- Anden -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <img src="/pic/grangia-v.png" alt="LED pære med stjerne inden i" class="pris-logo mb-3 img-fluid d-block mx-auto">
                        <h5 class="card-title">Grangia Erhvervspris</h5>
                        <p class="card-text">Prisen gives til lokale talenter under 40 år, som gør en positiv forskel og er innovativ samt en stærk netværker.</p>
                    </div>
                </div>
            </div>

            <!-- Tredje -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <img src="/pic/initiativ-v.png" alt="LED pære med lyn inden i" class="pris-logo mb-3">
                        <h5 class="card-title">Initiativprisen</h5>
                        <p class="card-text">Gives til en virksomhed, der har klaret sig stærkt efter modgang.</p>
                    </div>
                </div>
            </div>

            <!-- Fjerde -->
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <img src="/pic/Iværksætter-v.png" alt="tandhjul med krone inden i" class="pris-logo mb-3">
                        <h5 class="card-title">Iværksætterprisen</h5>
                        <p class="card-text">Hylder dem, der med mod, innovation og handlekraft skaber nye virksomheder og løsninger.</p>
                    </div>
                </div>
            </div>

            <!--Femte-->
            <div class="col-sm-12 col-md-6 col-lg-6 extra-card d-none">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <img src="/pic/klima-miljø-v.png" alt="globus med blomst" class="pris-logo mb-3">
                        <h5 class="card-title">Klima- og Miljøpris</h5>
                        <p class="card-text">Tildeles til den der har gjort en særlig indsats for at beskytte mod klimaforandringer og understøttet et bæredygtigt miljø.</p>
                    </div>
                </div>
            </div>

            <!--Sjette-->
            <div class="col-sm-12 col-md-6 col-lg-6 extra-card d-none">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <img src="/pic/praktikplads-v.png" alt="studenterhue i ikon" class="pris-logo mb-3">
                        <h5 class="card-title">Praktikprisen</h5>
                        <p class="card-text">Tildeles til den virksomhed, som har givet særlig gode praktikforløb
                            for studerende på en af Zealands videregående uddannelser. </p>
                    </div>
                </div>
            </div>

            <!--Syvende-->
            <div class="col-sm-12 col-md-6 col-lg-6 extra-card d-none mx-auto">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <img src="/pic/Leder-v.png" alt="Leder figur med flag i hånden" class="pris-logo mb-3">
                        <h5 class="card-title">Lederprisen</h5>
                        <p class="card-text">Hylder lederen, der i sin lederrolle på arbejdspladsen har afgørende betydning for den succes når medarbejdere er glade og trives. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="text-center mt-4">
    <button id="showMoreBtn" class="btn btn-cta2">
        Vis alle <i class="bi bi-chevron-down"></i>
    </button>
</div>

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

<script>
    const showMoreBtn = document.getElementById("showMoreBtn");
    const hiddenCards = document.querySelectorAll(".extra-card");

    showMoreBtn.addEventListener("click", function () {
        hiddenCards.forEach(card => {
            card.classList.remove("d-none");
        });
        showMoreBtn.style.display = "none";
    });
</script>
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