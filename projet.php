<?php 
if (isset($_GET['id'])) {
    include 'get-projets.php';
    $project = $projects[$_GET['id']];
    if (!isset($project)) {
        header("Location: index.php?page=404");
        exit;
    }

    include "projets/{$_GET['id']}/index.php";
} else {
    header("Location: index.php?page=404");
    exit;
} ?>
