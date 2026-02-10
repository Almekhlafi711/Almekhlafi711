<?php
require_once __DIR__ . '/app.php';
$current = basename($_SERVER['PHP_SELF']);
$base = strtok($_SERVER['REQUEST_URI'], '?');
$toggleLang = $lang === 'en' ? 'ar' : 'en';
$toggleTheme = $theme === 'dark' ? 'light' : 'dark';
?>
<!DOCTYPE html>
<html lang="<?= $lang; ?>" dir="<?= $rtl ? 'rtl' : 'ltr'; ?>" class="<?= $theme === 'dark' ? 'dark' : ''; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mohammed Hassan Almkhlafi - Full Stack Developer Portfolio">
    <title><?= e($t['hero_title']); ?> | <?= e($t['hero_subtitle']); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = { darkMode: 'class' }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&family=Poppins:ital,wght@0,400;0,600;0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/portfolio/assets/css/style.css">
</head>
<body class="bg-white text-slate-800 dark:bg-black dark:text-slate-100 transition-colors duration-300 <?= $rtl ? 'font-ar' : 'font-en'; ?>">
<header class="sticky top-0 z-50 bg-white/90 dark:bg-black/90 backdrop-blur border-b border-slate-200 dark:border-yellow-600/30">
    <nav class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between gap-2">
        <a href="/portfolio/index.php" class="text-lg font-bold italic text-blue-800 dark:text-yellow-400">MHA</a>
        <div class="flex flex-wrap items-center gap-2 text-sm">
            <?php
            $items = ['index.php' => 'home', 'about.php' => 'about', 'projects.php' => 'projects', 'skills.php' => 'skills', 'certificates.php' => 'certificates', 'contact.php' => 'contact'];
            foreach ($items as $file => $key):
            ?>
                <a class="nav-link <?= $current === $file ? 'active-link' : ''; ?>" href="/portfolio/<?= $file; ?>"><?= e($t[$key]); ?></a>
            <?php endforeach; ?>
            <a class="nav-link" href="<?= e($base); ?>?lang=<?= $toggleLang; ?>"><?= strtoupper($toggleLang); ?></a>
            <a class="nav-link" href="<?= e($base); ?>?theme=<?= $toggleTheme; ?>"><?= ucfirst($toggleTheme); ?></a>
            <a class="nav-link" href="/portfolio/admin/login.php"><?= e($t['admin']); ?></a>
        </div>
    </nav>
</header>
<main class="max-w-6xl mx-auto px-4 py-8 min-h-[70vh]">
