<!-- BARRA LATERAL -->
<aside class="fixed inset-y-0 hidden w-64 pt-16 overflow-x-hidden overflow-y-auto text-white bg-gray-700 -z-10 sm:block">
    <div class="min-h-full p-4 mt-[116px]">
        <!-- Extract: user_info blade partial -->
        <div class="flex items-center px-6 pb-6 border-b border-gray-100 sm:flex-col">
            <div class="hidden px-3 text-base text-white border rounded-full sm:block">
                <?php
                session_start();
                echo htmlspecialchars($_SESSION['nombre']) . " " . htmlspecialchars($_SESSION['apellido']);
                ?>
            </div>
            <div class="flex items-center justify-center flex-shrink-0 mr-auto text-white border-4 rounded-full sm:mt-4 sm:mx-auto">
                <svg class="w-24 h-24 fill-current sm:w-32 sm:h-32" viewBox="0 0 24 24">
                    <path d="M12,8L10.67,8.09C9.81,7.07 7.4,4.5 5,4.5C5,4.5 3.03,7.46 4.96,11.41C4.41,12.24 4.07,12.67 4,13.66L2.07,13.95L2.28,14.93L4.04,14.67L4.18,15.38L2.61,16.32L3.08,17.21L4.53,16.32C5.68,18.76 8.59,20 12,20C15.41,20 18.32,18.76 19.47,16.32L20.92,17.21L21.39,16.32L19.82,15.38L19.96,14.67L21.72,14.93L21.93,13.95L20,13.66C19.93,12.67 19.59,12.24 19.04,11.41C20.97,7.46 19,4.5 19,4.5C16.6,4.5 14.19,7.07 13.33,8.09L12,8M9,11A1,1 0 0,1 10,12A1,1 0 0,1 9,13A1,1 0 0,1 8,12A1,1 0 0,1 9,11M15,11A1,1 0 0,1 16,12A1,1 0 0,1 15,13A1,1 0 0,1 14,12A1,1 0 0,1 15,11M11,14H13L12.3,15.39C12.5,16.03 13.06,16.5 13.75,16.5A1.5,1.5 0 0,0 15.25,15H15.75A2,2 0 0,1 13.75,17C13,17 12.35,16.59 12,16V16H12C11.65,16.59 11,17 10.25,17A2,2 0 0,1 8.25,15H8.75A1.5,1.5 0 0,0 10.25,16.5C10.94,16.5 11.5,16.03 11.7,15.39L11,14Z" />
                </svg>
            </div>
            <div class="flex flex-col flex-1 ml-4 sm:mt-4 sm:ml-0 sm:items-center">
                <div class="text-2xl text-white sm:hidden">Username</div>
            </div>
        </div>

        <!-- ITEMS DE LA BARRA LATERAL -->
        <div class="mt-4">
            <!-- TODO: add group here and group-hover to the shevron icon to show it only when the group is hovered -->
            <a href="./perfil_usuario.html" class="flex items-center px-10 py-2 text-xl text-gray-100 hover:text-orange-500 sm:px-4 sm:text-base">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 71">
                    <path d="M28.559 5.848c2.665-6.75 12.217-6.75 14.882 0l.691 1.751a8 8 0 009.784 4.712l1.8-.551c6.938-2.125 12.895 5.343 9.279 11.635l-.938 1.632a8 8 0 002.416 10.587l1.553 1.063c5.988 4.1 3.862 13.413-3.311 14.51l-1.86.284a8 8 0 00-6.771 8.49l.136 1.877c.528 7.238-8.079 11.382-13.408 6.457l-1.382-1.277a8 8 0 00-10.86 0l-1.382 1.277c-5.33 4.925-13.936.78-13.408-6.457l.136-1.877a8 8 0 00-6.77-8.49l-1.86-.285c-7.174-1.096-9.3-10.409-3.312-14.509l1.553-1.063a8 8 0 002.416-10.587l-.938-1.632c-3.616-6.292 2.34-13.76 9.28-11.635l1.799.55a8 8 0 009.784-4.71l.69-1.752z" fill="none" />
                </svg>
                <div class="flex-1 ml-6 sm:ml-4">Perfil</div>
                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M9.3 8.7a1 1 0 011.4-1.4l4 4a1 1 0 010 1.4l-4 4a1 1 0 01-1.4-1.4l3.29-3.3-3.3-3.3z" />
                </svg>
            </a>

            <a href="./canciones.html" class="flex items-center px-10 py-2 text-xl text-gray-100 hover:text-orange-500 sm:px-4 sm:text-base">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 71">
                    <path d="M28.559 5.848c2.665-6.75 12.217-6.75 14.882 0l.691 1.751a8 8 0 009.784 4.712l1.8-.551c6.938-2.125 12.895 5.343 9.279 11.635l-.938 1.632a8 8 0 002.416 10.587l1.553 1.063c5.988 4.1 3.862 13.413-3.311 14.51l-1.86.284a8 8 0 00-6.771 8.49l.136 1.877c.528 7.238-8.079 11.382-13.408 6.457l-1.382-1.277a8 8 0 00-10.86 0l-1.382 1.277c-5.33 4.925-13.936.78-13.408-6.457l.136-1.877a8 8 0 00-6.77-8.49l-1.86-.285c-7.174-1.096-9.3-10.409-3.312-14.509l1.553-1.063a8 8 0 002.416-10.587l-.938-1.632c-3.616-6.292 2.34-13.76 9.28-11.635l1.799.55a8 8 0 009.784-4.71l.69-1.752z" fill="none" />
                </svg>
                <div class="flex-1 ml-6 sm:ml-4">Canciones</div>
                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M9.3 8.7a1 1 0 011.4-1.4l4 4a1 1 0 010 1.4l-4 4a1 1 0 01-1.4-1.4l3.29-3.3-3.3-3.3z" />
                </svg>
            </a>
        </div>
    </div>
</aside>