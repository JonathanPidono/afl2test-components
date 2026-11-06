@props(['title'])

<section {{ $attributes }}>
  <div class="max-w-5xl mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
    <h2 class="text-2xl md:text-3xl font-semibold">{{ $title }}</h2>
    <div class="md:col-span-2">
      {{ $slot }}
    </div>
  </div>
</section>
