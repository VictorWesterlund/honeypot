<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>mydlink</title>
    <link rel="shortcut icon" href="/assets/media/favicon.ico"/>
    <style><?= Page::css("pages/document") ?></style>
</head>
<body>
    <header>
        <div class="container">
            <img src="/assets/media/logo.gif"/>
            <nav>
                <a href="/" data-trigger="document" data-action="nav"><p>Home</p></a>
                <a href="/" data-trigger="document" data-action="nav"><p>Products</p></a>
                <a href="/" data-trigger="document" data-action="nav"><p>Mobile App</p></a>
                <a href="/" data-trigger="document" data-action="nav"><p>Help</p></a>
            </nav>
        </div>
    </header>
    <main>
        <?= Page::include("index") ?>
    </main>
    <footer>
        <?= Page::include("partials/footer") ?>
    </footer>
    <script><?= Page::include("pragma") ?></script>
    <script>{<?= Page::js("pages/document") ?>}</script>
</body>
</html>