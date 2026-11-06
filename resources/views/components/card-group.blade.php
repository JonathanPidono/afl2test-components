@props(['title', 'cols' => 3])

<div>
  <h2 class="text-2xl font-bold mb-4">{{ $title }}</h2>
  <div @class([
    'grid grid-cols-1 gap-4',
    'md:grid-cols-2' => $cols == 2,
    'md:grid-cols-3' => $cols == 3,
  ])>
    {{ $slot }}
  </div>
</div>
