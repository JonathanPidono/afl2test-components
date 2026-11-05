@props(['label'])

<div class="py-4 grid grid-cols-3 gap-4">
  <dt class="font-semibold">{{ $label }}</dt>
  <dd class="col-span-2">{{ $slot }}</dd>
</div>
