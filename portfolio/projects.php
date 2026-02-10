<?php
require_once __DIR__ . '/includes/db.php';
include __DIR__ . '/includes/header.php';
$projects = mysqli_query($conn, 'SELECT * FROM projects ORDER BY created_at DESC');
?>
<section>
    <h1 class="text-3xl mb-6 text-blue-900 dark:text-yellow-400"><?= e($t['all_projects']); ?></h1>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
        <?php while ($row = mysqli_fetch_assoc($projects)): ?>
            <article class="card bg-white dark:bg-slate-900 p-4 flex flex-col">
                <img src="<?= e($row['image']); ?>" alt="<?= e($row['title']); ?>" class="rounded-lg h-44 object-cover w-full mb-3">
                <h2 class="text-xl mb-2"><?= e($row['title']); ?></h2>
                <p class="text-sm mb-3 flex-1"><?= e($row['description']); ?></p>
                <p class="text-xs mb-3"><strong><?= e($t['tech']); ?>:</strong> <?= e($row['technologies']); ?></p>
                <div class="flex gap-3 text-sm">
                    <a class="btn-primary" target="_blank" href="<?= e($row['githubLink']); ?>"><?= e($t['github']); ?></a>
                    <a class="btn-primary" target="_blank" href="<?= e($row['liveLink']); ?>"><?= e($t['live_demo']); ?></a>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
