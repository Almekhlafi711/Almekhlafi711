<?php
include __DIR__ . '/includes/header.php';
?>
<section class="card bg-white dark:bg-slate-900 p-8">
    <h1 class="text-3xl mb-4 text-blue-900 dark:text-yellow-400"><?= e($t['about_title']); ?></h1>
    <p class="mb-6 leading-8 text-slate-700 dark:text-slate-300"><?= e($t['about_bio']); ?></p>
    <div class="grid md:grid-cols-2 gap-4 text-sm">
        <div class="card bg-slate-50 dark:bg-slate-800 p-4"><strong><?= e($t['location']); ?>:</strong> Yemen</div>
        <div class="card bg-slate-50 dark:bg-slate-800 p-4"><strong><?= e($t['university']); ?>:</strong> Sana'a University</div>
        <div class="card bg-slate-50 dark:bg-slate-800 p-4"><strong><?= e($t['faculty']); ?>:</strong> Computer and Information Technology</div>
        <div class="card bg-slate-50 dark:bg-slate-800 p-4"><strong><?= e($t['major']); ?>:</strong> Information Technology</div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
