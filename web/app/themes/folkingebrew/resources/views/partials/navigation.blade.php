@if ($primary_navigation)
  @foreach ($primary_navigation as $item)
    @if (! $item->children) 
      <a class="transition-all flex items-center text-white
      px-3 text-l font-medium whitespace-nowrap
      motion-reduce:transition-none motion-reduce:transform-none hover:text-green {{ $item->active ? 'text-green' : '' }}" href="{{ $item->url }}">
        {{ $item->label }}
      </a>
    @endif
  @endforeach
@endif