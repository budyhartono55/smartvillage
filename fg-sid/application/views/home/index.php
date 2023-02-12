<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style>
#container {
    height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
</style>
<?php 

  $slider = $this->db->get('slider')->row();
  $setting = $this->db->get('setting')->row();
  $kawin = $this->db->query("select * from penduduk where status_kawin='Kawin'")->num_rows();
  $belum = $this->db->query("select * from penduduk where status_kawin='Belum Kawin'")->num_rows();
  $ceraihidup = $this->db->query("select * from penduduk where status_kawin='Cerai Hidup'")->num_rows();
  $ceraimati = $this->db->query("select * from penduduk where status_kawin='Cerai Mati'")->num_rows();
  $sd = $this->db->query("select * from penduduk where pendidikan='SD'")->num_rows();
  $smp = $this->db->query("select * from penduduk where pendidikan='SMP'")->num_rows();
  $sma = $this->db->query("select * from penduduk where pendidikan='SMA'")->num_rows();
  $smk = $this->db->query("select * from penduduk where pendidikan='SMK'")->num_rows();
  $d1 = $this->db->query("select * from penduduk where pendidikan='D1'")->num_rows();
  $d2 = $this->db->query("select * from penduduk where pendidikan='D2'")->num_rows();
  $d3 = $this->db->query("select * from penduduk where pendidikan='D3'")->num_rows();
  $s1 = $this->db->query("select * from penduduk where pendidikan='S1'")->num_rows();
  $s2 = $this->db->query("select * from penduduk where pendidikan='S2'")->num_rows();
  $s3 = $this->db->query("select * from penduduk where pendidikan='S3'")->num_rows();
  $laki = $this->db->query("select * from penduduk where pendidikan='S3'")->num_rows();
  $cwo = $this->db->query("select * from penduduk where jk='Laki-laki'")->num_rows();
  $cwe = $this->db->query("select * from penduduk where jk='Perempuan'")->num_rows();
  $islam = $this->db->query("select * from penduduk where agama='Islam'")->num_rows();
  $kristen = $this->db->query("select * from penduduk where agama='Kristen'")->num_rows();
  $katolik = $this->db->query("select * from penduduk where agama='Katolik'")->num_rows();
  $budha = $this->db->query("select * from penduduk where agama='Budha'")->num_rows();
  $hindhu = $this->db->query("select * from penduduk where agama='Hindhu'")->num_rows();
  $konghucu = $this->db->query("select * from penduduk where agama='Konghucu'")->num_rows();
  $lain = $this->db->query("select * from penduduk where agama='Lain-lain'")->num_rows();
?>

<?php $struktur = $this->db->get('struktur')->row();
 ?>

<!-- ========JUMBOTRON============== -->
<section>
    <div class="container" style="margin-top : 100px">
        <div class="row">
            <div class="col-md-6 display-4" style="padding-top : 50px">
                Selamat Datang di Website Resmi <span style="color: #4070f4">Pemerintah</span> Desa Jorok.
            </div>
            <div class="col-md-3">
                <img src="image/f66f1b70e323be765aa667bc350231ac.jpg" alt="admin"
                    style="width : 450px ; margin-left: 50px">
            </div>
        </div>
</section>


<!-- card -->
<section>
    <<div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <!--<img src="images/profile1.jpg" alt="" class="card-img">-->
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <!--<img src="images/profile2.jpg" alt="" class="card-img">-->
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <!--<img src="images/profile3.jpg" alt="" class="card-img">-->
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <!--<img src="images/profile4.jpg" alt="" class="card-img">-->
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <!--<img src="images/profile5.jpg" alt="" class="card-img">-->
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <!--<img src="images/profile6.jpg" alt="" class="card-img">-->
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <!--<img src="images/profile7.jpg" alt="" class="card-img">-->
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <!--<img src="images/profile8.jpg" alt="" class="card-img">-->
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <!--<img src="images/profile9.jpg" alt="" class="card-img">-->
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
        </div>
</section>

<section>
    <div class="container">
        <div class="card mb-3">
            <img class="card-img-top"
                src="https://jorok-utan.desa.id/desa/upload/galeri/sedang_rg47Di_peresmian_beringin_sila.jpeg"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Peresmian Bendungan Beringin Sila oleh Bapak Presiden Ir. Joko Widodo</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque optio sapiente aut
                    asperiores tenetur itaque eius eum blanditiis? Fuga, mollitia et! Numquam nobis quibusdam itaque.
                    This content is a little bit longer. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cupiditate
                    officia alias accusantium blanditiis dicta facilis.</p>

            </div>
        </div>
    </div>
</section>


<?php
$laki = $this->db->query("select * from penduduk where jk='Laki-laki'")->num_rows();
$cw = $this->db->query("select * from penduduk where jk='Perempuan'")->num_rows();
$non = $this->db->query("select * from penduduk where status='0'")->num_rows();
$aktif = $this->db->query("select * from penduduk where status='1'")->num_rows();
?>

<!-- ======= Hero Section ======= -->
<section id="contact" class="contact" style="margin-top : 0px">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Data Penduduk</h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up">

            <div class="col-lg-12">

                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-3 info">
                            <i class="bi bi-gender-male"></i>
                            <h4>Penduduk Laki-laki:</h4>
                            <p>
                                <?php echo $laki ?>
                            </p>
                        </div>

                        <div class="col-lg-3 info mt-4 mt-lg-0">
                            <i class="bi bi-gender-female"></i>
                            <h4>Penduduk Perempuan:</h4>
                            <p>
                                <?php echo $cw ?>
                            </p>
                        </div>

                        <div class="col-lg-3 info mt-4 mt-lg-0">
                            <i class="bi bi-person-check"></i>
                            <h4>Status Penduduk Aktif:</h4>
                            <p>
                                <?php echo $aktif ?>
                            </p>
                        </div>

                        <div class="col-lg-3 info mt-4 mt-lg-0">
                            <i class="bi bi-person-dash"></i>
                            <h4>Status Penduduk Nonaktif:</h4>
                            <p>
                                <?php echo $non ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section><!-- End Services Section -->

<main id="main">

    <!-- ======= About Us Section ======= -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Grafik <?php echo $setting->web ?></h2>
            </div>

            <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                <div class="col-lg-6 col-md-4 col-6">
                    <div id="kawin"></div>
                </div>

                <div class="col-lg-6 col-md-4 col-6">
                    <div class="client-logo">
                        <div id="pendidikan"></div>


                    </div>
                </div>

            </div>
            <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                <div class="col-lg-6 col-md-4 col-6">
                    <div id="agama"></div>
                </div>

                <div class="col-lg-6 col-md-4 col-6">
                    <div class="client-logo">
                        <div id="jk"></div>


                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Clients Section -->
    <script>
    Highcharts.chart('agama', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Grafik Agama'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Total',
            data: [
                ['Islam', <?php echo $islam; ?>],
                ['Kristen', <?php echo $kristen; ?>],
                ['Katolik', <?php echo $katolik; ?>],
                ['Budha', <?php echo $budha; ?>],
                ['Hindhu', <?php echo $hindhu; ?>],
                ['Konghucu', <?php echo $konghucu; ?>],
                {
                    name: 'Lain-lain',
                    y: <?php echo $lain; ?>,
                    sliced: true,
                    selected: true
                },
            ]
        }]
    });

    Highcharts.chart('jk', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Grafik Jenis Kelamin'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Total',
            data: [
                ['Laki-laki', <?php echo $cwo; ?>],
                {
                    name: 'Perempuan',
                    y: <?php echo $cwe; ?>,
                    sliced: true,
                    selected: true
                },
            ]
        }]
    });

    Highcharts.chart('kawin', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Grafik Status Perkawinan'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Total',
            data: [
                ['Sudah Kawin', <?php echo $kawin; ?>],
                ['Cerai Hidup', <?php echo $ceraihidup; ?>],
                ['Cerai Mati', <?php echo $ceraimati; ?>],
                {
                    name: 'Belum Kawin',
                    y: <?php echo $belum; ?>,
                    sliced: true,
                    selected: true
                },
            ]
        }]
    });
    Highcharts.chart('pendidikan', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Grafik Pendidikan'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Total',
            data: [
                ['SD', <?php echo $sd; ?>],
                ['SMP', <?php echo $smp; ?>],
                ['SMA', <?php echo $sma; ?>],
                ['SMK', <?php echo $smk; ?>],
                ['D1', <?php echo $d1; ?>],
                ['D2', <?php echo $d2; ?>],
                ['D3', <?php echo $d3; ?>],
                ['S1', <?php echo $s1; ?>],
                ['S2', <?php echo $s2; ?>],
                ['S3', <?php echo $s3; ?>],
                {
                    name: 'S3',
                    y: <?php echo $belum; ?>,
                    sliced: true,
                    selected: true
                },
            ]
        }]
    });
    </script>
    <section id="clients" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Struktur Desa</h2>
            </div>

            <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                <div class="col-lg-6 col-md-4 col-6">
                    <p>
                        <?php echo $struktur->judul ?>
                        <?php echo $struktur->ket ?>

                    </p>
                </div>

                <div class="col-lg-6 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="image/<?php echo $struktur->gambar ?>" alt="" class="img img-fluid img-fluid">

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Agenda Terbaru Di <?php echo $setting->web ?></h2>
            </div>

            <div class="row">
                <?php
            $wisata = $this->db->query("select * from event  order by id desc limit 8");
            foreach($wisata->result() as $w){
          ?>

                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <ul>
                            <li>
                                <img src="image/<?php echo $w->gambar ?>" class="img img-fluid img-thumbnail" alt="...">

                            </li>
                            <li>
                                <h5><?php echo $w->judul ?></h5>
                            </li>
                            <li>
                                <h5><?php echo 'Tanggal '.$w->mulai ?></h5>
                            </li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="home/eventpage/<?php echo $w->slug ?>" class="btn-buy">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <?php  } ?>

            </div>

        </div>
    </section><!-- End Services Section -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pengumuman Terbaru Di <?php echo $setting->web ?></h2>
            </div>

            <div class="row">
                <?php
            $wisata = $this->db->query("select * from pengumuman  order by id desc limit 8");
            foreach($wisata->result() as $w){
          ?>

                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <ul>
                            <li>
                                <img src="image/<?php echo $w->gambar ?>" class="img img-fluid img-thumbnail" alt="...">

                            </li>
                            <li>
                                <h5><?php echo $w->judul ?></h5>
                            </li>
                            <li>
                                <h5><?php echo 'Tanggal '.$w->date ?></h5>
                            </li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="home/pengumumanpage/<?php echo $w->slug ?>" class="btn-buy">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <?php  } ?>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Berita Terbaru dari <?php echo $setting->web ?></h2>
            </div>

            <div class="row">
                <?php
            $wisata = $this->db->query("select * from berita  order by id desc limit 6");
            foreach($wisata->result() as $w){
          ?>

                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="box">
                        <ul>
                            <li>
                                <img src="image/<?php echo $w->gambar ?>" class="img img-fluid img-thumbnail" alt="...">

                            </li>
                            <li>
                                <h5><?php echo $w->judul ?></h5>
                            </li>
                            <li>
                                <p>Tanggal Post <?php echo date("d F Y",strtotime($w->date)) ?></p>
                            </li>
                            <li>
                                <p>Jumlah Views <?php echo $w->views ?></p>
                            </li>
                            <li>
                                <p><?php echo substr($w->ket,0,100) ?>....</p>
                            </li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="home/detailberita/<?php echo $w->slug ?>" class="btn-buy">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <?php  } ?>

            </div>

        </div>
    </section><!-- End Services Section -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Produk Warga di <?php echo $setting->web ?></h2>
            </div>

            <div class="row">
                <?php
            $wisata = $this->db->query("select * from produk_warga  order by id desc limit 6");
            foreach($wisata->result() as $row){
          ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">

                    <div class="card">
                        <img src="image/<?php echo $row->gambar ?>" class="card-img-top img-fluid img-thumbnail"
                            alt="...">
                        <div class="card-body table-responsive">
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>:</td>
                                    <td><?php echo $row->produk ?></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><?php echo number_format($row->harga,0,',','.') ?></td>
                                </tr>
                                <tr>
                                    <td>Pemilik Produk</td>
                                    <td>:</td>
                                    <td><?php echo $row->pemilik ?></td>
                                </tr>
                                <tr>
                                    <td>No.Hp Pemilik</td>
                                    <td>:</td>
                                    <td><?php echo $row->telppemilik ?></td>
                                </tr>

                                <tr align="center">
                                    <td colspan="3">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="home/produkdetail/<?php echo $row->slug ?>"
                                                class="btn btn-info "><i class="fa fa-eye"></i> Detail Produk</a>
                                            <a href="https://wa.me/<?php echo $row->telppemilik ?>"
                                                class="btn btn-primary"><i class="fa fa-phone"></i>Hubungi Pemilik</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <?php  } ?>

            </div>

        </div>
    </section><!-- End Services Section -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Produk BUMDES di <?php echo $setting->web ?></h2>
            </div>

            <div class="row">
                <?php
            $wisata = $this->db->query("select * from produk_bumdes  order by id desc limit 6");
            foreach($wisata->result() as $row){
          ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">

                    <div class="card">
                        <img src="image/<?php echo $row->gambar ?>" class="card-img-top img-fluid img-thumbnail"
                            alt="...">
                        <div class="card-body table-responsive">
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>:</td>
                                    <td><?php echo $row->produk ?></td>
                                </tr>
                                <tr>
                                    <td>Kategori Produk</td>
                                    <td>:</td>
                                    <td><?php echo $row->kategori ?></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><?php echo number_format($row->harga,0,',','.') ?></td>
                                </tr>
                                <tr>
                                    <td>No.HP BUMDES</td>
                                    <td>:</td>
                                    <td><?php echo $row->telp ?></td>
                                </tr>

                                <tr>
                                    <td>Deskripsi</td>
                                    <td>:</td>
                                    <td><?php echo substr($row->desk,0,150) ?>...</td>
                                </tr>

                                <tr align="center">
                                    <td colspan="3">
                                        <div class="btn-group w-100" role="group" aria-label="Basic example">
                                            <a href="home/detailbumdes/<?php echo $row->slug ?>"
                                                class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Detail Produk</a>
                                            <a href="https://wa.me/<?php echo $row->telp ?>" class="btn btn-primary"><i
                                                    class="fa fa-phone"></i>Hubungi BUMDES</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <?php  } ?>

            </div>

        </div>
    </section><!-- End Services Section -->
    <!-- ======= Services Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Sosial Media <?php echo $setting->web ?></h2>
            </div>

            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-youtube"></i>
                                <h4>Youtube:</h4>
                                <p>
                                    <?php echo $setting->yt ?>
                                </p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>
                                    <?php echo $setting->email ?>
                                </p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-instagram"></i>
                                <h4>Instagram:</h4>
                                <p>
                                    <?php echo $setting->ig ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section><!-- End Services Section -->

    <?php
defined('BASEPATH') OR exit('No direct script access allowed');
$setting = $this->db->get('setting');
$row = $setting->row();
?>
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Wilayah <?php echo $row->web ?></h2>
            </div>

            <div class="map-section">
                <div id="map" style="height: 600px;"></div>
            </div>
        </div>
    </section><!-- End Our Clients Section -->

</main><!-- End #main -->
<script>
var gruplahan = L.layerGroup();
var grupirigasi = L.layerGroup();

var map = L.map("map", {
    center: [<?php echo $row->lat.','.$row->lng ?>],
    zoom: 8,
    zoomControl: false,
    layers: [],
    fullscreenControl: true,
    fullscreenControlOptions: { // optional
        title: "Show me the fullscreen !",
        titleCancel: "Exit fullscreen mode"
    }
});
var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
    // maxZoom: 12,
    attribution: "<?php echo $row->web ?>"
}).addTo(map);
var OpenStreetMap_Mapnik = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 12,
    attribution: '<?php echo $row->web ?>'
});
var mapdark = L.tileLayer(
    "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}", {
        attribution: "<?php echo $row->web ?>",
        maxZoom: 18,
        minZoom: 7,
        id: "mapbox/dark-v10",
        tileSize: 512,
        zoomOffset: -1,
        accessToken: "pk.eyJ1Ijoic25vd3JleCIsImEiOiJjazhmbTd4cG8wNXN0M2ZzMDFpZGNoaWpmIn0.GgO0rwaNrkc-eqVt6DeM3g",
    });
var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
    attribution: "<?php echo $row->web ?>",
});

var googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
    attribution: "<?php echo $row->web ?>",
});
//minimap
var osmUrl = 'https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}';
var osmAttrib = 'Map data &copy; OpenStreetMap contributors';
var osm = new L.TileLayer(osmUrl, {
    minZoom: 5,
    maxZoom: 18,
    attribution: osmAttrib
});
var osm2 = new L.TileLayer(osmUrl, {
    minZoom: 0,
    maxZoom: 13,
    attribution: osmAttrib
});
var miniMap = new L.Control.MiniMap(osm2, {
    toggleDisplay: true
}).addTo(map);
var lc = L.control.locate({
    position: 'topleft',
    strings: {
        title: "Cari lokasi saya"
    }
}).addTo(map);

//shhow location
//window
// Creating window object


// detect fullscreen toggling
map.on('enterFullscreen', function() {
    if (window.console) window.console.log('enterFullscreen');
});
map.on('exitFullscreen', function() {
    if (window.console) window.console.log('exitFullscreen');
});
///show kompas
var comp = new L.Control.Compass({
    autoActive: true,
    showDigit: true,
    position: 'topleft'
});

map.addControl(comp);

var north = L.control({
    position: "bottomleft"
});
north.onAdd = function(map) {
    var div = L.DomUtil.create("div", "info legend");
    div.innerHTML = "<img src='assets/arrow.png' style='width:120px' >";
    return div;
}
north.addTo(map);
//untuk buat skala
//zommba
var zoom_bar = new L.Control.ZoomBar({
    position: 'topleft'
}).addTo(map);
L.control.coordinates({
    position: "topright",
    decimals: 2,
    decimalSeperator: ",",
    labelTemplateLat: "Latitude: {y}",
    labelTemplateLng: "Longitude: {x}"
}).addTo(map);
L.control.scale({
    maxWidth: 150,
    position: 'topright'
}).addTo(map);
//base maps
var baseMaps = [{
    groupName: "Base Maps",
    expanded: true,
    layers: {
        "Satellite": GoogleSatelliteHybrid,
        "Open Street Map Mapnik": OpenStreetMap_Mapnik,
        "Open Street Map Dark": mapdark,
        "Google Street": googleStreets,
        "Google Terrain": googleTerrain
    }
}];
var overlays = [

];


var options = {
    contaner_width: "300px",
    group_maxHeight: "80px",
    exclusive: false,
    collapsed: true,
    position: "topright"
}
var control = L.Control.styledLayerControl(baseMaps, overlays, options);
map.addControl(control);

var polygon = <?php echo $row->wilayah ?>;
var geojsonLayer = new L.GeoJSON(polygon);
map.addLayer(geojsonLayer);
</script>