<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/partials.php';

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    mysqli_query($conn, "DELETE FROM projects WHERE id=$id");
    header('Location: /portfolio/admin/projects.php');
    exit;
}

$edit = null;
if (isset($_GET['edit'])) {
    $id = (int)$_GET['edit'];
    $edit = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM projects WHERE id=$id"));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)($_POST['id'] ?? 0);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $technologies = mysqli_real_escape_string($conn, $_POST['technologies']);
    $github = mysqli_real_escape_string($conn, $_POST['githubLink']);
    $live = mysqli_real_escape_string($conn, $_POST['liveLink']);

    if ($id > 0) {
        mysqli_query($conn, "UPDATE projects SET title='$title',description='$description',image='$image',technologies='$technologies',githubLink='$github',liveLink='$live' WHERE id=$id");
    } else {
        mysqli_query($conn, "INSERT INTO projects (title,description,image,technologies,githubLink,liveLink) VALUES ('$title','$description','$image','$technologies','$github','$live')");
    }
    header('Location: /portfolio/admin/projects.php');
    exit;
}

$rows = mysqli_query($conn, 'SELECT * FROM projects ORDER BY created_at DESC');
adminHeader('Manage Projects');
?>
<h1 class="text-2xl font-bold mb-4">Manage Projects</h1>
<form method="post" class="bg-white p-4 rounded shadow mb-6 grid md:grid-cols-2 gap-3">
    <input type="hidden" name="id" value="<?= (int)($edit['id'] ?? 0); ?>">
    <input class="p-2 border rounded" name="title" placeholder="Title" required value="<?= htmlspecialchars($edit['title'] ?? ''); ?>">
    <input class="p-2 border rounded" name="image" placeholder="Image URL" required value="<?= htmlspecialchars($edit['image'] ?? ''); ?>">
    <input class="p-2 border rounded md:col-span-2" name="technologies" placeholder="Technologies" required value="<?= htmlspecialchars($edit['technologies'] ?? ''); ?>">
    <input class="p-2 border rounded" name="githubLink" placeholder="GitHub Link" required value="<?= htmlspecialchars($edit['githubLink'] ?? ''); ?>">
    <input class="p-2 border rounded" name="liveLink" placeholder="Live Link" required value="<?= htmlspecialchars($edit['liveLink'] ?? ''); ?>">
    <textarea class="p-2 border rounded md:col-span-2" name="description" placeholder="Description" required><?= htmlspecialchars($edit['description'] ?? ''); ?></textarea>
    <button class="bg-blue-700 text-white p-2 rounded md:col-span-2"><?= $edit ? 'Update' : 'Add'; ?> Project</button>
</form>
<div class="overflow-auto">
<table class="w-full bg-white rounded shadow text-sm"><tr class="bg-slate-200"><th class="p-2">Title</th><th>Actions</th></tr>
<?php while($r=mysqli_fetch_assoc($rows)): ?>
<tr class="border-t"><td class="p-2"><?= htmlspecialchars($r['title']); ?></td><td class="p-2"><a class="text-blue-600" href="?edit=<?= $r['id']; ?>">Edit</a> | <a class="text-red-600" href="?delete=<?= $r['id']; ?>" onclick="return confirm('Delete?')">Delete</a></td></tr>
<?php endwhile; ?></table></div>
<?php adminFooter(); ?>
