<x-layout title="Blog">

  <x-hero :hero="$hero" />

  <div class="max-w-5xl mx-auto px-4 py-16 space-y-12">

    <x-card-group title="Semasa Hidup" cols="2">
      @foreach ($before as $post)
        <x-blog-card :post="$post" />
      @endforeach
    </x-card-group>

    <x-card-group title="Setelah Wafat" cols="2">
      @foreach ($after as $post)
        <x-blog-card :post="$post" />
      @endforeach
    </x-card-group>

  </div>

</x-layout>
