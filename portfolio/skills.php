<?php
require_once __DIR__ . '/includes/db.php';
include __DIR__ . '/includes/header.php';
$skills = mysqli_query($conn, 'SELECT * FROM skills ORDER BY category, level DESC');
?>
<section>
    <h1 class="text-3xl mb-6 text-blue-900 dark:text-yellow-400"><?= e($t['all_skills']); ?></h1>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php while ($row = mysqli_fetch_assoc($skills)): ?>
            <div class="card bg-white dark:bg-slate-900 p-4">
                <h2 class="text-xl"><?= e($row['name']); ?></h2>
                <p class="text-sm mb-2"><?= e($row['category']); ?></p>
                <div class="w-full bg-slate-200 dark:bg-slate-700 h-2 rounded">
                    <div class="bg-blue-800 dark:bg-yellow-400 h-2 rounded" style="width: <?= (int)$row['level']; ?>%"></div>
                </div>
                <p class="text-xs mt-1"><?= (int)$row['level']; ?>%</p>
            </div>
        <?php endwhile; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
