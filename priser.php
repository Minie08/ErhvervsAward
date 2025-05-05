<<?php
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
include("includes/navbar.php");
?>

<main class="container categories row">
    <!--Kategoriboks-->
    <aside class="sidebar col-md-3">
        <h3>Kategorier</h3>
        <a href="#erhvervsprisen">Erhvervsprisen</a>
        <a href="#frontløberprisen">Frontløberprisen</a>
        <a href="#initiavtivprisen">Initiativprisen</a>
        <a href="#iværksætterprisen">Iværksætterprisen</a>
        <a href="#klimaogmiljøprisen">Klima- og miljøprisen</a>
        <a href="#praktikprisen">Praktikprisen</a>
        <a href="#åretsleder">Årets leder</a>
    </aside>

    <main class="body-text container-fluid col-md-9">
        <h2>Kategorierne</h2>
        <br>
        <!-- body content -->
        <article id="erhvervsprisen">
            <h3>Erhvervsprisen</h3>
            <p>
                ffff
            </p>
        </article>

        <article id="frontløberprisen">
            <h3>Frontløberprisen</h3>
            <p>
                ffff
            </p>
        </article>

        <article id="initiavtivprisen">
            <h3>Initiavprisen</h3>
            <p>
                ffff
            </p>
        </article>

        <article id="iværksætterprisen">
            <h3>Iværksætterprisen</h3>
            <p>
                ffff
            </p>
        </article>

        <article id="klimaogmiljøprisen">
            <h3>Klima- og miljøprisen</h3>
            <p>
                ffff
            </p>
        </article>

        <article id="praktikprisen">
            <h3>Praktikprisen</h3>
            <p>
                ffff
            </p>
        </article>

        <article id="åretsleder">
            <h3>Årets leder</h3>
            <p>
                ffff
            </p>
        </article>
    </main>
</main>

<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>