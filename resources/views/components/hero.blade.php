@props(['hero'])

<div class="hero bg-base-200 py-20">
  <div class="hero-content text-center">
    <div class="max-w-2xl">
      <h1 class="text-5xl font-bold">{{ $hero['Judul'] }}</h1>
      <p class="py-6">{{ $hero['Deskripsi'] }}</p>
      <a href="{{ route($hero['Route']) }}" class="btn btn-primary">{{ $hero['Tombol'] }}</a>
    </div>
  </div>
</div>
