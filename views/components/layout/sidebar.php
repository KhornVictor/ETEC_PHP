<aside class="flex flex-row items-center justify-between gap-6 border-b border-slate-200 bg-gradient-to-b from-slate-50 to-slate-100 px-3 py-3 lg:flex-col lg:items-center lg:border-b-0 lg:border-r lg:px-3 lg:py-4">
    <?php
    $activeClasses = 'bg-slate-900 text-white';
    $inactiveClasses = 'bg-white text-slate-500 hover:bg-slate-900 hover:text-white';
    ?>

    <div class="grid h-8 w-8 place-items-center rounded-[10px] text-sm font-extrabold text-[#d4f5d9]" aria-label="Brand">
        <img src="public/images/favicon.ico" class="object-cover w-full h-full" alt="">
    </div>

    <nav class="flex gap-3 lg:mt-2 lg:grid" aria-label="Primary">
        <a href="?page=dashboard" class="h-9 w-9 grid place-items-center rounded-[11px] border border-slate-200 text-sm font-bold transition hover:-translate-y-px <?php echo ($page === 'dashboard') ? $activeClasses : $inactiveClasses; ?>" title="Dashboard"><i class="fa-solid fa-house"></i></a>
        <a href="?page=course" class="h-9 w-9 grid place-items-center rounded-[11px] border border-slate-200 text-sm font-bold transition hover:-translate-y-px <?php echo ($page === 'course') ? $activeClasses : $inactiveClasses; ?>" title="Courses"><i class="fa-solid fa-graduation-cap"></i></a>
        <a href="?page=homework" class="h-9 w-9 grid place-items-center rounded-[11px] border border-slate-200 text-sm font-bold transition hover:-translate-y-px <?php echo ($page === 'homework') ? $activeClasses : $inactiveClasses; ?>" title="Homework"><i class="fa-solid fa-bookmark"></i></a>
        <a href="?page=practice" class="h-9 w-9 grid place-items-center rounded-[11px] border border-slate-200 text-sm font-bold transition hover:-translate-y-px <?php echo ($page === 'practice') ? $activeClasses : $inactiveClasses; ?>" title="Practice"><i class="fa-solid fa-chart-bar"></i></a>
    </nav>

    <div class="flex gap-3 lg:mt-auto lg:grid">
        <button class="h-9 w-9 rounded-[11px] border border-slate-200 bg-white text-sm font-bold text-slate-500 transition hover:-translate-y-px hover:bg-slate-900 hover:text-white" title="Support"><i class="fa-brands fa-hire-a-helper"></i></button>
        <button class="h-9 w-9 rounded-[11px] border border-slate-200 bg-white text-sm font-bold text-slate-500 transition hover:-translate-y-px hover:bg-slate-900 hover:text-white" title="Settings"><i class="fa-solid fa-gear"></i></button>
    </div>
</aside>