@props(['judul', 'isi'])

<article class="card card-border bg-base-100">
  <div class="card-body">
    <h2 class="card-title text-xl">{{ $judul }}</h2>
    <p class="leading-relaxed">{{ $isi }}</p>
  </div>
</article>
