@props(['title'])

<section class="bg-base-200 border-b border-base-300">
  <div class="max-w-5xl mx-auto px-4 py-16">
    <h1 class="text-4xl md:text-5xl font-bold">{{ $title }}</h1>
    <p class="mt-4 text-lg max-w-2xl leading-relaxed">
      {{ $slot }}
    </p>
  </div>
</section>
