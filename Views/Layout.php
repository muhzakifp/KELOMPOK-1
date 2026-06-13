<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'SIAKAD OOP'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-900 font-sans antialiased dark:bg-gray-900 dark:text-white">

    <div id="mobile-sidebar" class="relative z-50 lg:hidden hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-900/80"></div>

        <div class="fixed inset-0 flex">
            <div class="relative mr-16 flex w-full max-w-xs flex-1 transform transition duration-300 ease-in-out">

                <div class="absolute top-0 left-full flex w-16 justify-center pt-5">
                    <button id="close-sidebar-btn" type="button" class="-m-2.5 p-2.5">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex grow flex-col gap-y-4 overflow-y-auto bg-[#1e2135] px-5 pb-2">
                    <div class="flex h-14 shrink-0 items-center">
                        <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=300" alt="SIAKAD"
                            class="h-7 w-auto" />
                    </div>
                    <nav class="flex flex-1 flex-col">
                        <ul role="list" class="flex flex-1 flex-col gap-y-6">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <a href="dashboard.php"
                                            class="group flex gap-x-3 rounded-md bg-white/5 hover:bg-white/10 p-2 text-xs/5 font-semibold text-white">
                                            <svg class="size-5 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                            </svg>
                                            Dashboard
                                        </a>
                                    </li>
                                </ul>
                                <ul role="list" class="-mx-2 space-y-1 mt-3">
                                    <li>
                                        <a href="DaftarKendaraan.php"
                                            class="group flex gap-x-3 rounded-md bg-white/5 hover:bg-white/10 p-2 text-xs/5 font-semibold text-white">
                                            <svg class="size-5 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                            </svg>
                                            Daftar Kendaraan
                                        </a>
                                    </li>
                                </ul>
                                <ul role="list" class="-mx-2 space-y-1 mt-3">
                                    <li>
                                        <a href="MobilKonvesional.php"
                                            class="group flex gap-x-3 rounded-md bg-white/5 hover:bg-white/10 p-2 text-xs/5 font-semibold text-white">
                                           <svg class="size-5 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.866 8.21 8.21 0 003 2.48z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                                            </svg>
                                           Mobil Konvesional
                                        </a>
                                    </li>
                                </ul>
                                <ul role="list" class="-mx-2 space-y-1 mt-3">
                                    <li>
                                        <a href="MobilListrik.php"
                                            class="group flex gap-x-3 rounded-md bg-white/5 hover:bg-white/10 p-2 text-xs/5 font-semibold text-white">
                                           <svg class="size-5 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                            </svg>
                                           Mobil Listrik
                                        </a>
                                    </li>
                                </ul>
                                <ul role="list" class="-mx-2 space-y-1 mt-3">
                                    <li>
                                        <a href="MotorBesar.php"
                                            class="group flex gap-x-3 rounded-md bg-white/5 hover:bg-white/10 p-2 text-xs/5 font-semibold text-white">
                                            <svg class="size-5 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.79l.867-1.221m7.264-10.231l.867-1.221m-4.522 10.982l.346-1.458m2.351-12.048l.346-1.458" />
                                            </svg>
                                            Motor Besar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-64 lg:flex-col">
        <div
            class="flex grow flex-col gap-y-4 overflow-y-auto border-r border-[#1e2135] bg-[#1e2135] px-5 shadow-lg">

            <div class="flex h-14 shrink-0 items-center">
                <h1 class="text-lg font-bold text-white">SIAKAD - OOP</h1>
            </div>

            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-6">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            <li>
                                <a href="dashboard.php"
                                    class="group flex gap-x-3 rounded-md bg-white/5 hover:bg-white/10 p-2 text-xs/5 font-semibold text-white">
                                    <svg class="size-5 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                        </ul>
                        <ul role="list" class="-mx-2 space-y-1 mt-3">
                            <li>
                                <a href="DaftarKendaraan.php"
                                    class="group flex gap-x-3 rounded-md bg-white/5 hover:bg-white/10 p-2 text-xs/5 font-semibold text-white">
                                    <svg class="size-5 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                   Daftar kendaraan
                                </a>
                            </li>
                        </ul>
                        <ul role="list" class="-mx-2 space-y-1 mt-3">
                            <li>
                                <a href="MobilKonvesional.php"
                                    class="group flex gap-x-3 rounded-md bg-white/5 hover:bg-white/10 p-2 text-xs/5 font-semibold text-white">
                                    <svg class="size-5 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.866 8.21 8.21 0 003 2.48z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                                    </svg>
                                   Mobil Konvesional
                                </a>
                            </li>
                        </ul>
                        <ul role="list" class="-mx-2 space-y-1 mt-3">
                            <li>
                                <a href="MobilListrik.php"
                                    class="group flex gap-x-3 rounded-md bg-white/5 hover:bg-white/10 p-2 text-xs/5 font-semibold text-white">
                                    <svg class="size-5 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                    </svg>
                                    Mobil listrik
                                </a>
                            </li>
                        </ul>
                        <ul role="list" class="-mx-2 space-y-1 mt-3">
                            <li>
                                <a href="MotorBesar.php"
                                    class="group flex gap-x-3 rounded-md bg-white/5 hover:bg-white/10 p-2 text-xs/5 font-semibold text-white">
                                    <svg class="size-5 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.79l.867-1.221m7.264-10.231l.867-1.221m-4.522 10.982l.346-1.458m2.351-12.048l.346-1.458" />
                                    </svg>
                                    Motor Besar
                                </a>
                            </li>
                        </ul>
                </ul>
                </li>

                <li class="-mx-6 mt-auto">
                    <a href="#"
                        class="flex items-center gap-x-4 px-6 py-3 text-sm/6 font-semibold text-white hover:bg-white/10">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                            class="size-8 rounded-full bg-gray-50 outline -outline-offset-1 outline-black/5" />
                        <span class="sr-only">Your profile</span>
                        <span aria-hidden="true">Admin SIAKAD</span>
                    </a>
                </li>
                </ul>
            </nav>
        </div>
    </div>

    <div
        class="sticky top-0 z-40 flex items-center gap-x-6 bg-white px-4 py-4 shadow-sm sm:px-6 lg:hidden dark:bg-gray-900 dark:shadow-none border-b dark:border-white/10">
        <button id="open-sidebar-btn" type="button"
            class="-m-2.5 p-2.5 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
            <span class="sr-only">Open sidebar</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        <div class="flex-1 text-sm/6 font-semibold text-gray-900 dark:text-white">
            <?php echo isset($title) ? $title : 'Dashboard'; ?>
        </div>
        <a href="#">
            <span class="sr-only">Your profile</span>
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="" class="size-8 rounded-full bg-gray-50 dark:bg-gray-800" />
        </a>
    </div>

    <div class="lg:pl-72">
        <main class="py-8">
            <div class="px-4 sm:px-6 lg:px-8">
                <div
                    class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-xl p-6 md:p-8 min-h-[75vh]">

                    <?php echo isset($content) ? $content : ''; ?>

                </div>
            </div>
        </main>

        <footer class="text-center py-6 text-gray-500 dark:text-gray-400 text-sm">
            <p>&copy; 2026 Showroom Kendaraan.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const openSidebarBtn = document.getElementById('open-sidebar-btn');
    const closeSidebarBtn = document.getElementById('close-sidebar-btn');

    if (openSidebarBtn) {
        openSidebarBtn.addEventListener('click', function() {
            mobileSidebar.classList.remove('hidden');
        });
    }

    if (closeSidebarBtn) {
        closeSidebarBtn.addEventListener('click', function() {
            mobileSidebar.classList.add('hidden');
        });
    }
    </script>
</body>

</html>