<?php
$current = getCurrentRoute();
$title = (isset($current['name'])) ? ' | ' . ucfirst($current['name']) : '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon Portfolio<?= $title ?></title>
    <link rel="icon" href="/public/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="resources/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>

<?php require_once __BASEPATH__ . '/resources/views/common/header.php' ?>

<main>

    <?php require_once __BASEPATH__ . '/resources/views/' . $page . '.php' ?>

</main>

<?php require_once __BASEPATH__ . '/resources/views/common/footer.php' ?>

<script type="text/javascript" src="/resources/js/app.js"></script>
</body>
</html>