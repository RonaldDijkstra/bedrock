<header class="site-header bg-black transition-all duration-150 ease-in-out fixed w-full left-0 top-0 z-10 motion-reduce:transition-none">
  <div class="max-w-full mx-auto px-2 relative z-10 sm:px-6">
    <div class="relative flex justify-between h-16 sm:h-20">
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
