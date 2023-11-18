@extends('layouts.master')

@section('content')

<!--Navigation & Intro-->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" height="60"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--Links-->
                <ul class="navbar-nav ml-auto smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-offset="80">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-offset="80">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-offset="20">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-offset="80">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-offset="80">Berita</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!--/Navbar-->

    <!--Intro Section-->
    <section id="home" class="view" style="background-image: url({{ asset('assets/img/default-background.jpg') }});">
        <div class="mask">
            <div class="container h-70 d-flex justify-content-center align-items-center">
                <div class="row pt-5 mt-3">
                    <div class="col-sm-7 text-center text-md-left text-header">
                        <div class="white-text">
                            <h4 class="h4-responsive font-weight-bold mt-md-5 mt-0 gotham-narrow-black wow fadeInLeft" data-wow-delay="0.3s">
                                Mengapa Memilih Kami ?
                            </h4>
                            <p class="wow fadeInLeft mb-3 text-header-2" data-wow-delay="0.3s">
                                KAMI AHLINYA
                            </p>
                            <p class="wow fadeInLeft mb-3 text-header-3" data-wow-delay="0.3s">
                                Jasa Desain Logo<br>
                                dan Website<br>
                                Sejak 2014
                            </p>
                            <a class="text-header-4" href="#">
                                <p class="wow fadeInLeft mb-3" data-wow-delay="0.3s" >Baca Selengkapnya ...</p>
                            </a>
                            <a href="#" class="btn btn-rounded font-weight-bold ml-lg-0 wow fadeInLeft button-header" data-wow-delay="0.3s">
                                SAYA MAU PESAN !!
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-md-left boat img-header">
                        <img class="img-fluid" src="{{ asset('assets/img/logo.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>
<!--/Navigation & Intro-->

<div class="container">
    <div class="row portofolio-home" id="portofolio-home">

        <div class="col-sm-4 pics animation all 1 view-filter portofolio-home-img">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="{{ asset('assets/img/default-port-1.jpg') }}" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold portofolio-home-text">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 1 view-filter portofolio-home-img">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="{{ asset('assets/img/default-port-2.jpg') }}" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold portofolio-home-text">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 1 view-filter portofolio-home-img">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="{{ asset('assets/img/default-port-3.jpg') }}" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold portofolio-home-text">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 1 view-filter portofolio-home-img">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="{{ asset('assets/img/default-port-1.jpg') }}" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold portofolio-home-text">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 1 view-filter portofolio-home-img">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="{{ asset('assets/img/default-port-2.jpg') }}" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold portofolio-home-text">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 1 view-filter portofolio-home-img">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="{{ asset('assets/img/default-port-3.jpg') }}" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold portofolio-home-text">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 2 view-filter portofolio-home-img">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="{{ asset('assets/img/default-port-4.jpg') }}" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold portofolio-home-text">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 2 view-filter portofolio-home-img">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="{{ asset('assets/img/default-port-5.jpg') }}" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold portofolio-home-text">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-4 pics animation all 2 view-filter portofolio-home-img">
            <div class="waves-effect waves-light">
                <a href="#!">
                    <div class="view overlay">
                        <img src="{{ asset('assets/img/default-port-6.jpg') }}" class="img-fluid" alt="">
                        <div class="mask flex-center rgba-yellow-strong">
                            <h4 class="white-text font-weight-bold portofolio-home-text">1017 Studios</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="col-sm-12 d-flex justify-content-center mb2">
        <button type="button" class="btn btn-rounded btn-white font-weight-bold waves-effect filter button-portofolio" data-rel="all">All</button>
        <button type="button" class="btn btn-rounded btn-white font-weight-bold waves-effect filter button-portofolio" data-rel="1">Logo</button>
        <button type="button" class="btn btn-rounded btn-white font-weight-bold waves-effect filter button-portofolio" data-rel="2">Website</button>
    </div>

</div>

<div class="streak streak-md about-home mb3" style="background-image: url({{ asset('assets/img/default-about.jpg') }});">
    <div class="container flex-center mask">
        <div class="text-left white-text">
            <h3 class="h2-responsive about-home-title">
                Tentang Kami
            </h3>
            <h5 class="h5-responsive about-home-desc">
                Desain Logo dan Website untuk usaha anda adalah Asset yang sangat berharga.<br><br>
                1017 Studios di bidang Jasa Desain Logo untuk Brand maupun desain promotion tools seperti desain brosur,
                desain banner, desain poster dll untuk meningkatkan omzet. 1017 Studios telah berpengalaman berdiri sejak
                2014 memiliki visi misi meningkatkan daya jual pemasaran melalui desain yang berkualitas.<br><br>
                Desain Logo adalah identitas dari sebuah produk, sehingga harus di desain dengan serius sesuai dengan target
                marketnya. Selain desain logo, kami berpengalaman dalam desain grafis lainnya seperti brosur, office tools,
                packaging, dan lainnya. Perkembangan Desain Logo saat ini tidak hanya digunakan di perusahaan besar saja,
                namun di terapkan pada pengusaha UMKM, Start Up, dan lainnya, hal itu dikarenakan karena Desain Logo
                sangat membantu dalam menyampaikan brand image.<br><br>
                Desain logo keren memiliki fungsi yang cukup penting bagi sebuah perusahaan maupun brand. Dimana logo
                termasuk dalam program marketing yang berfungsi sebagai brand image. Desain logo sangat berperan dalam
                perkembangan brand, program marketing, identitas dan lainnya. Desain Logo yang baik adalah dapat
                menimbulkan citra / image dari sebuah brand sesuai dari visi dan misi brand.<br><br>
                Desain logo / desain grafis yang kami hasilkan adalah desain yang original, sehingga tidak usah khawatir
                bahwa desain logo / desain grafis anda sama dengan lainnya. Kami berpengalaman lebih dari 5 tahun dalam
                pembuatan desain logo, desain grafis, web development, 3d desain yang tentunya sesuai dengan kebutuhan
                pasar.
            </h5>
        </div>
    </div>
</div>

<div class="superior-home">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mb2">
                <img src="{{ asset('assets/img/default-superior-1.png') }}" class="img-fluid img-superior" alt="">
                <div class="text-superior">
                    Desainer dan Developer
                </div>
                <div class="text-superior-2">
                    Senior & Profesional
                </div>
            </div>
            <div class="col-sm-6 mb2">
                <img src="{{ asset('assets/img/default-superior-2.png') }}" class="img-fluid img-superior" alt="">
                <div class="text-superior">
                    Proses Pengerjaan
                </div>
                <div class="text-superior-2">
                    Cepat & Tepat Waktu
                </div>
            </div>
            <div class="col-sm-6 mb2">
                <img src="{{ asset('assets/img/default-superior-3.png') }}" class="img-fluid img-superior" alt="">
                <div class="text-superior">
                    Konsultasi
                </div>
                <div class="text-superior-2">
                    Gratis & Solutif
                </div>
            </div>
            <div class="col-sm-6 mb2">
                <img src="{{ asset('assets/img/default-superior-4.png') }}" class="img-fluid img-superior" alt="">
                <div class="text-superior">
                    Output
                </div>
                <div class="text-superior-2">
                    Master File / Akses (Website)
                </div>
            </div>
        </div>
    </div>
</div>

<div class="streak streak-md about-home" style="background-image: url({{ asset('assets/img/default-about.jpg') }});">
    <div class="container flex-center mask">
        <div class="text-left white-text">
            <h3 class="h2-responsive about-superior-title-1">
                FAQ
            </h3>
            <h3 class="h2-responsive about-superior-title-2">
                Pertanyaan yang sering diajukan
            </h3>

            <div class="superior-desc">
                <table>
                    <tr>
                        <td class="about-superior-desc-1 pr1">+</td>
                        <td class="about-superior-desc-1">Bagaimana cara pemesanan</td>
                    </tr>
                    <tr>
                        <td class="about-superior-desc-2"></td>
                        <td class="about-superior-desc-2">Tekan tombol SAYA MAU PESAN atau hubungi kami melalui Whatsapp melalui icon Whatsapp.</td>
                    </tr>

                    <tr>
                        <td class="about-superior-desc-1 pr1">+</td>
                        <td class="about-superior-desc-1">Bagaimana cara pembayaran</td>
                    </tr>
                    <tr>
                        <td class="about-superior-desc-2"></td>
                        <td class="about-superior-desc-2">Pengerjaan akan dimulai setelah kami menerima pembayaran DP sebesar 50% dari klien.
                            Hasil kerja final yang sudah melewati proses revisi–akan dikirimkan setelah kami menerima pelunasan.
                        </td>
                    </tr>

                    <tr>
                        <td class="about-superior-desc-1 pr1">+</td>
                        <td class="about-superior-desc-1">Bagaimana apabila hasil kurang cocok</td>
                    </tr>
                    <tr>
                        <td class="about-superior-desc-2"></td>
                        <td class="about-superior-desc-2">Anda mendapatkan fasilitas / garansi revisi sesuai dengan paket desain yang dipilih. Kami selalu
                            berkomitmen dan berusaha untuk memberikan solusi dan hasil terbaik untuk kebutuhan anda.
                        </td>
                    </tr>

                    <tr>
                        <td class="about-superior-desc-1 pr1">+</td>
                        <td class="about-superior-desc-1">Bagaimana apabila saya ingin membatalkan project yang sedang berjalan?</td>
                    </tr>
                    <tr>
                        <td class="about-superior-desc-2"></td>
                        <td class="about-superior-desc-2">Ketentuan untuk tidak melanjutkan project karena alasan apapun, cukup infokan ke kami untuk
                            menghentikan project ini. Kamu tidak perlu melunasi sisa biaya yang belum terbayar.
                        </td>
                    </tr>

                    <tr>
                        <td class="about-superior-desc-1 pr1">+</td>
                        <td class="about-superior-desc-1">Apakah bisa merubah project yang sedang berjalan dan mengganti dengan yang baru?</td>
                    </tr>
                    <tr>
                        <td class="about-superior-desc-2"></td>
                        <td class="about-superior-desc-2">Project yang sedang berjalan akan dianggap batal dan tidak harus membayar kekurangan biaya yang
                            belum terbayar. Untuk project yang baru, anda harus memesan kembali paket desain sesuai kebutuhan.
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>

<div class="mb2">
    <div class="button-center">
        <a href="#" class="btn btn-rounded font-weight-bold ml-lg-0 wow fadeInLeft button-header" data-wow-delay="0.3s">
            SAYA MAU PESAN !!
        </a>
    </div>
</div>

<footer class="page-footer footer-tiles text-center text-md-left pt-4 mt-4">
    <div class="container mt-1 mb-2">
        <div class="row">
            <div class="col-xl-4 col-lg-4 mt-2 mb-1 text-center">
                <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid img-footer" alt="">
                <p class="text-footer">berdiri sejak 2014 <br> lebih dari 2000 klien</p>
            </div>

            <div class="col-xl-3 ml-auto col-lg-4 mt-2 mb-1 col-md-6 text-center">

            </div>

            <div class="col-xl-3 ml-auto col-lg-4 mt-2 mb-1 col-md-6 text-center">
                <div class="footer-socials">
                    <a type="button" class="btn-floating yellow"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a type="button" class="btn-floating yellow"><i class="fab fa-instagram fa-lg"></i></a>
                    <a type="button" class="btn-floating yellow"><i class="fab fa-whatsapp fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright py-3 text-center wow fadeIn text-footer" data-wow-delay="0.3s">
        <div class="container-fluid">
            © 2021 Copyright: <a href="#" target="_blank"> 1017Studio.com </a>
        </div>
    </div>

</footer>

@endsection

@section('jquery')
<script>
    // Animation init
    new WOW().init();

    // Gallery
    $(function () {
        var selectedClass = "";
        $(".filter").click(function () {
            selectedClass = $(this).attr("data-rel");
            $("#portofolio-home").fadeTo(500, 0.1);
            $("#portofolio-home .view-filter").not("." + selectedClass).fadeOut().removeClass('animation');
            setTimeout(function () {
                $("." + selectedClass).fadeIn().addClass('animation');
                $("#portofolio-home").fadeTo(500, 1);
            }, 300);
        });
    });

</script>
@endsection