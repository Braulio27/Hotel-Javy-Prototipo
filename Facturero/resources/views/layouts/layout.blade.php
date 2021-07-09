<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('titulo')</title>
</head>
<body>
    <div>
        <nav class="bg-pink-800">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                </div>
                <div class="hidden md:block">
                  <div class="ml-10 flex items-baseline space-x-4">
                    <!-- Current: "bg-pink-900 text-white", Default: "text-pink-300 hover:bg-pink-700 hover:text-white" -->
                    <a href="#" class="bg-pink-900 text-white px-3 py-2 rounded-md text-sm font-medium">Reservaciones</a>

                    <a href="#" class="text-pink-300 hover:bg-pink-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Clientes</a>

                    <a href="#" class="text-pink-300 hover:bg-pink-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Facturas</a>

                    <a href="#" class="text-pink-300 hover:bg-pink-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Usuarios</a>
                  </div>
                </div>
              </div>
              <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">


                  <!-- Profile dropdown -->
                  <div class="ml-3 relative">
                    <div>
                      <button type="button" class="max-w-xs bg-pink-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-pink-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                      </button>
                    </div>

                    <!--
                      Dropdown menu, show/hide based on menu state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                      <!-- Active: "bg-pink-100", Not Active: "" -->
                      <a href="#" class="block px-4 py-2 text-sm text-pink-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                      <a href="#" class="block px-4 py-2 text-sm text-pink-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                      <a href="#" class="block px-4 py-2 text-sm text-pink-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="bg-pink-800 inline-flex items-center justify-center p-2 rounded-md text-pink-400 hover:text-white hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-pink-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <!--
                    Heroicon name: outline/menu

                    Menu open: "hidden", Menu closed: "block"
                  -->
                  <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                  <!--
                    Heroicon name: outline/x

                    Menu open: "block", Menu closed: "hidden"
                  -->
                  <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <!-- Mobile menu, show/hide based on menu state. -->
          <div class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
              <!-- Current: "bg-pink-900 text-white", Default: "text-pink-300 hover:bg-pink-700 hover:text-white" -->
              <a href="#" class="bg-pink-900 text-white block px-3 py-2 rounded-md text-base font-medium">Reservaciones</a>

              <a href="#" class="text-pink-300 hover:bg-pink-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Clientes</a>

              <a href="#" class="text-pink-300 hover:bg-pink-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Facturas</a>

              <a href="#" class="text-pink-300 hover:bg-pink-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Usuarios</a>
            </div>
            <div class="pt-4 pb-3 border-t border-pink-700">
              <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                  <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="ml-3">
                  <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                  <div class="text-sm font-medium leading-none text-pink-400">tom@example.com</div>
                </div>

              </div>
              <div class="mt-3 px-2 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-pink-400 hover:text-white hover:bg-pink-700">Perfil</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-pink-400 hover:text-white hover:bg-pink-700">Configuraciones</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-pink-400 hover:text-white hover:bg-pink-700">Salir</a>
              </div>
            </div>
          </div>
        </nav>

        <header class="bg-white shadow">
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-pink-900">
              @yield('titutoDePagina')
            </h1>
          </div>
        </header>
        <main>
          <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                @yield('contenido')
            </div>
            <!-- /End replace -->
          </div>
        </main>
      </div>

</body>
</html>
