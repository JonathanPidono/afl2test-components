<x-layout title="About">

  <x-page-header title="Tentang Website Ini">
    Website ini dibuat sebagai tugas kelompok untuk belajar Laravel dan Tailwind CSS,
    dengan R.A. Kartini sebagai tokoh yang kami angkat.
  </x-page-header>

  <x-section title="Tujuan">
    <div class="space-y-4 leading-relaxed">
      <p>
        Banyak orang mengenal Kartini hanya dari peringatan setiap 21 April. Kami ingin
        menyajikan kisah hidupnya secara singkat dan mudah dibaca, supaya pembaca tahu apa yang
        sebenarnya ia perjuangkan.
      </p>
      <p>
        Selain itu, website ini menjadi latihan kami dalam memakai route, controller, dan view
        di Laravel, serta menyusun tampilan dengan Tailwind CSS.
      </p>
    </div>
  </x-section>

  <x-section title="Isi Website" bordered>
    <dl class="divide-y divide-base-300">
      <x-info-row label="Home">Pengenalan singkat tentang Kartini dan fakta-fakta penting tentang dirinya.</x-info-row>
      <x-info-row label="About">Halaman ini: tujuan website, isi, teknologi, dan anggota kelompok.</x-info-row>
      <x-info-row label="Blog">Kisah hidup Kartini dari tahun 1879 sampai sekarang, dibagi per peristiwa.</x-info-row>
    </dl>
  </x-section>

  <x-section title="Teknologi">
    <ul class="space-y-3 leading-relaxed list-disc pl-5">
      <li><span class="font-semibold">Laravel</span> untuk routing, controller, dan Blade view. Setiap halaman punya route dan controller sendiri.</li>
      <li><span class="font-semibold">Tailwind CSS</span> untuk layout, jarak, tipografi, dan warna.</li>
      <li><span class="font-semibold">daisyUI</span> untuk komponen navbar, tombol, dan card.</li>
    </ul>
  </x-section>

  <x-section title="Pembuat">
    <ul class="space-y-3 leading-relaxed list-disc pl-5">
      <li><span class="font-semibold">Evelyn</span></li>
      <li><span class="font-semibold">Jonathan</span></li>
    </ul>
  </x-section>

</x-layout>
