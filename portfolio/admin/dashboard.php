<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/partials.php';

$pCount = mysqli_fetch_row(mysqli_query($conn, 'SELECT COUNT(*) FROM projects'))[0];
$sCount = mysqli_fetch_row(mysqli_query($conn, 'SELECT COUNT(*) FROM skills'))[0];
$cCount = mysqli_fetch_row(mysqli_query($conn, 'SELECT COUNT(*) FROM certificates'))[0];
$mCount = mysqli_fetch_row(mysqli_query($conn, 'SELECT COUNT(*) FROM messages'))[0];

adminHeader('Dashboard');
?>
<h1 class="text-3xl font-bold mb-4">Welcome, <?= htmlspecialchars($_SESSION['admin_username']); ?></h1>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="bg-white p-4 rounded shadow">Projects: <?= (int)$pCount; ?></div>
    <div class="bg-white p-4 rounded shadow">Skills: <?= (int)$sCount; ?></div>
    <div class="bg-white p-4 rounded shadow">Certificates: <?= (int)$cCount; ?></div>
    <div class="bg-white p-4 rounded shadow">Messages: <?= (int)$mCount; ?></div>
</div>
<?php adminFooter(); ?>
