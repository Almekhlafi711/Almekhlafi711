<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$supportedLangs = ['en', 'ar'];
if (isset($_GET['lang']) && in_array($_GET['lang'], $supportedLangs, true)) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'] ?? 'en';
$rtl = $lang === 'ar';

$supportedThemes = ['dark', 'light'];
if (isset($_GET['theme']) && in_array($_GET['theme'], $supportedThemes, true)) {
    $_SESSION['theme'] = $_GET['theme'];
}
$theme = $_SESSION['theme'] ?? 'dark';

$translations = [
    'en' => [
        'home' => 'Home', 'about' => 'About', 'projects' => 'Projects', 'skills' => 'Skills',
        'certificates' => 'Certificates', 'contact' => 'Contact', 'admin' => 'Admin',
        'hero_title' => 'Mohammed Hassan Almkhlafi',
        'hero_subtitle' => 'Full Stack Developer',
        'hero_desc' => 'Building useful, elegant, and real-world digital solutions using modern web technologies.',
        'view_projects' => 'View Projects', 'contact_me' => 'Contact Me',
        'featured_projects' => 'Featured Projects', 'skills_preview' => 'Skills Snapshot',
        'cert_preview' => 'Certificates Snapshot',
        'about_title' => 'About Me',
        'about_bio' => 'I am Mohammed Hassan Almkhlafi, a Full Stack Developer from Yemen and a student at Sana\'a University, Faculty of Computer and Information Technology, majoring in Information Technology. I am passionate about programming, solving complex problems, and continuously learning to build impactful real-world applications.',
        'location' => 'Location', 'university' => 'University', 'faculty' => 'Faculty', 'major' => 'Major',
        'all_projects' => 'All Projects', 'tech' => 'Technologies', 'github' => 'GitHub', 'live_demo' => 'Live Demo',
        'all_skills' => 'Technical Skills', 'all_certificates' => 'Certificates',
        'contact_title' => 'Get In Touch', 'name' => 'Name', 'email' => 'Email', 'message' => 'Message',
        'send' => 'Send Message', 'success_msg' => 'Your message has been sent successfully.',
        'whatsapp' => 'WhatsApp', 'linkedin' => 'LinkedIn',
        'footer_text' => 'All rights reserved.', 'read_more' => 'Read More'
    ],
    'ar' => [
        'home' => 'الرئيسية', 'about' => 'من أنا', 'projects' => 'المشاريع', 'skills' => 'المهارات',
        'certificates' => 'الشهادات', 'contact' => 'تواصل', 'admin' => 'الإدارة',
        'hero_title' => 'محمد حسن المخلافي',
        'hero_subtitle' => 'مطور فل ستاك',
        'hero_desc' => 'أبني حلولاً رقمية عملية وأنيقة وواقعية باستخدام تقنيات الويب الحديثة.',
        'view_projects' => 'عرض المشاريع', 'contact_me' => 'تواصل معي',
        'featured_projects' => 'مشاريع مميزة', 'skills_preview' => 'ملخص المهارات',
        'cert_preview' => 'ملخص الشهادات',
        'about_title' => 'نبذة عني',
        'about_bio' => 'أنا محمد حسن المخلافي، مطور فل ستاك من اليمن وطالب في جامعة صنعاء، كلية الحاسوب وتقنية المعلومات، تخصص تقنية المعلومات. شغفي هو البرمجة، وحل المشكلات، والتعلم المستمر لبناء تطبيقات واقعية ذات أثر.',
        'location' => 'الموقع', 'university' => 'الجامعة', 'faculty' => 'الكلية', 'major' => 'التخصص',
        'all_projects' => 'كل المشاريع', 'tech' => 'التقنيات', 'github' => 'جيت هب', 'live_demo' => 'عرض مباشر',
        'all_skills' => 'المهارات التقنية', 'all_certificates' => 'الشهادات',
        'contact_title' => 'تواصل معي', 'name' => 'الاسم', 'email' => 'البريد الإلكتروني', 'message' => 'الرسالة',
        'send' => 'إرسال الرسالة', 'success_msg' => 'تم إرسال رسالتك بنجاح.',
        'whatsapp' => 'واتساب', 'linkedin' => 'لينكدإن',
        'footer_text' => 'جميع الحقوق محفوظة.', 'read_more' => 'المزيد'
    ]
];

$t = $translations[$lang];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
