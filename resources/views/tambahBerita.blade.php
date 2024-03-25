<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Web Pesantren</title>
    <link rel="stylesheet" href="{{ asset('css/stylesadmin.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Mengambil URL saat ini
            var currentUrl = window.location.href;
    
            // Loop melalui setiap item navbar
            $('.navbar li').each(function() {
                var menuUrl = $(this).find('a').attr('href');
                
                // Memeriksa apakah URL saat ini cocok dengan URL menu
                if (currentUrl.indexOf(menuUrl) !== -1) {
                    $(this).addClass('active');
                }
            });
        });
    </script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

</head>
<body>

    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo-perusahaan.png') }}" alt="Logo Pesantren XYZ">
        </div>
        <ul class="navbar">
            <li><a href="admin_pengasuh.html">Data Pengasuh</a></li>
            <li><a href="admin_infopendaftaran.html">Info Pendaftaran</a></li>
            <li><a href="admin_pendaftar.html">List Pendaftar</a></li>
            <li><a href="/admin/berita">Berita</a></li>
        </ul>
    </div>



    <div class="content">
        <!-- Konten admin panel -->
        <div class="container-head">
            <h1>PANEL ADMIN PONDOK PESANTREN AL-QUR'AN AL-FALAH</h1>

        </div>
        <!-- Tempatkan konten admin di sini -->


        <div class="container">
    
            <!-- Form tambah berita -->
            <div class="container-form">
                
                
                @isset($berita)
                <h1>EDIT BERITA</h1>
                <form action="/admin/berita/edit/{{ $berita->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul:</label>
                        <input type="text" id="judul" name="judul" value="{{ $berita->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" id="author" name="author" value="{{ $berita->author }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" id="tanggal" name="tanggal" value="{{ $berita->date }}" required>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Berita:</label>
                        <textarea name="isi">{{ $berita->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" id="foto" name="foto" accept="image/*">
                    </div>
                    
                    <div class="add-news-button">
                        <button type="submit">Edit Berita</button>
                    </div>

                    
                </form>
                @else
                <h1>TAMBAH BERITA</h1>

                <form action="/admin/berita" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul:</label>
                        <input type="text" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" id="author" name="author" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" id="tanggal" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Berita:</label>
                        <textarea name="isi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" id="foto" name="foto" accept="image/*" required>
                    </div>

                    <div class="add-news-button">
                        <button type="submit">Tambah Berita</button>
                    </div>
                    
                </form>

                @endisset
            </div>

        </div>
        
    </div>
    <script>
        CKEDITOR.replace( 'isi' );
    </script>

</body>
</html>
