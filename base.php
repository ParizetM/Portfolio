
<a href="index.php?page=projets&techno=<?= $nom_techno ?>" 
    class="flex justify-center items-center gap-1 rounded-xl px-2 py-1 hover:bg-stone-600/50 hover:cursor-pointer hover:scale-105 w-fit
    <?= $isActive ? 'bg-stone-600' : 'bg-stone-700/50' ?>" 
    title="Afficher les projets utilisant <?= $nom_techno ?>">
     <img src="assets/icons/technos/<?= $nom_techno ?>.svg" alt="" class="w-6 h-6">
     <?= $nom_techno ?>
</a>