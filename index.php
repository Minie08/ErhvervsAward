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
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
</div>


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