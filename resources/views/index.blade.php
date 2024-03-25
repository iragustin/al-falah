<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Website Perusahaan</title>
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

    <section id="home">
        <div class="background-image">
            
        </div>
        <div class="headline">
            <h2>PONDOK PESANTREN AL-QUR'AN<br><span class="highlight">AL-FALAH</span><br>CICALENGKA - NAGREG - BANDUNG</h2>
        </div>
        <div class="model-photo">
            <img src="{{ asset('images/model.png') }}" alt="Model Photo">
        </div>
        
    </section>

    <section id="about">
        <div class="about-info">
            <div class="scrollable-text">
                <h2>SEJARAH SINGKAT</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis rutrum nulla, quis vestibulum libero. Nunc eget scelerisque sapien. Phasellus venenatis vel quam ut faucibus. Quisque malesuada tristique commodo. Vestibulum vulputate turpis et faucibus commodo. Duis tristique cursus quam, non blandit velit molestie a. Nunc auctor sem id gravida eleifend. Sed ligula nulla, varius ut efficitur efficitur, congue in dolor. Vestibulum lacinia metus eu elementum aliquet. Praesent id egestas purus. Sed ante elit, aliquet at risus eget, sollicitudin fringilla metus. Suspendisse porttitor facilisis eros, ut gravida magna maximus quis.

                    Suspendisse condimentum elit sit amet ipsum consectetur, non fringilla magna vestibulum. Duis non odio sed dui rutrum sodales. Proin risus nisl, faucibus non mi sed, pellentesque facilisis nulla. Nulla non neque sed justo pretium consectetur. In arcu risus, vehicula sed egestas et, commodo nec metus. Proin velit velit, eleifend in mauris nec, maximus ornare ipsum. Donec fringilla dui felis, a cursus tortor fringilla sit amet. Cras vehicula elementum ante pulvinar fringilla. In ornare accumsan nisl, in consequat magna interdum at. Nunc in massa a ligula euismod aliquam. Cras non lorem tristique, viverra lorem mattis, molestie sem. Sed gravida finibus magna vel aliquet.

                    Sed id arcu in ligula imperdiet consequat. Maecenas quis enim vitae orci luctus suscipit. Vestibulum sapien est, venenatis quis nibh sit amet, laoreet tempor metus. Morbi finibus mollis dolor. Vestibulum placerat fringilla lectus, at consequat neque. Etiam condimentum tellus est. Donec pharetra laoreet consectetur. Maecenas finibus dictum mauris, eu feugiat ante efficitur ut. Duis auctor mollis vestibulum. In nec velit quis mauris tristique sollicitudin id non massa. Nulla sit amet iaculis ante, et venenatis diam. Vestibulum congue libero vel ipsum pharetra, sit amet viverra lectus accumsan. Quisque sed placerat ipsum. Morbi tellus ante, blandit a pellentesque ut, bibendum eget erat.

                    Morbi in tempor metus. Etiam vitae rhoncus mauris. Cras quis nulla metus. Mauris faucibus, nibh quis accumsan maximus, diam mauris porttitor velit, nec gravida odio nunc gravida purus. Mauris eget enim fringilla, scelerisque felis ac, cursus elit. Praesent eget mauris volutpat, malesuada urna ac, iaculis purus. Morbi finibus maximus odio, eget fringilla purus scelerisque non. Phasellus ipsum est, consectetur vitae leo ut, bibendum pretium justo. Integer ornare volutpat fringilla.

                    Phasellus a neque id metus lobortis accumsan. Etiam mattis diam vel ornare blandit. Fusce lacinia metus pharetra ex sodales aliquam. Suspendisse faucibus sed odio vel bibendum. Quisque eget sem ornare, aliquam tellus nec, venenatis felis. Sed eleifend felis eu enim fringilla rutrum. Nullam sem dolor, ultrices eget placerat id, blandit a eros. Nullam id sem lobortis, dignissim purus ut, hendrerit velit. Curabitur ultricies justo nec diam egestas scelerisque. Mauris finibus tristique faucibus. Sed rhoncus sit amet eros eu placerat. Nunc nec elit elit. Nullam eget lorem quis dui ullamcorper condimentum.
                </p>
                <!-- Tambahkan lebih banyak teks sesuai kebutuhan -->
            </div>
        </div>
        <div class="founder-photo">
            <img src="{{ asset('images/sejarah_singkat.png') }}" alt="Foto Pendiri Perusahaan">
        </div>
    </section>

    <section id="management">
        <button class="scroll-left">&lt;</button>
        <div class="management-content">

            <div class="card-container">
                <!-- card-box 1 -->
                <div class="card-box">
                    <img src="{{ asset('images/pengurus1.jpg') }}" alt="Foto Pengurus 1">
                    <span>KH. Cecep Abdullah Syahid</span>
                </div>               
            </div>
            <div class="card-container">
                <!-- card-box 1 -->
                <div class="card-box">
                    <img src="{{ asset('images/pengurus1.jpg') }}" alt="Foto Pengurus 1">
                    <span>KH. Cecep Abdullah Syahid</span>
                </div>               
            </div>
            <div class="card-container">
                <!-- card-box 1 -->
                <div class="card-box">
                    <img src="{{ asset('images/pengurus1.jpg') }}" alt="Foto Pengurus 1">
                    <span>KH. Cecep Abdullah Syahid</span>
                </div>               
            </div>
            <div class="card-container">
                <!-- card-box 1 -->
                <div class="card-box">
                    <img src="{{ asset('images/pengurus1.jpg') }}" alt="Foto Pengurus 1">
                    <span>KH. Cecep Abdullah Syahid</span>
                </div>               
            </div>
        
        </div>
        <button class="scroll-right">&gt;</button>

        <div class="management-title">
            <h2>JAJARAN DEWAN PENGASUH</h2>
            <p>Pondok pesantren Al-Qur’an Al-falah Cicalengka - Nagreg - bandung</p>
        </div>
        <!-- Daftar kepengurusan -->
    </section>


    <section id="affiliates">
        <div class="affiliates-header">
            <h2>LEMBAGA AL-FALAH</h2>
        </div>
        <div class="affiliates-logos">
            <div class="row">
                <img src="{{ asset('logo/logo1.png') }}" alt="Logo 1">
                <img src="{{ asset('logo/logo2.png') }}" alt="Logo 2">
                <img src="{{ asset('logo/logo3.png') }}" alt="Logo 3">
                <img src="{{ asset('logo/logo4.png') }}" alt="Logo 4">
                <img src="{{ asset('logo/logo5.png') }}" alt="Logo 5">
                <img src="{{ asset('logo/logo6.png') }}" alt="Logo 6">
            </div>
            <div class="row">
                <img src="{{ asset('logo/logo7.png') }}" alt="Logo 7">
                <img src="{{ asset('logo/logo8.jpeg') }}" alt="Logo 8">
                <img src="{{ asset('logo/logo9.png') }}" alt="Logo 9">
                <img src="{{ asset('logo/logo10.png') }}" alt="Logo 10">
                <img src="{{ asset('logo/logo11.png') }}" alt="Logo 11">
                <img src="{{ asset('logo/logo12.png') }}" alt="Logo 12">
            </div>
            <!-- Tambahkan lebih banyak logo sesuai kebutuhan -->
        </div>
    </section>

    <section id="registration">
        <div class="registration-header">
            <h2>INFORMASI PENDAFTARAN</h2>
        </div>
        <div class="registration-content">
            <div class="row">
                    
                   
                </div>
            </div>
                    
            </div>
        </div>
    </section>

    <section id="news">

        <div class="news-header">
            <h2>INFORMASI DAN BERITA</h2>
        </div>

        <div class="news-container">
        <button class="scroll-left">&lt;</button>
        @if (count($berita) > 0)
        <div class="news-content">
            @foreach ($berita as $b)
            <div class="card-container-news">
                <!-- card-box 1 -->
                <div class="card-box-news">
                    <img src="{{ asset('images/berita/' . $b->image) }}" alt="Foto Berita">
                    <h4>{{ $b->title }}</h4>
                    <p class="author">{{ $b->author }}</p>
                    <div class="card-box-news-date">
                        <p>{{ $b->date }}</p>
                        <button><a href="/berita/{{ $b->slug }}">Baca</a></button>
                    </div>
                </div> 
            </div>
            @endforeach  
        </div>
        @endif
        <button class="scroll-right">&gt;</button>
        </div>

    </section>

    <footer>
        <p>Hak Cipta &copy; 2024 Perusahaan Kami</p>
    </footer>
</body>
</html>
