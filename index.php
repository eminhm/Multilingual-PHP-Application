<!DOCTYPE html>
<html lang="<?php echo $lang['lang'] ?>">
<head>
    <meta charset="UTF-8">
    <title>Multilingual-PHP-Application</title>

    <!--=========================================
    // Including Application
    ==========================================-->
    <?php include("src/multilingual-application.php"); ?>

</head>
<body>

<h1>
    <?php echo $lang['multilingual'] ?>
</h1>

<p>
    <?php echo $lang['current-lang'] ?>
</p>

<h2>
    <?php echo $lang['choose-lang'] ?>
</h2>

<p>
    <a href="?lang=en">English</a>
    <a href="?lang=de">Deutsch</a>
</p>


</body>
</html>