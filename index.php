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
  while (($data = fgetcsv($handle, 1000, ",")) !== false) {
    $projects[] = $data;
  }
  fclose($handle);
}
?>
<body class="bg-stone-800 text-gray-300 ">
  <?php include 'header.php';
  $page = $_GET['page'] ?? 'home';
  include 'route.php';
 include 'footer.php' ?>
</body>
<script src="assets/js/scripts.js"></script>

</html>