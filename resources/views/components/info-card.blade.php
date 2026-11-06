@props(['judul', 'isi'])

<div class="card bg-base-100 card-sm shadow-sm">
  <div class="card-body">
    <h3 class="card-title">{{ $judul }}</h3>
    <p>{{ $isi }}</p>
  </div>
</div>
