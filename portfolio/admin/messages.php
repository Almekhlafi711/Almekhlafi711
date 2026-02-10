<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/partials.php';

$rows = mysqli_query($conn, 'SELECT * FROM messages ORDER BY created_at DESC');
adminHeader('Messages');
?>
<h1 class="text-2xl font-bold mb-4">Contact Messages</h1>
<div class="space-y-3">
<?php while($r=mysqli_fetch_assoc($rows)): ?>
<div class="bg-white p-4 rounded shadow">
<p><strong><?= htmlspecialchars($r['name']); ?></strong> (<?= htmlspecialchars($r['email']); ?>)</p>
<p class="text-sm mt-1"><?= nl2br(htmlspecialchars($r['message'])); ?></p>
<p class="text-xs text-slate-500 mt-1"><?= htmlspecialchars($r['created_at']); ?></p>
</div>
<?php endwhile; ?>
</div>
<?php adminFooter(); ?>
