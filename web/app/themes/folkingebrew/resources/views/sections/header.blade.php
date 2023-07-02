<header class="site-header bg-black transition-all duration-150 ease-in-out fixed w-full left-0 top-0 z-10 motion-reduce:transition-none">
  <div class="max-w-full mx-auto px-2 relative z-10 sm:px-6">
    <div class="relative flex justify-between h-16 sm:h-20">
      <div class="flex-1 flex items-center justify-center">
        <a class="brand flex-shrink-0 flex items-center md:w-30" href="{{ home_url('/') }}">
          <img src="{{ asset('images/logo-folkingebrew.svg') }}" class="block h-12 w-auto" alt="Folkingebrew Logo">
        </a>
        <div class="hidden sm:block sm:w-full sm:flex sm:justify-center">
          @if (has_nav_menu('primary_navigation'))
            <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-navigation', 'echo' => false]) !!}
            </nav>
          @endif
        </div>
      </div>
    </div>
  </div>
</header>
