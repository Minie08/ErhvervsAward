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

<h1>Det virker 🥳</h1>




<h4 class="spons text-center">Vores sponsorer</h4>

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

        // Duplikerer indhold én gang for loop-effekt
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
                scrollPos -= 1;

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