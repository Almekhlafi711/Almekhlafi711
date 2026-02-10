<?php
require_once __DIR__ . '/includes/db.php';
include __DIR__ . '/includes/header.php';
$certs = mysqli_query($conn, 'SELECT * FROM certificates ORDER BY year DESC');
?>
<section>
    <h1 class="text-3xl mb-6 text-blue-900 dark:text-yellow-400"><?= e($t['all_certificates']); ?></h1>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
        <?php while ($row = mysqli_fetch_assoc($certs)): ?>
            <article class="card bg-white dark:bg-slate-900 p-4">
                <img src="<?= e($row['image']); ?>" alt="<?= e($row['title']); ?>" class="rounded-lg h-44 object-cover w-full mb-3">
                <h2 class="text-lg mb-1"><?= e($row['title']); ?></h2>
                <p class="text-sm"><?= e($row['issuer']); ?></p>
                <p class="text-xs mt-1"><?= (int)$row['year']; ?></p>
            </article>
        <?php endwhile; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
