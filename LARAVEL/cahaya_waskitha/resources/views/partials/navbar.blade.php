
<nav class="bg-nav-color border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
        {{-- BRAND LOGO --}}
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('images/brand.svg') }}"class="h-7" alt="brand logo" />
    </a>
    {{-- END BRAND LOGO --}}

    {{-- CONTAINER ICON SEARCH AND HUMBERGER MENU --}}
    <div class="flex md:order-2">
        {{-- SEARCH ICON --}}
      <button id="navbar-button" type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class=" md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-20 rounded-lg text-sm p-2.5 me-1">
        {{-- IMG LOGO --}}
       
        {{-- IMG LOGO  --}}
        <span class="sr-only">Search</span>
      </button>
      {{-- END SEARCH ICON --}}

      {{-- INPUT SEARCH IN LG SCREEN--}}
      <div class="relative hidden md:block">
        {{-- logo svg --}}
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
          {{-- end logo svg --}}
          <span class="sr-only">Search icon</span>
        </div>
        {{-- input box --}}
        <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "placeholder="Search...">
      </div>
       {{-- INPUT SEARCH IN LG SCREEN--}}
       {{-- HUMBERGER MENU ICON --}}
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
       {{-- HUMBERGER MENU ICON --}}
    </div>
    {{-- END CONTAINER ICON SEARCH AND HUMBERGER MENU --}}
    
      <div id="navbar-default" class="items-center hidden justify-between w-full md:flex md:w-auto md:order-1">
        {{-- SEARCH INSIDE NAVABR --}}
        <div class=" relative mt-3 md:hidden">
            {{-- logo search --}}
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
          </div>
          <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
        </div>
         {{-- END SEARCH INSIDE NAVABR --}}
        <ul class=" bg-nav-color flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-00 rounded-lg md:space-x-[80px] rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:ml-20">
          <li>
            <a href="#" class="block py-2 px-3 text-white md:p-0 md:dark:text-blue-500 hover:bg-gray-100 hover:text-gray-800 md:hover:bg-transparent md:hover:text-white" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 hover:text-gray-800 md:p-0 md:hover:bg-transparent md:hover:text-white">Profile</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 hover:text-gray-800 md:p-0 md:hover:bg-transparent md:hover:text-white">Gallery</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 hover:text-gray-800 md:p-0 md:hover:bg-transparent md:hover:text-white">Testimony</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  