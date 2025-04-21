<?php
// Data array


ob_start();
?>
<div class="mb-4 border-2 border-gray-500 rounded-lg p-6 max-w-2xl mx-auto">
    <a class="flex items-center justify-between hover:shadow-lg rounded-xl p-2 hover:bg-stone-700/50 hover:cursor-pointer hover:scale-105"
        title="Afficher le projet" href="index.php?page=projet&id=<?= $project['id'] ?>">
        <h2 class="text-2xl font-bold text-white flex items-center">
            <img src="<?= $project['logo'] ?>" alt="logo" class="w-6 mr-2">
            <span class="whitespace-nowrap"><?= $project['title'] ?></span>
        </h2>
        <img src="assets/icons/open_in_new.svg" alt="" class="w-6 h-6 fill-white">
    </a>
    <small class="text-orange-600 ml-2"><?= $project['date'] ?></small>
    <p class="text-gray-400 ml-2"><?= $project['location'] ?></p>
    <p class="text-gray-400 ml-2"><?= $project['description'] ?></p>
    <div class="flex flex-wrap gap-4 mt-4">
        <?php foreach ($project['technologies'] as $tech): ?>
            <?php $nom_techno = $tech;
            include 'base.php'; ?>
        <?php endforeach; ?>
    </div>
</div>
<?php
echo ob_get_clean();


// Render all projects



?></h2>