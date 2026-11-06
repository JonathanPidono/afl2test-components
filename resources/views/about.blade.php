<x-layout title="About">

  <x-hero :hero="$hero" />

  <div class="max-w-5xl mx-auto px-4 py-16 space-y-12">

    <x-card-group title="Isi Website">
      @foreach ($isi as $item)
        <x-info-card :judul="$item['File']" :isi="$item['Fungsi']" />
      @endforeach
    </x-card-group>

    <x-card-group title="Teknologi">
      @foreach ($teknologi as $item)
        <x-info-card :judul="$item['Teknologi']" :isi="$item['Fungsi']" />
      @endforeach
    </x-card-group>

    <x-card-group title="Pembuat">
      @foreach ($anggota as $orang)
        <x-info-card :judul="$orang['Nama']" :isi="'NIM ' . $orang['Nim']" />
      @endforeach
    </x-card-group>

  </div>

</x-layout>
