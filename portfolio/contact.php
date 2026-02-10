<?php
require_once __DIR__ . '/includes/db.php';
include __DIR__ . '/includes/header.php';
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $message = mysqli_real_escape_string($conn, $_POST['message'] ?? '');

    if ($name && $email && $message) {
        mysqli_query($conn, "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')");
        $success = true;
    }
}
?>
<section>
    <h1 class="text-3xl mb-6 text-blue-900 dark:text-yellow-400"><?= e($t['contact_title']); ?></h1>
    <?php if ($success): ?>
        <p class="mb-4 p-3 rounded bg-green-100 text-green-800"><?= e($t['success_msg']); ?></p>
    <?php endif; ?>
    <div class="grid md:grid-cols-2 gap-6">
        <form method="POST" class="card bg-white dark:bg-slate-900 p-5 space-y-4">
            <input required name="name" type="text" placeholder="<?= e($t['name']); ?>" class="w-full p-3 rounded bg-slate-100 dark:bg-slate-800">
            <input required name="email" type="email" placeholder="<?= e($t['email']); ?>" class="w-full p-3 rounded bg-slate-100 dark:bg-slate-800">
            <textarea required name="message" placeholder="<?= e($t['message']); ?>" class="w-full p-3 rounded bg-slate-100 dark:bg-slate-800 h-32"></textarea>
            <button class="btn-primary" type="submit"><?= e($t['send']); ?></button>
        </form>
        <div class="space-y-4">
            <a class="card block bg-white dark:bg-slate-900 p-5" href="https://wa.me/967777953434" target="_blank"><strong><?= e($t['whatsapp']); ?></strong><br>+967 777 953 434</a>
            <a class="card block bg-white dark:bg-slate-900 p-5" href="https://linkedin.com/in/mohammedAlmkhlafi" target="_blank"><strong><?= e($t['linkedin']); ?></strong><br>mohammedAlmkhlafi</a>
            <a class="card block bg-white dark:bg-slate-900 p-5" href="mailto:mohammed@example.com"><strong><?= e($t['email']); ?></strong><br>mohammed@example.com</a>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
