<x-layout title="Home">

  <section class="bg-base-200 border-b border-base-300">
    <div class="max-w-5xl mx-auto px-4 py-20 md:py-28">
      <h1 class="text-4xl md:text-6xl font-bold leading-tight max-w-3xl">
        Raden Adjeng Kartini
      </h1>
      <p class="mt-4 text-lg text-base-content/80">1879 sampai 1904, Jepara dan Rembang</p>
      <p class="mt-6 text-lg leading-relaxed max-w-2xl">
        Ia hanya hidup 25 tahun, tetapi surat-suratnya mengubah cara bangsa ini memandang
        pendidikan bagi perempuan. Website ini mengajak kamu mengenal siapa Kartini dan apa
        yang ia perjuangkan.
      </p>
      <div class="mt-8 flex flex-wrap gap-3">
        <a href="{{ route('blog') }}" class="btn btn-primary">Baca kisahnya</a>
        <a href="{{ route('about') }}" class="btn btn-ghost border border-base-300">Tentang website ini</a>
      </div>
    </div>
  </section>

  <x-section title="Siapa Kartini?">
    <div class="space-y-4 leading-relaxed">
      <p>
        Kartini adalah putri Bupati Jepara. Ia sempat bersekolah di sekolah dasar Belanda,
        tetapi pada usia 12 tahun harus berhenti dan tinggal di rumah sesuai adat bangsawan Jawa
        pada masa itu.
      </p>
      <p>
        Dari dalam rumah ia terus membaca dan menulis surat kepada sahabat-sahabatnya di Belanda.
        Ia menulis tentang keinginannya agar anak perempuan boleh belajar, bukan hanya menunggu
        dinikahkan. Setelah Kartini wafat, surat-surat itu dibukukan dan kini dikenal sebagai
        <span class="font-semibold">Habis Gelap Terbitlah Terang</span>.
      </p>
    </div>
  </x-section>

  <x-section title="Sekilas" bordered>
    <dl class="divide-y divide-base-300">
      <x-info-row label="Lahir">21 April 1879, Jepara, Jawa Tengah</x-info-row>
      <x-info-row label="Wafat">17 September 1904, Rembang, Jawa Tengah</x-info-row>
      <x-info-row label="Dikenal lewat">
        Surat-surat yang dibukukan menjadi <span class="font-semibold">Door Duisternis tot Licht</span> (1911)
      </x-info-row>
      <x-info-row label="Gelar">Pahlawan Kemerdekaan Nasional (Keppres No. 108 Tahun 1964)</x-info-row>
      <x-info-row label="Diperingati">Setiap 21 April sebagai Hari Kartini</x-info-row>
    </dl>
  </x-section>

</x-layout>
