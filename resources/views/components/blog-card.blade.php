@props(['post'])

<div class="card card-border bg-base-100">
  <div class="card-body">
    <p class="text-sm font-semibold opacity-60">{{ $post['Tanggal'] }}</p>
    <h3 class="card-title">{{ $post['Judul'] }}</h3>
    <p>{{ $post['Artikel'] }}</p>
  </div>
</div>
