<?php
function adminHeader(string $title): void
{
    echo '<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><script src="https://cdn.tailwindcss.com"></script><title>' . htmlspecialchars($title) . '</title></head><body class="bg-slate-100">';
    echo '<div class="max-w-6xl mx-auto p-4">';
    echo '<div class="flex flex-wrap gap-2 mb-4"><a class="px-3 py-2 bg-slate-900 text-white rounded" href="/portfolio/admin/dashboard.php">Dashboard</a><a class="px-3 py-2 bg-slate-900 text-white rounded" href="/portfolio/admin/projects.php">Projects</a><a class="px-3 py-2 bg-slate-900 text-white rounded" href="/portfolio/admin/certificates.php">Certificates</a><a class="px-3 py-2 bg-slate-900 text-white rounded" href="/portfolio/admin/skills.php">Skills</a><a class="px-3 py-2 bg-slate-900 text-white rounded" href="/portfolio/admin/messages.php">Messages</a><a class="px-3 py-2 bg-red-600 text-white rounded" href="/portfolio/admin/logout.php">Logout</a></div>';
}
function adminFooter(): void
{
    echo '</div></body></html>';
}
