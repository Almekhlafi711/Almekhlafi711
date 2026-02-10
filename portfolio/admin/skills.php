<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/partials.php';

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    mysqli_query($conn, "DELETE FROM skills WHERE id=$id");
    header('Location: /portfolio/admin/skills.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $level = (int)$_POST['level'];
    mysqli_query($conn, "INSERT INTO skills (name,category,level) VALUES ('$name','$category',$level)");
    header('Location: /portfolio/admin/skills.php');
    exit;
}
$rows = mysqli_query($conn, 'SELECT * FROM skills ORDER BY category, level DESC');
adminHeader('Manage Skills');
?>
<h1 class="text-2xl font-bold mb-4">Manage Skills</h1>
<form method="post" class="bg-white p-4 rounded shadow mb-6 grid md:grid-cols-3 gap-3">
<input class="p-2 border rounded" name="name" placeholder="Skill Name" required>
<input class="p-2 border rounded" name="category" placeholder="Category" required>
<input class="p-2 border rounded" name="level" type="number" min="1" max="100" placeholder="Level %" required>
<button class="bg-blue-700 text-white p-2 rounded md:col-span-3">Add Skill</button>
</form>
<table class="w-full bg-white rounded shadow text-sm"><tr class="bg-slate-200"><th class="p-2">Name</th><th>Category</th><th>Level</th><th>Action</th></tr>
<?php while($r=mysqli_fetch_assoc($rows)): ?><tr class="border-t"><td class="p-2"><?= htmlspecialchars($r['name']); ?></td><td><?= htmlspecialchars($r['category']); ?></td><td><?= (int)$r['level']; ?>%</td><td><a class="text-red-600" href="?delete=<?= $r['id']; ?>" onclick="return confirm('Delete?')">Delete</a></td></tr><?php endwhile; ?>
</table>
<?php adminFooter(); ?>
