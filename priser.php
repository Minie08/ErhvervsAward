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
include("includes/navbar.php");
?>

<main>
    <div class="content-wrapper">
        <article class="row gx-2">
            <aside class="sidebar text-center col-2">
                <div id="simple-list-example"
                     class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
                    <a class="p-1 rounded" href="#simple-list-item-1">Frontløberprisen</a>
                    <a class="p-1 rounded" href="#simple-list-item-2">Grangia</a>
                    <a class="p-1 rounded" href="#simple-list-item-3">Initiativprisen</a>
                    <a class="p-1 rounded" href="#simple-list-item-4">Iværksætterprisen</a>
                    <a class="p-1 rounded" href="#simple-list-item-5">Klima- og Miljøprisen</a>
                    <a class="p-1 rounded" href="#simple-list-item-6">Praktikprisen</a>
                    <a class="p-1 rounded" href="#simple-list-item-7">Årets leder</a>
                </div>
            </aside>

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
                        <img src="pic/placeholder.png" class="prizeimg" alt="Frontløber prisvinder">
                    </section>
                    <section class="prizeitem" id="simple-list-item-2">
                        <section class="prize-text">
                            <h2 id="simple-list-item-2">Grangia</h2>
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
                        <img src="pic/placeholder.png" class="prizeimg" alt="Grangia prisvinder">
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
                        <img src="pic/placeholder.png" class="prizeimg" alt="Initiativ prisvinder">
                    </section>
                    <section class="prizeitem" id="simple-list-item-4">
                        <section class="prize-text">
                            <h2 id="simple-list-item-4">Iværksætterprisen</h2>
                            <p>Iværksætteri handler om at starte og drive en ny virksomhed, om at udvise
                                risikovillighed, innovation og om at finde måder hvor behov identificeres og
                                imødekommes.</p>
                        </section>
                        <img src="pic/placeholder.png" class="prizeimg" alt="Iværksætter prisvinder">
                    </section>
                    <section class="prizeitem" id="simple-list-item-5">
                        <section class="prize-text">
                            <h2 id="simple-list-item-5">Klima- og Miljøprisen</h2>
                            <p>Prisen gives til en virksomhed, institution eller organisation beliggende i Slagelse
                                Kommune, som gennem et målrettet initiativ på markant vis har gjort en særlig
                                indsats for at beskytte mod klimaforandringer og understøtte et bæredygtigt
                                miljø.</p>
                        </section>
                        <img src="pic/placeholder.png" class="prizeimg" alt="Klima- og miljø prisvinder">
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
                        <img src="pic/placeholder.png" class="prizeimg" alt="Praktik prisvinder">
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
                        <img src="pic/placeholder.png" class="prizeimg" alt="Årets leder prisvinder">
                    </section>
                </section>
            </article>
        </article>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</main>

<script>
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
</script>

<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>