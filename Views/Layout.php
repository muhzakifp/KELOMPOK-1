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

                <div class="flex grow flex-col gap-y-4 overflow-y-auto bg-white px-5 pb-2 dark:bg-gray-900">
                    <div class="flex h-14 shrink-0 items-center">
                        <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="SIAKAD"
                            class="h-7 w-auto dark:hidden" />
                        <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="SIAKAD"
                            class="h-7 w-auto hidden dark:block" />
                    </div>
                    <nav class="flex flex-1 flex-col">
                        <ul role="list" class="flex flex-1 flex-col gap-y-6">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <a href="dashboard.php"
                                            class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-xs/5 font-semibold text-indigo-600 dark:bg-white/5 dark:text-white">
                                            Dashboard
                                        </a>
                                    </li>
                                </ul>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <a href="#"
                                            class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-xs/5 font-semibold text-indigo-600 dark:bg-white/5 dark:text-white">
                                            Dashboard
                                        </a>
                                    </li>
                                </ul>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <a href="#"
                                            class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-xs/5 font-semibold text-indigo-600 dark:bg-white/5 dark:text-white">
                                            Dashboard
                                        </a>
                                    </li>
                                </ul>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <a href="motor_besar.php"
                                            class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-xs/5 font-semibold text-indigo-600 dark:bg-white/5 dark:text-white">
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

    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-64 lg:flex-col dark:bg-gray-900">
        <div
            class="flex grow flex-col gap-y-4 overflow-y-auto border-r border-gray-200 bg-white px-5 dark:border-white/10 dark:bg-black/10">

            <div class="flex h-14 shrink-0 items-center">
                <h1 class="text-lg font-bold text-indigo-600 dark:text-white">SIAKAD - OOP</h1>
            </div>

            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-6">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            <li>
                                <a href="dashboard.php"
                                    class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-xs/5 font-semibold text-indigo-600 dark:bg-white/5 dark:text-white">
                                    <svg class="size-5 shrink-0 text-indigo-600 dark:text-white" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Beranda
                                </a>
                            </li>
                        </ul>
                        <ul role="list" class="-mx-2 space-y-1 mt-3">
                            <li>
                                <a href="#"
                                    class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-xs/5 font-semibold text-indigo-600 dark:bg-white/5 dark:text-white">
                                    <svg class="size-5 shrink-0 text-indigo-600 dark:text-white" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Beranda
                                </a>
                            </li>
                        </ul>
                        <ul role="list" class="-mx-2 space-y-1 mt-3">
                            <li>
                                <a href="#"
                                    class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-xs/5 font-semibold text-indigo-600 dark:bg-white/5 dark:text-white">
                                    <svg class="size-5 shrink-0 text-indigo-600 dark:text-white" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Beranda
                                </a>
                            </li>
                        </ul>
                        <ul role="list" class="-mx-2 space-y-1 mt-3">
                            <li>
                                <a href="MotorBesar.php"
                                    class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-xs/5 font-semibold text-indigo-600 dark:bg-white/5 dark:text-white">
                                    <svg class="size-5 shrink-0 text-indigo-600 dark:text-white" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Motor Besar
                                </a>
                            </li>
                        </ul>
                </ul>
                </li>

                <li class="-mx-6 mt-auto">
                    <a href="#"
                        class="flex items-center gap-x-4 px-6 py-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                            class="size-8 rounded-full bg-gray-50 outline -outline-offset-1 outline-black/5 dark:bg-gray-800 dark:outline-white/10" />
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
            <p>&copy; 2026 Sistem Informasi Akademik.</p>
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