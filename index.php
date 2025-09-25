<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Martin Parizet</title>
  <link rel="icon" href="assets/icons/Avatar-rounded.svg" type="image/x-icon" />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Inter:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/outpouts.css" />
</head>
<?php

$projects = [];
if (($handle = fopen("projets.csv", "r")) !== false) {
  while (($data = fgetcsv($handle, 1000, ",", '"','\\')) !== false) {
    $projects[] = $data;
  }
  fclose($handle);
}
?>
<body class="bg-stone-800 text-gray-300 ">
  <?php
  include 'header.php';
  $page = $_GET['page'] ?? 'home';
  $pageFile = __DIR__ . '/' . $page . '.php';

  if (is_readable($pageFile)) {
    include 'route.php';
  } else {
    http_response_code(404);
    if (is_readable(__DIR__ . '/404.php')) {
      include '404.php';
    } else {
      echo '<main class="p-8"><h1 class="text-3xl font-bold text-white">404 - Page non trouvée</h1></main>';
    }
  }

  include 'footer.php';
  ?>
</body>

</html>