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

    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    <div class="content">
        <!-- Konten admin panel -->
        <div class="container-head">
            <h1>PANEL ADMIN PONDOK PESANTREN AL-QUR'AN AL-FALAH</h1>

        </div>
        <!-- Tempatkan konten admin di sini -->


        <div class="container">
    
            <h1>Berita</h1>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Author</th>
                        <th>Tanggal</th>
                        <th>Isi Berita</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td><img
                        style="width: 100px; height: 100px;" src="{{ asset('images/berita/'.$b->image) }}" alt="image"></td>
                        <td>{{ $b->title }}</td>
                        <td>{{ $b->author }}</td>
                        <td>{{ $b->date }}</td>
                        <td>{!! substr($b->content, 0, 100) !!}...</td>
                        <td>
                            <a href="/berita/{{ $b->slug }}"><button>Lihat</button></a>
                            <a href="/admin/berita/edit/{{ $b->id }}"><button>Edit</button></a>
                            <a href="/admin/berita/hapus/{{ $b->id }}"><button>Hapus</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="add-news-button">
                <a href="/admin/berita/tambah"><button>Tambah Berita</button></a>
            </div>
        </div>
        
    </div>

</body>
</html>
