<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Web Pesantren</title>
    <link rel="stylesheet" href="{{ asset('css/stylesadmin.css') }}">
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

    <div class="container">
        <h1>Admin Panel - Web Pesantren</h1>
        <h2>Data Pengasuh</h2>
        <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Pengurus -->
            </tbody>
        </table>

        <h2>Pendaftaran</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Instansi</th>
                    <th>Foto Brosur</th>
                    <th>Link Pendaftaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Pendaftaran -->
            </tbody>
        </table>

        <h2>Berita</h2>
        <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Author</th>
                    <th>Tanggal</th>
                    <th>Isi Berita</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Berita -->
            </tbody>
        </table>
    </div>
</body>
</html>
