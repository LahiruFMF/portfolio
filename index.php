<?php include('asset.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>-->
    <script src="<?= asset_path('common.js','js');?>"></script>
    <link rel="stylesheet" href="<?= asset_path('theme.css','css');?>">

</head>

<body>
<nav class="navigation">
    <a class="active" href="#about" title="About">About</a>
    <a href="#work" title="Work">Work</a>
    <a href="#clients" title="Clients">Clients</a>
    <a href="#blogs" title="Blogs">Blogs</a>
    <a href="#contact" title="Contact">Contact</a>
</nav>

<div id="container">
    <div id="about" class="box">
        Plugin Demo
    </div>
    <div id="work" class="box">
        Work
    </div>
    <div id="clients" class="box">
        Clients
    </div>
    <div id="blogs" class="box">
        Blogs
    </div>
    <div id="contact" class="box">
        Contact
    </div>
</div>
<script src="lib/target/target.js"></script>
</body>

</html>