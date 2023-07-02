<header class="site-header bg-black transition-all duration-150 ease-in-out fixed w-full left-0 top-0 z-10 motion-reduce:transition-none">
  <a class="brand" href="{{ home_url('/') }}">
    <img src="{{ asset('images/logo-folkingebrew.svg') }}" alt="Folkingebrew Logo">
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
