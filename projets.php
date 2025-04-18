<?php
$directory = __DIR__ . '/assets/icons/technos';
$files = array_diff(scandir($directory), array('..', '.'));
$fileNames = array_map(function ($file) {
    return pathinfo($file, PATHINFO_FILENAME);
}, $files);


?>

<div class="flex p-2 gap-2 justify-center w-full">
    <?php
    foreach ($fileNames as $fileName) {
        if (isset($_GET['techno']) && $_GET['techno'] === $fileName) {
            $isActive = true;
        } else {
            $isActive = false;
        }
        $nom_techno = $fileName;
        include 'base.php';
    }
    ?>  
</div>