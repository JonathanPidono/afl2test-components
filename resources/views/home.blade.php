<x-layout title="Home">

  <x-hero :hero="$hero" />

  <x-section title="Siapa Kartini?">
    <div class="space-y-4 leading-relaxed">
      @foreach ($pengantar as $paragraf)
        <p>{{ $paragraf }}</p>
      @endforeach
    </div>
  </x-section>

  <x-section title="Sekilas" class="border-y border-base-300">
    <dl class="divide-y divide-base-300">
      @foreach ($sekilas as $item)
        <div class="py-4 grid grid-cols-3 gap-4">
          <dt class="font-semibold">{{ $item['Label'] }}</dt>
          <dd class="col-span-2">{{ $item['Isi'] }}</dd>
        </div>
      @endforeach
    </dl>
  </x-section>

</x-layout>
