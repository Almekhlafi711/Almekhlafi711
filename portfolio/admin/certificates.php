<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/partials.php';

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    mysqli_query($conn, "DELETE FROM certificates WHERE id=$id");
    header('Location: /portfolio/admin/certificates.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $issuer = mysqli_real_escape_string($conn, $_POST['issuer']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $year = (int)$_POST['year'];
    mysqli_query($conn, "INSERT INTO certificates (title,issuer,image,year) VALUES ('$title','$issuer','$image',$year)");
    header('Location: /portfolio/admin/certificates.php');
    exit;
}
$rows = mysqli_query($conn, 'SELECT * FROM certificates ORDER BY year DESC');
adminHeader('Manage Certificates');
?>
<h1 class="text-2xl font-bold mb-4">Manage Certificates</h1>
<form method="post" class="bg-white p-4 rounded shadow mb-6 grid md:grid-cols-2 gap-3">
<input class="p-2 border rounded" name="title" placeholder="Title" required>
<input class="p-2 border rounded" name="issuer" placeholder="Issuer" required>
<input class="p-2 border rounded" name="image" placeholder="Image URL" required>
<input class="p-2 border rounded" name="year" type="number" placeholder="Year" required>
<button class="bg-blue-700 text-white p-2 rounded md:col-span-2">Add Certificate</button>
</form>
<table class="w-full bg-white rounded shadow text-sm"><tr class="bg-slate-200"><th class="p-2">Title</th><th>Issuer</th><th>Year</th><th>Action</th></tr>
<?php while($r=mysqli_fetch_assoc($rows)): ?><tr class="border-t"><td class="p-2"><?= htmlspecialchars($r['title']); ?></td><td><?= htmlspecialchars($r['issuer']); ?></td><td><?= (int)$r['year']; ?></td><td><a class="text-red-600" href="?delete=<?= $r['id']; ?>" onclick="return confirm('Delete?')">Delete</a></td></tr><?php endwhile; ?>
</table>
<?php adminFooter(); ?>
