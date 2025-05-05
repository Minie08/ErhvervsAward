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
include("includes/navbar.php");
?>

<div class="container">
    <class class="row">
        <!--navbar-->
        <div class="col-4 sidebar">
            <nav id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
                <a class="p-1 rounded" href="#simple-list-item-1">Erhvervsprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-2">Frontløberprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-3">Initiativprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-4">Iværksætterprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-5">Klima- og Miljøprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-6">Praktikprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-7">Årets leder</a>
            </nav>
        </div>
        <!--textbody-->
        <div class="col-8 main-text">
            <section data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <article>
                    <h2 id="simple-list-item-1">Erhvervsprisen</h2>
                    <p>Erhvervspris - hvad er prisen - sidste års vinder</p>
                </article>
                <article>
                    <h4 id="simple-list-item-2">Frontløberprisen</h4>
                    <p>Frontløberprisen - hvad er prisen - sidste års vinder</p>
                </article>
                <article>
                    <h2 id="simple-list-item-3">Initiativprisen</h2>
                    <p>Initiativprisen - hvad er prisen - sidste års vinder</p>
                </article>
                <article>
                    <h2 id="simple-list-item-4">Iværksætterprisen</h2>
                    <p>Iværksætterprisen - hvad er prisen - sidste års vinder</p>
                </article>
                <article>
                    <h2 id="simple-list-item-5">Klima- og Miljøprisen</h2>
                    <p>Klima- og Miljøprisen - hvad er prisen - sidste års vinder</p>
                </article>
                <article>
                    <h2 id="simple-list-item-6">Praktikprisen</h2>
                    <p>Praktikprisen - hvad er prisen - sidste års vinder</p>
                </article>
                <article>
                    <h2 id="simple-list-item-7">Årets leder</h2>
                    <p>Årets leder - hvad er prisen - sidste års vinder</p>
                </article>
            </section>
        </div>
    </class>
</div>

<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>