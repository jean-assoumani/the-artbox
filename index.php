<?php include 'oeuvres.php'; ?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>The ArtBox</title>
</head>

<body>
  <?php require_once (__DIR__ . '/header.php'); ?>
  <main>
    <div id="liste-oeuvres">
      <?php
for ($i = 0; $i < count($oeuvres); $i++) {
    echo '<article class="oeuvre">';
    echo '<a href="oeuvre.php?id=' . $i . '" id="oeuvre_' . $i . '">';
    echo '<img src="' . $oeuvres[$i]['image'] . '" alt="' . $oeuvres[$i]['title'] . '">';
    echo '<h2>' . $oeuvres[$i]['title'] . '</h2>';
    echo '<p class="description">' . $oeuvres[$i]['author'] . '</p>';
    echo '</a>';
    echo '</article>';
}
?>


    </div>
  </main>
  <?php require_once (__DIR__ . '/footer.php'); ?>
</body>

</html>