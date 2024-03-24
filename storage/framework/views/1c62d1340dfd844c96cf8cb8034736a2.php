<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transkrip Aktifitas Kemahasiswaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>

</head>
<body>
<div>
        <div class="container" style="width: 80%;">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">

                    <a class="navbar-brand" href="#">
                        <img src="<?php echo e(Vite::asset('resources/images/logo telu.png')); ?>" alt="Bootstrap" width="155" height="48"
                            style="padding: 0px 15px;">
                    </a>
                </div>
                <div class="container">

                    <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item dropdown " style="margin-right: 1em; " >
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="padding: 33px 7px; color:black; ">
                                    Tentang
                                </a>
                                <ul class="dropdown-menu" style="background-color: #9f1521;" >
                                    <li><a class="dropdown-item wit" style=" border-bottom: 1px solid white;" href="#">Ucapan Rektor</a></li>

                                    <li class="nav-item dropend wit">
                                        <a class="nav-link dropdown-toggle wit" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false" style=" padding-left:1em;">
                                            Sekilas Tentang
                                        </a>
                                        <ul class="dropdown-menu" style="background-color: #9f1521;" >
                                            <li><a class="dropdown-item wit" href="#" style=" border-bottom: 1px solid white;">Sejarah Telkom University</a></li>
                                            <li><a class="dropdown-item wit" href="#" style=" border-bottom: 1px solid white;">Visi, Misi, Dan Tujuan</a></li>
                                            <li><a class="dropdown-item wit" href="#" style=" border-bottom: 1px solid white;">Keunggulan</a></li>
                                            <li><a class="dropdown-item wit" href="#" style=" border-bottom: 1px solid white;">Keanekaragaman dan Inklusivitas</a>
                                            </li>
                                            <li><a class="dropdown-item wit" href="#">Prestasi</a></li>

                                        </ul>
                                    </li>
                                    <li class="nav-item dropend">
                                        <a class="nav-link dropdown-toggle " href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false" style="padding-left:1em;">
                                            Struktur Organisasi
                                        </a>
                                        <ul class="dropdown-menu" style="background-color: #9f1521;">
                                            <li><a class="dropdown-item wit" style=" border-bottom: 1px solid white;" href="#">Pimpinan</a></li>
                                            <li><a class="dropdown-item wit"  href="#">Senat</a></li>

                                        </ul>
                                    </li>
                                    <li class="nav-item dropend">
                                        <a class="nav-link dropdown-toggle wit" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false" style=" padding-left:1em;">
                                            Tur Kampus
                                        </a>
                                        <ul class="dropdown-menu" style="background-color: #9f1521;">
                                            <li><a class="dropdown-item wit" style=" border-bottom: 1px solid white;" href="#">Virtual Tour</a></li>
                                            <li><a class="dropdown-item wit" style=" border-bottom: 1px solid white;" href="#">Vidio drone</a></li>
                                            <li><a class="dropdown-item wit" href="#">Peta Kampus</a></li>

                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item wit" href="#">Fakta & Angka</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"  style="margin-right: 1em;">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="padding: 33px 7px; color:black;">
                                    Akademik
                                </a>

                            </li>
                            <li class="nav-item"  style="margin-right: 1em;">
                                <a class="nav-link active" aria-current="page" href="#"
                                    style="padding: 33px 7px; color:black;">Admisi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="padding: 33px 7px; color:black;">
                                    Riset & Inovasi
                                </a>

                            </li>
                            <li class="nav-item dropdown"  style="margin-right: 1em;">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="padding: 33px 7px; color:black;">
                                    Kehidupan Kampus
                                </a>

                            </li>
                            <li class="nav-item dropdown"  style="margin-right: 1em;">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="padding: 33px 7px; color:black;">
                                    TUNC
                                </a>

                            </li>
                            <li class="nav-item dropdown"  style="margin-right: 1em;">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="padding: 33px 7px; color:black;">
                                    <img src="<?php echo e(Vite::asset('resources/images/indonesia.png')); ?>" alt="Bootstrap" width="22" height="18">

                                </a>

                            </li class="nav-item"  style="margin-right: 1em;">
                            <a class="nav-link" href="#" style="padding: 33px 7px; color:black;">
                                <img src="<?php echo e(Vite::asset('resources/images/search.png')); ?>" alt="Bootstrap" width="24" height="24">
                            </a>

                        </ul>

                    </div>
                </div>
        </div>
        </nav>
        <div class="container red"
            style="width: 80%; height:200px; display:flex; justify-content:center; align-items:center; font-size:40px;">
            <a>Transkrip Aktifitas Kemahasiswaan</a>
        </div>
        <div class="container mb-5"  style="width: 80%; padding: 0px 15px;">
            <p style="padding: 0px 15px;">Telkom University tidak hanya fokus mengembangkan aspek akademis mahasiswa, tetapi juga sangat memperhatikan aspek non-akademis. Untuk mendorong mahasiswa untuk aktif berkegiatan, Telkom University
                mengembangkan Transkrip Aktivitas Kemahasiswaan (TAK). TAK adalah ukuran aktivitas
                ekstra/intra/ko-kurikuler mahasiswa, sebagai salah satu bentuk penghargaan yang berhak diperoleh
                mahasiswa berdasarkan aktivitasnya. TAK bertujuan untuk membantu dan membekali mahasiswa agar siap
                terjun ke masyarakat, khusus dalam bidang softskills. Kemampuan softskill ini menjadi salah satu
                tuntutan penting dalam memenangkan kompetisi dunia kerja. TAK wajib diikuti oleh seluruh Mahasiswa/i
                Telkom University karena TAK akan diberikan dalam bentuk transkrip akademik pada saat Mahasiswa/i lulus.
                Fungsi TAK adalah syarat untuk mengikuti sidang tugas akhir/skripsi/proyek akhir, mendapatkan beasiswa,
                dan mengikuti seleksi mahasiswa berprestasi. Unsur-unsur yang menjadi faktor penilaian dalam
                melaksanakan TAK ialah keaktifan dalam mendukung Tridharma Perguruan Tinggi, Organisasi Kemahasiswaan
                Kampus, dan Organisasi Luar Kampus yang biasanya didapatkan dengan cara menjadi anggota atau menjadi
                peserta dari Organisasi Kemahasiswaan (Ormawa), Unit Kegiatan Mahasiswa (UKM), dan Latihan Dasar
                Kepemimpinan Organisasi (LDKO). Nilai kumulatif minimal TAK tergantung pada program studi yang ditekuni
                seperti Sarjana yang memiliki nilai komulatif 60 poin, Diploma 45 poin, dan Pindahan 15 poin.</p>
        </div>

    </div>
    <!-- Footer -->
<footer class=" bg-red white " >
    <div class="container" style="width:79.3%;">
        <div class="container">
            <div class="row align-items-start ">
              <div class="col ">

                <div class=" mb-5" style="margin-top:5em;">
                    <!-- Links -->
                    <h6 class=" mb-3" style="font-size:20px">
                      Kontak
                    </h6>
                    <p>
                      <a href="#!" class="text-reset" >
                        <img src="<?php echo e(Vite::asset('resources/images/kampus.webp')); ?>"  width="229" height="61" style=" margin-top:1em;">
                      </a>
                    </p>
                    <p>
                        <div class="d-flex" >
                            <div style="margin-right: 10px;">
                                <img src="<?php echo e(Vite::asset('resources/images/loc.png')); ?>" alt="" width="18px">
                            </div>
                            <p  style="font-weight: 300; font-size:17px; ">Gedung Bangkit Telkom University Jl. Telekomunikasi Terusan Buah Batu Indonesia 40257, Bandung, Indonesia
                        </div>
                      </a>
                    </p>
                    <p>
                        <div class="d-flex" >
                            <div style="margin-right: 10px;">
                                <img src="./assets/telp.png" alt="" width="18px">
                            </div>
                            <p style="font-weight: 300; font-size:17px; ">(022) 7566456
                        </div>
                      </a>
                    </p>
                    <p>
                        <div class="d-flex " >
                            <div style="margin-right: 10px;">
                                <img src="./assets/email.png" alt="" width="18px">
                            </div>
                            <p style="font-weight: 300; font-size:17px; ">info@telkomuniversity.ac.id
                        </div>
                      </a>
                    </p>
                    <p>
                        <div class=" " >
                            <a class=" ">
                                <img src="<?php echo e(Vite::asset('resources/images/mdi--instagram.svg')); ?>" alt="" width="22px" style="margin-left:20px;">
                                <img src="<?php echo e(Vite::asset('resources/images/mdi--youtube.svg')); ?>" alt="" width="22px"  style="margin-left:15px;">
                                <img src="<?php echo e(Vite::asset('resources/images/ri--linkedin-fill.svg')); ?>" alt="" width="22px"  style="margin-left:15px;">
                                <img src="<?php echo e(Vite::asset('resources/images/ic--baseline-facebook.svg')); ?>" alt="" width="22px"  style="margin-left:15px;">
                                <img src="<?php echo e(Vite::asset('resources/images/ic--baseline-tiktok.svg')); ?>" alt="" width="22px" style="margin-left:15px;">
                                <img src="<?php echo e(Vite::asset('resources/images/ri-twitter-x-fill.svg')); ?>" alt="" width="22px"  style="margin-left:15px;">
                            </a>
                        </div>
                      </a>
                    </p>

                  </div>
              </div>
              <div class="col">
                <div class=" mb-5" style="margin-top:5em;">
                    <!-- Links -->
                    <h6 class="  mb-3" style="font-size:20px">
                      Kerjasama
                    </h6>
                    <div  style="margin-left: 1em; margin-top:2em;">
                        <a style="font-size: 16px;" >Bagian Kerjasama</a>

                    </div>
                    <div class="mt-3" style="margin-left: 1em;">
                        <a >Bagian Karier dan Alumni</a>

                    </div>
                    <div class="mt-3" style="margin-left: 1em;">
                        <a >Bagian Kantor Internasional</a>

                    </div>
                    </div>
                <div class="mt-5 mb-5">
                    <!-- Links -->
                    <h6 class="  mb-3" style="font-size:20px">
                      Riset dan Inovasi
                    </h6>
                    <div style="margin-left: 1em;  margin-top:2em;">
                        <a >Bagian Penilitian dan Pengabdian Masyarakat</a>

                    </div>
                    <div class="mt-3" style="margin-left: 1em;">
                        <a >Bandung Techno </a>

                    </div>
                    <div class="mt-3" style="margin-left: 1.5em;">
                        <a ></a>

                    </div>
                    </div>
              </div>
              <div class="col">
                <div class="mb-5" style="margin-top:5em;">
                    <!-- Links -->
                    <h6 class=" mb-3" style="font-size:20px">
                      Akademik
                    </h6>
                    <div  style="margin-left: 1em; margin-top:2em;">
                        <a style="font-size: 16px;" >Bagian Standar Layanan Akademik</a>

                    </div>
                    <div class="mt-3" style="margin-left: 1em;">
                        <a >Open Library</a>

                    </div>
                    <div class="mt-3" style="margin-left: 1em;">
                        <a >iGracias</a>

                    </div>
                    <div class="mt-3" style="margin-left: 1em;">
                        <a >Learn Manajement System</a>

                    </div>
                    <div class="mt-3" style="margin-left: 1em;">
                        <a >Pusat Bahasa</a>

                    </div>
                    <div class="mt-3" style="margin-left: 1em;">
                        <a >Open CourseWare</a>

                    </div>
                    </div>
              </div>
            </div>
          </div>

    </div>



  </footer>

    </div>





<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laraavel10\resources\views/klone.blade.php ENDPATH**/ ?>