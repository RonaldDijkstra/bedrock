<header class="site-header bg-black transition-all duration-150 ease-in-out fixed w-full left-0 top-0 z-10 motion-reduce:transition-none">
  <div class="max-w-full mx-auto px-2 relative z-10 sm:px-6">
    <div class="relative flex justify-between h-16 sm:h-20">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white" aria-controls="mobile-menu" aria-expanded="false" id="menu-toggle">
          <span class="sr-only">Open main menu</span>
          <svg class="button-show-nav block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#FFFFFF" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg class="button-hide-nav hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#FFFFFF" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center">
        <a class="brand flex-shrink-0 flex items-center md:w-30" href="{{ home_url('/') }}">
          <img src="{{ asset('images/logo-folkingebrew.svg') }}" class="block h-12 w-auto" alt="Folkingebrew Logo">
        </a>
        <div class="hidden sm:block sm:w-full sm:flex sm:justify-center">
          @if (has_nav_menu('primary_navigation'))
            <nav class="flex justify-center" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
              @include('partials.navigation', ['menu' => 'primary_navigation', 'children' => 'true' ])
            </nav>
          @endif
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex justify-end items-center pr-2 sm:static sm:pr-0 sm:inset-auto md:w-30">
        <button type="button" class="bg-transparent flex text-sm focus:outline-none">
          <span class="sr-only">Open Cart</span>
          <img src="{{ asset('images/icons/cart.svg') }}" class="block w-6 h-6" alt="Cart Icon">
          <span class="text-white w-3">2 <span class="sr-only">products</span></span>
        </button>
      </div>
    </div>
  </div>
</header>
