<x-layout title="Blog">

  <x-page-header title="Kisah Hidup Kartini">
    Perjalanan Kartini dari masa kecil di Jepara sampai warisannya hari ini,
    disusun berdasarkan urutan waktu.
  </x-page-header>

  <section class="max-w-5xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      @foreach ($posts as $post)
        <x-blog-card :judul="$post['judul']" :isi="$post['isi']" />
      @endforeach
    </div>
  </section>

</x-layout>
