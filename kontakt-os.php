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

    <script>
        (function(d) {
            var config = {
                    kitId: 'eaj3zwt',
                    scriptTimeout: 3000,
                    async: true
                },
                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include ("includes/navbar.php");
?>

<!--Kontakt os-->

<main class="container-fluid contact col-md-12">
    <h2>Kontakt os</h2>
    <article>
        <p>Mandag - Fredag kl. 10.00 - 14.00
            <br>
            Lørdag, søndag og helligdage holder vi lukket
            <br>
            Tlf: 51 26  22 99
            <br>
            Mail: hsm@event-slagelse.dk
            <br><br>
            Har du spørgsmål til eventet sidder vi altid klar på telefonen og svarer på mails indenfor kort tid.
            <br>
            Du kan også altid kontakte os ved at udfylde nedenstående formular.
            <br>
        </p>
        <!--Email formular-->
        <form class="contactform" action="action_page.php">

            <label for="fname">Fornavn:</label>
            <input type="text" id="fnae" name="firstname" placeholder="Fornavn..">

            <label for="lname">Efternavn:</label>
            <input type="text" id="lname" name="lastname" placeholder="Efternavn..">

            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="subject">Besked</label>
            <textarea id="subject" name="subject" placeholder="Skriv noget.." style="height:200px"></textarea>

            <input type="submit" value="Send">

        </form>
    </article>
</main>

<?php
include ("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>