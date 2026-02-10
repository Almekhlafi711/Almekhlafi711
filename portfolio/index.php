<?php
require_once __DIR__ . '/includes/db.php';
include __DIR__ . '/includes/header.php';

$projects = mysqli_query($conn, 'SELECT * FROM projects ORDER BY created_at DESC LIMIT 3');
$skills = mysqli_query($conn, 'SELECT * FROM skills ORDER BY level DESC LIMIT 6');
$certs = mysqli_query($conn, 'SELECT * FROM certificates ORDER BY year DESC LIMIT 3');
?>
<section class="grid md:grid-cols-2 gap-8 items-center mb-10">
    <div>
        <h1 class="text-4xl mb-3 text-blue-900 dark:text-yellow-400"><?= e($t['hero_title']); ?></h1>
        <p class="text-xl mb-3"><?= e($t['hero_subtitle']); ?></p>
        <p class="mb-5 text-slate-600 dark:text-slate-300"><?= e($t['hero_desc']); ?></p>
        <div class="flex gap-3">
            <a class="btn-primary" href="/portfolio/projects.php"><?= e($t['view_projects']); ?></a>
            <a class="btn-primary" href="/portfolio/contact.php"><?= e($t['contact_me']); ?></a>
        </div>
    </div>
    <div class="card bg-slate-100 dark:bg-slate-900 p-6 text-center">
        <img src="https://via.placeholder.com/350x350?text=Profile+Image" alt="profile" class="rounded-xl mx-auto w-full max-w-sm">
    </div>
</section>

<section class="mb-10">
    <h2 class="text-2xl mb-4"><?= e($t['featured_projects']); ?></h2>
    <div class="grid md:grid-cols-3 gap-4">
        <?php while ($row = mysqli_fetch_assoc($projects)): ?>
            <article class="card bg-white dark:bg-slate-900 p-4">
                <img src="<?= e($row['image']); ?>" alt="<?= e($row['title']); ?>" class="rounded-lg h-40 object-cover w-full mb-3">
                <h3 class="text-lg mb-2"><?= e($row['title']); ?></h3>
                <p class="text-sm mb-2"><?= e($row['description']); ?></p>
                <a href="/portfolio/projects.php" class="text-blue-700 dark:text-yellow-400"><?= e($t['read_more']); ?></a>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<section class="mb-10">
    <h2 class="text-2xl mb-4"><?= e($t['skills_preview']); ?></h2>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <?php while ($row = mysqli_fetch_assoc($skills)): ?>
            <div class="card bg-white dark:bg-slate-900 p-4">
                <p class="font-semibold"><?= e($row['name']); ?></p>
                <p class="text-sm text-slate-500"><?= e($row['category']); ?> - <?= (int)$row['level']; ?>%</p>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<section>
    <h2 class="text-2xl mb-4"><?= e($t['cert_preview']); ?></h2>
    <div class="grid md:grid-cols-3 gap-4">
        <?php while ($row = mysqli_fetch_assoc($certs)): ?>
            <div class="card bg-white dark:bg-slate-900 p-4">
                <img src="<?= e($row['image']); ?>" alt="<?= e($row['title']); ?>" class="rounded-lg h-32 object-cover w-full mb-2">
                <p class="font-semibold"><?= e($row['title']); ?></p>
                <p class="text-sm"><?= e($row['issuer']); ?> (<?= (int)$row['year']; ?>)</p>
            </div>
        <?php endwhile; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
