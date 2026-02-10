<?php
session_start();
require_once __DIR__ . '/../includes/db.php';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $result = mysqli_query($conn, "SELECT * FROM admin_users WHERE username='$username' LIMIT 1");
    $admin = mysqli_fetch_assoc($result);
    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_username'] = $admin['username'];
        header('Location: /portfolio/admin/dashboard.php');
        exit;
    }
    $error = 'Invalid credentials';
}
?>
<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<script src="https://cdn.tailwindcss.com"></script><title>Admin Login</title></head>
<body class="min-h-screen bg-slate-100 flex items-center justify-center">
<form method="post" class="bg-white p-6 rounded-xl shadow-xl w-full max-w-sm space-y-3">
<h1 class="text-2xl font-bold">Admin Login</h1>
<?php if ($error): ?><p class="text-red-600 text-sm"><?= htmlspecialchars($error); ?></p><?php endif; ?>
<input name="username" required placeholder="Username" class="w-full p-2 border rounded">
<input name="password" type="password" required placeholder="Password" class="w-full p-2 border rounded">
<button class="w-full bg-blue-700 text-white p-2 rounded">Login</button>
<a href="/portfolio/index.php" class="text-sm text-blue-600">Back to site</a>
</form></body></html>
