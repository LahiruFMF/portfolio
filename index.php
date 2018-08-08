<?php include('asset.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <title>Title of the document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?= asset_path('common.js', 'js'); ?>"></script>
    <link rel="stylesheet" href="<?= asset_path('theme.css', 'css'); ?>">

</head>

<body>
<div class="page-wrapper">
    <div class="page">
        <section>
            <div class="section">1</div>
        </section>
        <section>
            <div class="section">2</div>
        </section>
        <section>
            <div class="section">3</div>
        </section>
        <section>
            <div class="section">4</div>
        </section>
        <section>
            <div class="section">5</div>
        </section>
        <section>
            <div class="section">6</div>
        </section>
        <section>
            <div class="section">7</div>
        </section>
        <div class="scrollZone left" style="left: 0px;" id="btn-scroll-left"></div>
        <div class="scrollZone right" style="right: 0px;" id="btn-scroll-right"></div>
    </div>
</div>
</body>

</html>