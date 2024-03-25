<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
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

    <section id="registration-form">
        <h2>FORM PENDAFTARAN</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="fullname">Nama Lengkap:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin:</label>
                <select id="gender" name="gender">
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="place">Tempat Lahir:</label>
                <input type="text" id="place" name="place" required>
            </div>
            <div class="form-group">
                <label for="birthdate">Tanggal Lahir:</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>
            <div class="form-group">
                <label for="religion">Agama:</label>
                <input type="text" id="religion" name="religion" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{9,}" required>
                <small>Contoh: 081234567890</small>
            </div>
            <div class="form-group">
                <label for="mothername">Nama Ibu:</label>
                <input type="text" id="mothername" name="mothername" required>
            </div>
            <div class="form-group">
                <label for="fathername">Nama Ayah:</label>
                <input type="text" id="fathername" name="fathername" required>
            </div>
            <div class="form-group">
                <label for="parentphone">Nomor Telepon Wali:</label>
                <input type="tel" id="parentphone" name="parentphone" pattern="[0-9]{9,}" required>
                <small>Contoh: 081234567890</small>
            </div>
            <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="text" id="email" name="email" required>
                <small>Catatan : Alamat E-mail aktif!</small>
            </div>
            <div class="form-group">
                <label for="school">Asal Sekolah:</label>
                <input type="text" id="school" name="school" required>
            </div>
            <button type="submit">KIRIM</button>
        </form>
    </section>

    <footer>
        <p>Hak Cipta &copy; 2024 Perusahaan Kami</p>
    </footer>
</body>
</html>
