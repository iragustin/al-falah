<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Pesantren</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo-perusahaan.png') }}" alt="Logo Perusahaan">
        </div>
        
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#management">Kepengurusan</a></li>
                <li><a href="#affiliates">Lembaga Terkait</a></li>               
                <li><a href="#news">Berita</a></li>
                <li><a href="#registration" class="registration-button" >Pendaftaran</a></li>
            </ul>
        </nav>
    </header>

    <section id="news-page">
        <div class="berita-content">

            <div class="foto-berita">
                <img src="{{ asset('images/berita/' . $berita->image) }}" alt="Gambar Berita">
            </div>

            <div class="berita">
                <h1>{{ $berita->title }}</h1>
                <p class="author-berita">Oleh : {{ $berita->author }}</p>
                <div class="berita-isi">{!! $berita->content !!}</div>
            </div>

        </div>
    </section>

    <footer>
        <p>Hak Cipta &copy; 2024 Perusahaan Kami</p>
    </footer>
</body>
</html>
