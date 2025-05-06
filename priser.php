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
include("includes/navbar.php");
?>

<main class="container px-4">
    <article class="row gx-5">
        <aside class="sidebar text-center col-2">
            <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
                <a class="p-1 rounded" href="#simple-list-item-1">Erhvervsprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-2">Frontløberprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-3">Initiativprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-4">Iværksætterprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-5">Klima- og Miljøprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-6">Praktikprisen</a>
                <a class="p-1 rounded" href="#simple-list-item-7">Årets leder</a>
            </div>
        </aside>

        <article class="main-text col-auto">
            <section data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h2 id="simple-list-item-1">Erhvervsprisen</h2>
                <p>...</p>
                <h2 id="simple-list-item-2">Frontløberprisen</h2>
                <p>...</p>
                <h2 id="simple-list-item-3">Initiativprisen</h2>
                <p>...</p>
                <h2 id="simple-list-item-4">Iværksætterprisen</h2>
                <p>...</p>
                <h2 id="simple-list-item-5">Klima- og Miljøprisen</h2>
                <p>...</p>
                <h2 id="simple-list-item-6">Praktikprisen</h2>
                <p>...</p>
                <h2 id="simple-list-item-7">Årets leder</h2>
                <p>...</p>
        </section>
    </article>
</article>

<?php
include("includes/footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>