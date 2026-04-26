<?php
$page = $_GET['page'] ?? 'dashboard';

$allowedPages = ['dashboard', 'course', 'homework', 'practice'];
if (!in_array($page, $allowedPages, true)) {
	$page = 'dashboard';
}

$pageTitles = [
	'dashboard' => 'Dashboard',
	'course' => 'Courses',
	'homework' => 'Homework',
	'practice' => 'Practice',
];

$pageTitle = $pageTitles[$page] ?? 'Dashboard';
?>

<div class="grid w-full h-screen overflow-hidden rounded-[28px] border border-slate-200 bg-white shadow-[0_20px_45px_-28px_rgba(17,21,27,0.24)] lg:grid-cols-[82px_1fr]">
	<?php include 'views/components/layout/sidebar.php'; ?>

	<main class="bg-white/90 p-4 md:p-6 w-full h-full flex flex-col overflow-hidden">
		<?php include 'views/components/layout/header.php'; ?>
		<?php include 'views/pages/' . $page . '.php'; ?>
	</main>
</div>
