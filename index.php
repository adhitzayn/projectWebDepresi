<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Web Depresi</title>
    <!-- boostrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="pb-5 overflow-hidden bg-green">
        <div class="container">
            <div class="row py-4">
                <div class="col-sm-6 text-lg-start">
                    <a href="#" class="navbar-brand text-white">
                        Yuk Lawan Depresi!
                    </a>
                </div>

                <div class="col-sm-6 d-none d-md-flex text-white align-items-center nav-icons justify-content-end">
                    <p class="fw-bold mb-0">Tentang Depresi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-white text-center text-lg-start">
                    <h1 class="display-1 fw-normal mt-3">Berkenalan Dengan Depresi</h1>
                    <p class="my-4 lead fs-5" style="text-align: justify;">
                        Depresi adalah gangguan kesehatan mental yang memengaruhi perasaan ditandai dengan perasaan sedih yang mendalam, cara berpikir dan cara bertindak seseorang serta kehilangan minat terhadap hal-hal yang disukai. Depresi merupakan salah satu bentuk kondisi kesehatan mental yang dialami banyak orang dan sering kali muncul berbarengan dengan kecemasan.
                    </p>
                    <button type="button" class="btn fw-bold text-white mt-4 btn-header" onclick="scrollToSection('sec-1')">Pelajari Tentang Depresi Sekarang!</button>
                    <button type="button" class="btn fw-bold text-white mt-4 btn-header" onclick="scrollToSection('sec-6')">Cara Mengatasi Depresi</button>
                </div>
                <div class="col-lg-6 phone-img d-none d-lg-flex justify-content-end gx-0 mt-3">
                    <img src="gambar/Picture9.png">
                </div>
            </div>
        </div>
    </header>

    <section id="sec-1" class="py-5 bg-grey">
        <div class="container my-4">
            <div class="row">
                <div class="col-md-3 text-center sec-1-item mb-4">
                    <span class="d-flex align-items-center justify-content-center mx-auto text-white mb-4 circle-icon">
                        <i class="far fa-heart fs-3"></i>
                    </span>
                    <p class="lead fw-bold">Tentang Depresi</p>
                    <p class="fw-light mx-3 lh-lg">Depresi adalah gangguan kesehatan mental yang memengaruhi perasaan ditandai dengan perasaan sedih yang mendalam, cara berpikir dan cara bertindak seseorang serta kehilangan minat terhadap hal-hal yang disukai.</p>
                    <button type="button" class="btn btn-green mt-2" onclick="scrollToSection('sec-2')">Read More</button>
                </div>

                <div class="col-md-3 text-center sec-1-item mb-5">
                    <span class="d-flex align-items-center justify-content-center mx-auto text-white mb-4 circle-icon">
                        <i class="far fa-heart fs-3"></i>
                    </span>
                    <p class="lead fw-bold">Jenis-Jenis Depresi</p>
                    <p class="fw-light mx-3 lh-lg">Depresi terbagi menjadi beberapa jenis berdasarkan tingkat keparahan dan apa yang menjadi penyebabnya.</p>
                    <button type="button" class="btn btn-green mt-2" onclick="scrollToSection('sec-3')">Read More</button>
                </div>

                <div class="col-md-3 text-center sec-1-item mb-5">
                    <span class="d-flex align-items-center justify-content-center mx-auto text-white mb-4 circle-icon">
                        <i class="far fa-heart fs-3"></i>
                    </span>
                    <p class="lead fw-bold">Gejala Depresi</p>
                    <p class="fw-light mx-3 lh-lg">Masalah depresi tidak selalu menunjukkan gejala yang serupa. Ini bergantung pada tingkat keparahan pada setiap pengidapnya. </p>
                    <button type="button" class="btn btn-green mt-2" onclick="scrollToSection('sec-4')">Read More</button>
                </div>

                <div class="col-md-3 text-center sec-1-item mb-5">
                    <span class="d-flex align-items-center justify-content-center mx-auto text-white mb-4 circle-icon">
                        <i class="far fa-heart fs-3"></i>
                    </span>
                    <p class="lead fw-bold">Penyebab Depresi</p>
                    <p class="fw-light mx-3 lh-lg">Perlu diketahui bahwa depresi juga dikenal sebagai salah satu masalah kesehatan mental yang sangat kompleks. Tidak ada yang mengetahui dengan pasti apa penyebab seseorang mengalami depresi.</p>
                    <button type="button" class="btn btn-green mt-2" onclick="scrollToSection('sec-5')">Read More</button>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-2" class="py-5">
        <div class="container container-custom my-4">
            <div class="row gx-lg-5">
                <div class="col-lg-5 mb-5">
                    <img src="gambar/Picture1.png" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h3>Tentang Depresi</h3>
                    <p class="text-muted fw-light lh-lg my-4" style="text-align: justify;">
                        Depresi adalah gangguan kesehatan mental yang memengaruhi perasaan ditandai dengan perasaan sedih yang mendalam, cara berpikir dan cara bertindak seseorang serta kehilangan minat terhadap hal-hal yang disukai. Depresi merupakan salah satu bentuk kondisi kesehatan mental yang dialami banyak orang dan sering kali muncul berbarengan dengan kecemasan.
                    </p>

                    <p id="additional-text" class="text-muted fw-light lh-lg my-4" style="text-align: justify; display: none;">
                        Depresi bisa ringan dan sementara, atau berat dan berkepanjangan. Ada orang-orang yang mengalami depresi hanya sekali dalam hidupnya; ada pula yang mengalaminya berkali-kali. Seseorang dinyatakan mengalami depresi jika sudah 2 minggu merasa sedih, putus harapan, atau tidak berharga. Depresi bisa menyerang siapa saja, termasuk wanita dan pria. Depresi pada wanita sering dikaitkan dengan perubahan hormonal, termasuk menstruasi, kehamilan, setelah melahirkan, atau menopause.
                    </p>
                    <p id="additional-text-2" class="text-muted fw-light lh-lg my-4" style="text-align: justify; display: none;">
                        Sehebat apapun depresinya pasti bisa disembuhkan. Saraf pada otak bersifat elastis dan tidak akan berubah. Artinya ketika mengalami depresi berat itu dapat disembuhkan kembali. Solusi depresi berat dapat dilakukan dengan berpikir positif karena kondisi di luar tubuh manusia tidak bisa dikontrol, tapi di dalam otak dapat dikontrol.
                    </p>

                    <button id="toggle-button" type="button" class="btn btn-green mt-2">Read More</button>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-3" class="py-5 text-white bg-green">
        <div class="container my-4">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h3 class="mb-2">Jenis-Jenis Depresi</h3>
                    <p class="lh-lg fw-light pt-1 w-75 mx-auto">Depresi terbagi menjadi beberapa jenis berdasarkan tingkat keparahan dan apa yang menjadi penyebabnya. </p>
                </div>
            </div>

            <div class="row">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-1 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Depresi Mayor</h4>
                            <p class="lh-lg" style="text-align: justify;">Jenis gangguan kesehatan mental ini muncul dengan gejala berupa perasaan sedih, mengalami kehilangan minat, atau gejala pada umumnya. Kondisi ini bisa muncul setiap waktu dan berlangsung selama sekitar 2 minggu atau bahkan lebih. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-2 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Distimia</h4>
                            <p class="lh-lg" style="text-align: justify;">Selain itu, ada pula distimia atau gejala depresi yang kronis (persistent depressive disorder). Jenis ini termasuk dalam depresi mayor yang telah terjadi dalam waktu yang lama, yaitu setidaknya selama 2 tahun.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-3 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Gangguan Bipolar</h4>
                            <p class="lh-lg" style="text-align: justify;">Kemudian, ada pula gangguan bipolar, masalah suasana hari yang muncul dengan gejala berupa perubahan emosi dan suasana hati yang drastis pada dua rentang waktu. Ketika mengalami masalah kesehatan mental ini, seseorang dapat berada pada fase mania atau senang berlebihan dan depresi mayor (perasaan sedih dan putus asa). </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="jenisDeprisi4-text" class="row" style="display: none;">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-4 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Depresi Postpartum</h4>
                            <p class="lh-lg" style="text-align: justify;">Jenis depresi ini sangat umum terjadi pada ibu yang baru melalui proses persalinan. Biasanya, kondisi ini muncul dengan gejala depresi mayor dalam waktu kurang lebih 1 tahun setelah persalinan. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="jenisDeprisi5-text" class="row" style="display: none;">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-5 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Premenstrual Dysphoric Disorder (PMDD)</h4>
                            <p class="lh-lg" style="text-align: justify;">PMDD adalah gangguan mental yang identik dengan wanita. Gejalanya bisa terlihat sekitar 1 minggu sebelum hari menstruasi untuk beberapa wanita, lalu menghilang ketika haid tiba. Namun, gangguan ini tidak sama dengan gejala dari PMS atau Premenstrual Syndrome.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="jenisDeprisi6-text" class="row" style="display: none;">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-6 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Depresi Atipikal (atypical depression)</h4>
                            <p class="lh-lg" style="text-align: justify;">Jenis ini biasanya muncul dengan beberapa gejala depresi yang tidak khas. Misalnya, kenaikan berat badan yang signifikan, terlalu banyak tidur, penolakan, dan sedih yang berlebihan. Umumnya, gejala ini akan mulai mereda jika pengidapnya mengalami kejadian atau suasana yang positif. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="jenisDeprisi7-text" class="row" style="display: none;">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-7 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Psychotic Depression</h4>
                            <p class="lh-lg" style="text-align: justify;">Terakhir, ada psychotic depression, kondisi gangguan kesehatan mental yang muncul pada seseorang yang mengalami depresi yang parah bersamaan dengan gejala psikotik, misalnya delusi, halusinasi, dan masalah pola pikir.</p>
                        </div>
                    </div>
                </div>
            </div>

            <button id="toggle-button2" type="button" class="btn btn-green mt-2">Read More</button>

        </div>
    </section>

    <section id="sec-4" class="py-5">
        <div class="container my-4">
            <div class="row gx-lg-5">
                <div class="col-lg-6 mb-2 py-5">
                    <h3>Gejala Depresi</h3>
                    <p class="text-muted fw-light lh-lg my-4" style="text-align: justify;">Masalah depresi tidak selalu menunjukkan gejala yang serupa. Ini bergantung pada tingkat keparahan pada setiap pengidapnya. Tingkat ringan dari gangguan mental ini bisa mengganggu aktivitas, produktivitas, dan relasi sosial. Sementara itu, pada depresi yang parah, pengidapnya tidak dapat beraktivitas dan menjalin hubungan dengan orang lain, Umumnya depresi menunjukkan gejala fisik dan emosional tertentu.</p>
                </div>
                <div class="col-lg-6">
                    <img src="gambar/Picture2.png" class="img-fluid">
                </div>
            </div>

            <div id="gejala1-text" class="row" style="display: none;">
                <div class="col-lg-12 mb-3 mt-3">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <p class="lh-lg my-2" style="text-align: justify;">Beberapa Gejala Fisik Orang Yang Depresi</p>
                            <ul>
                                <li class="fw-light lh-lg" style="text-align: justify;">Rasa cemas dan khawatir berlebihan</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Sulit berkonsentrasi</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Emosi yang tidak stabil</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Rasa putus asa atau frustasi</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Lelah atau tidak ada energi, meskipun sudah beristirahat</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Kesulitan melakukan kegiatan sehari-hari</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Perubahan selera makan</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Mengalami gangguan tidur (bisa berlebihan, bisa juga dari lamar tidur biasanya)</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Rasa nyeri atau sakit yang muncul tanpa sebab tertentu</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Bicara dan gerak tubuh yang lebih lambat daripada biasanya</li>
                            </ul>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <p class="lh-lg my-2" style="text-align: justify;">Beberapa Gejala Emosional dan Mental Orang Yang Depresi</p>
                            <ul>
                                <li class="fw-light lh-lg" style="text-align: justify;"></i>Pikiran-pikiran untuk menyakiti diri sendiri atau bunuh diri</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Rasa sedih, cemas, atau mudah marah yang terus menerus</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Hilang minat untuk bergaul dan melakukan kegiatan yang biasanya disukai</li>
                                <li class="fw-light lh-lg" style="text-align: justify;"></i>Menarik diri dari orang lain dan merasa kesepian</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Merasa tidak berharga, tidak punya harapan, atau merasa bersalah</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Mengambil tindakan-tindakan berisiko yang tidak biasanya dilakukan</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row gx-lg-5" id="gejala2-text" style="display: none;">
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-6 mb-5 py-2">
                            <img src="gambar/Picture3.png" class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <p class="text-muted fw-light lh-lg" style="text-align: justify;">
                                Depresi pada anak dan remaja dapat timbul dalam bentuk ketidakbahagiaan atau kondisi mudah tersinggung yang berlangsung lama. Hal ini cukup umum dialami anak berusia pra-remaja dan remaja, tetapi sering kali tidak dikenali.
                            </p>
                            <p class="text-muted fw-light lh-lg style=" text-align: justify;">
                                Bagi sebagian anak, perasaan ini diekspresikan sebagai “tidak bahagia” atau “sedih”. Ada pula yang mengaku ingin melukai diri, bahkan mengakhiri hidupnya. Anak dan remaja yang mengalami depresi lebih berisiko menyakiti diri sendiri, sehingga ujaran-ujaran seperti ini harus selalu ditanggapi dengan serius.
                            </p>
                            <p class="text-muted fw-light lh-lg" style="text-align: justify;">
                                Anak yang terlihat sedih belum tentu depresi. Akan tetapi, jika kesedihan itu bertahan atau mengganggu aktivitas sosial, membuat anak kehilangan minat, menghambat prestasi di sekolah, atau mengganggu hubungannya dengan keluarga, bisa jadi ini berarti anak memerlukan dukungan dari tenaga profesional bidang kesehatan mental.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-lg-5" id="gejala3-text" style="display: none;">
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="text-muted fw-light lh-lg my-4" style="text-align: justify;">
                                Sementara itu, depresi yang terjadi pada usia paruh baya atau orang dewasa yang lebih tua dapat muncul bersamaan dengan penyakit medis serius lainnya. Contohnya diabetes, kanker, penyakit jantung, dan penyakit Parkinson. Penyakit kronis tersebut sering kali lebih buruk ketika depresi hadir. Terkadang obat untuk penyakit tersebut dapat menyebabkan efek samping yang berkontribusi pada depresi.
                            </p>
                        </div>
                        <div class="col-lg-5 mb-5">
                            <img src="gambar/Picture4.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <button id="toggle-button3" type="button" class="btn btn-green mt-2">Read More</button>
        </div>
    </section>

    <section id="sec-5" class="py-5 text-white bg-green">
        <div class="container my-4">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h3 class="mb-2">Penyebab Depresi</h3>
                    <p class="lh-lg fw-light pt-1 w-75 mx-auto">Perlu diketahui bahwa depresi juga dikenal sebagai salah satu masalah kesehatan mental yang sangat kompleks. Tidak ada yang mengetahui dengan pasti apa penyebab seseorang mengalami depresi. Namun, para ahli meyakini ada beberapa hal yang bisa menjadi pemicu dan meningkatkan risiko seseorang mengalami depresi, yaitu:</p>
                </div>
            </div>

            <div class="row gx-lg-5">
                <div class="col-lg-8 mb-2">
                    <h3>1. Riwayat Keluarga</h3>
                    <p class="lh-lg my-2" style="text-align: justify;">Faktanya, risiko seseorang mengalami depresi ternyata lebih tinggi apabila memiliki riwayat keluarga dengan masalah serupa atau masalah pada suasana hati lainnya. Memiliki sifat yang sangat kompleks, depresi bisa terjadi karena pengaruh banyak gen berbeda yang memberikan dampak kecil daripada gen tunggal yang menyebabkan satu penyakit. Seperti masalah kejiwaan lainnya, genetika yang terkait dengan depresi tidak sesederhana penyakit genetik murni kebanyakan.</p>
                </div>
                <div class="col-lg-4">
                    <img src="gambar/2.png" class="img-fluid img-responsive" style="width: 100%; max-width: 100%;">
                </div>
            </div>

            <div class="row gx-lg-5">
                <div class="col-lg-4">
                    <img src="gambar/3.png" class="img-fluid img-responsive" style="width: 100%; max-width: 100%;">
                </div>
                <div class="col-lg-8 mb-2 py-5">
                    <h3>2. Mengamalami Trauma</h3>
                    <p class="lh-lg my-2" style="text-align: justify;">Ada peristiwa yang dapat memengaruhi bagaimana cara tubuh merespons berbagai situasi, ketakutan, dan kecemasan yang memicu munculnya stres. Ini biasanya terjadi karena kekerasan secara fisik, seksual, maupun emosional yang meningkatkan kerentanan terhadap muncul kondisi depresi klinis. </p>
                </div>
            </div>

            <div class="row gx-lg-5">
                <div class="col-lg-8 mb-3 py-5">
                    <h3>3. Struktur Pada Otak</h3>
                    <p class="lh-lg my-2" style="text-align: justify;">Seseorang dengan kondisi lobus frontal pada otak yang kurang aktif lebih berisiko mengalami depresi. Meski begitu, para ahli masih belum mengetahui apakah kondisi tersebut muncul sebelum atau setelah gejala depresi terjadi. </p>
                </div>
                <div class="col-lg-4 py-2">
                    <img src="gambar/4.png" class="img-fluid img-responsive" style="width: 100%; max-width: 100%;">
                </div>
            </div>

            <div class="row gx-lg-5">
                <div class="col-lg-4 py-2">
                    <img src="gambar/5.png" class="img-fluid img-responsive" style="width: 100%; max-width: 100%;">
                </div>
                <div class="col-lg-8 mb-3 py-5">
                    <h3>4. Kondisi Medis Tetentu</h3>
                    <p class="lh-lg my-2" style="text-align: justify;">Risiko depresi juga lebih tinggi pada orang-orang dengan kondisi medis tertentu. Misalnya, depresi lebih rentan terjadi sebagai efek samping dari masalah kesehatan kronis, termasuk nyeri, ADHD, dan insomnia.</p>
                </div>
            </div>

            <div class="row gx-lg-5">
                <div class="col-lg-8 mb-3 py-5">
                    <h3>5. Konsumsi Obat Tetentu</h3>
                    <p class="lh-lg my-2" style="text-align: justify;">Adanya riwayat penyalahgunaan alkohol dan obat terlarang juga meningkatkan risiko terjadinya depresi. Meski begitu, jenis obat resep dari dokter pun bisa memicu hal serupa. Beberapa jenis obat yang dimaksud adalah obat untuk mengatasi jerawat, kortikosteroid, dan obat antivirus jenis interferon-alfa.</p>
                </div>
                <div class="col-lg-4 py-2">
                    <img src="gambar/6.png" class="img-fluid img-responsive" style="width: 100%; max-width: 100%;">
                </div>
            </div>
        </div>

    </section>

    <section id="sec-6" class="py-5">
        <div class="container my-4">
            <div class="row gx-lg-5">
                <div class="col-lg-6 mb-3">
                    <h3>Cara Mengatasi Depresi</h3>
                    <p class="text-muted fw-light lh-lg my-4" style="text-align: justify;">Mengatasi depresi bisa dilakukan dengan pencegahan. Sayangnya, ahli belum mengetahui secara pasti langkah yang efektif untuk mencegah munculnya gejala depresi. Namun, jika kamu mengidap episode kelainan mental ini, akan lebih baik untuk mencegah kekambuhan dengan mempelajari beberapa cara yang efektif. Contohnya, perubahan gaya hidup dan pengobatan yang efektif. </p>
                    <p class="text-muted fw-light lh-lg my-2" style="text-align: justify;">Beberapa cara lain yang bisa kamu lakukan untuk mencegah kelainan ini, antara lain:</p>
                    <ul>
                        <li class="text-muted fw-light lh-lg" style="text-align: justify;">Hindari kebiasaan menyendiri dengan mencari komunitas yang baik.</li>
                        <li class="text-muted fw-light lh-lg" style="text-align: justify;">Buat hidup lebih sederhana dengan membuat perencanaan jangka pendek dan panjang.</li>
                        <li class="text-muted fw-light lh-lg" style="text-align: justify;">Berolahraga secara teratur, minimal 3–5 kali dalam seminggu dengan durasi sekitar 30 menit.</li>
                        <li class="text-muted fw-light lh-lg" style="text-align: justify;">Konsumsi makanan dengan gizi seimbang dan pola makan yang teratur.</li>
                        <li class="text-muted fw-light lh-lg" style="text-align: justify;">Buat hidup lebih santai dan hindari stres.</li>
                        <li class="text-muted fw-light lh-lg" style="text-align: justify;">Hindari konsumsi minuman beralkohol serta obat-obatan terlarang.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <img src="gambar/Picture10.png" class="img-fluid mt-10" style="width: 100%;">
                </div>
            </div>

            <div id="caraMengatasi1-text" class="row" style="display: none;">
                <p class="fw-light lh-lg" style="text-align: justify;">Apabila telah mengalami depresi, dapat dilakukan dengan pengobatan Beberapa cara yang dapat menjadi pilihan untuk mengatasi masalah kesehatan mental ini, antara lain:</p>
            </div>

            <div id="caraMengatasi2-text" class="row" style="display: none;">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-1 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Perawatan Mandiri</h4>
                            <p class="lh-lg" style="text-align: justify;">Perawatan mandiri bisa menjadi pilihan terbaik untuk mengatasi depresi yang ringan. Bagi banyak orang, olahraga teratur membantu menciptakan perasaan positif dan meningkatkan suasana hati. Mendapatkan kualitas tidur yang cukup, mengonsumsi makanan sehat dan menghindari alkohol (depresan) juga bisa membantu mengurangi gejala depresi.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="caraMengatasi3-text" class="row" style="display: none;">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-2 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Psikoterapi</h4>
                            <p class="lh-lg" style="text-align: justify;">Dokter akan merekomendasikan psikoterapi untuk kasus depresi ringan hingga berat. Selain itu, dokter juga sering mengombinasikan psikoterapi dengan obat. Berikut jenis terapi untuk mengatasi gangguan mental tersebut:</p>
                            <ul>
                                <li class="fw-light lh-lg" style="text-align: justify;">Cognitive behavior therapy (CBT). Terapi ini bertujuan untuk membantu pengidap melepaskan pikiran dan perasaan negatif serta menggantinya dengan respon positif.</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Problem-solving therapy (PST), terapi yang dapat membantu meningkatkan kemampuan pengidap menghadapi pengalaman yang memicu rasa tertekan.</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Interpersonal therapy (IPT), guna membantu mengatasi masalah yang muncul saat berhubungan dengan orang lain.</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Terapi psikodinamis, untuk membantu pengidap memahami apa yang sedang dirasakan dan bagaimana merespon perasaan tersebut.</li>
                            </ul>
                            <p class="lh-lg" style="text-align: justify;">Bergantung pada tingkat keparahan kondisi tersebut, pengobatan bisa memerlukan waktu beberapa minggu atau lebih lama. Dalam banyak kasus, peningkatan yang signifikan dapat berlangsung dalam 10 hingga 15 sesi.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="caraMengatasi4-text" class="row" style="display: none;">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-3 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Obat</h4>
                            <p class="lh-lg" style="text-align: justify;">Ketidakseimbangan bahan kimia pada otak menjadi salah satu faktor risiko depresi. Dokter dapat meresepkan antidepresan untuk membantu memodifikasi kimia otak seseorang. Umumnya, obat antidepresan tidak memiliki efek stimulasi pada orang yang tidak mengalami kelainan tersebut.</p>
                            <p class="lh-lg" style="text-align: justify;">Antidepresan dapat mengurangi gejala dalam satu atau dua minggu pertama konsumsi, tapi manfaat penuh bisa jadi tidak terlihat hingga dua sampai tiga bulan. Dalam beberapa situasi, obat psikotropika lain mungkin membantu.</p>
                            <p class="lh-lg" style="text-align: justify;">Dokter biasanya menyarankan pengidap terus minum obat selama enam bulan atau lebih setelah gejala depresi membaik. Perawatan jangka panjang juga dapat membantu untuk mengurangi risiko episode depresi pada masa depan bagi orang-orang yang lebih berisiko.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="caraMengatasi5-text" class="row" style="display: none;">
                <div class="text-left text-sm-start mb-4">
                    <div class="row">
                        <div class="col-sm-1 d-sm-flex justify-content-sm-end">
                            <span class="d-flex align-items-center justify-content-center circle-icon bg-whit mx-sm-0 mx-auto mb-4">
                                <i class="fa fa-4 fs-2"></i>
                            </span>
                        </div>
                        <div class="col-sm-11">
                            <h4>Terapi Stimulasi Otak</h4>
                            <p class="lh-lg" style="text-align: justify;">Jenis terapi ini biasanya menjadi pilihan untuk kondisi depresi yang tidak membaik setelah mengonsumsi obat, mengalami gejala psikosis, serta menunjukkan percobaan untuk bunuh diri. Jenis terapi stimulasi otak ini termasuk:</p>
                            <ul>
                                <li class="fw-light lh-lg" style="text-align: justify;">Electroconvulsive therapy (ECT), Terapi ini dilakukan dengan mengalirkan arus listrik ke otak melalui kulit kepala untuk menyebabkan kejang singkat.</li>
                                <li class="fw-light lh-lg" style="text-align: justify;">Transcranial Magnetic Stimulation (TMS), Jenis stimulasi otak ini berlangsung dengan memakai energi magnet yang diubah menjadi arus listrik pada bagian bawah tengkorak. Prosedur ini bertujuan untuk membantu pengidap mengatur emosi. TMS adalah pengobatan tambahan yang bisa digabung dengan pengobatan dan non-invasif (tidak memerlukan operasi).</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <button id="toggle-button4" type="button" class="btn btn-green mt-2">Read More</button>

        </div>
    </section>

    <!-- boostrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>

    <script>
        var buttonElement = document.getElementById("toggle-button");
        var textElement = document.getElementById("additional-text");
        var textElement2 = document.getElementById("additional-text-2");

        var buttonElement2 = document.getElementById("toggle-button2");
        var jenisDepresi4 = document.getElementById("jenisDeprisi4-text");
        var jenisDepresi5 = document.getElementById("jenisDeprisi5-text");
        var jenisDepresi6 = document.getElementById("jenisDeprisi6-text");
        var jenisDepresi7 = document.getElementById("jenisDeprisi7-text");

        var buttonElement3 = document.getElementById("toggle-button3");
        var gejala1 = document.getElementById("gejala1-text");
        var gejala2 = document.getElementById("gejala2-text");
        var gejala3 = document.getElementById("gejala3-text");

        var buttonElement4 = document.getElementById("toggle-button4");
        var caraMengatasi1 = document.getElementById("caraMengatasi1-text");
        var caraMengatasi2 = document.getElementById("caraMengatasi2-text");
        var caraMengatasi3 = document.getElementById("caraMengatasi3-text");
        var caraMengatasi4 = document.getElementById("caraMengatasi4-text");
        var caraMengatasi5 = document.getElementById("caraMengatasi5-text");

        buttonElement.addEventListener("click", toggleText);
        buttonElement2.addEventListener("click", toggleText2);
        buttonElement3.addEventListener("click", toggleText3);
        buttonElement4.addEventListener("click", toggleText4);

        function toggleText() {
            if (textElement.style.display === "none") {
                textElement.style.display = "block";
                textElement2.style.display = "block";
                buttonElement.textContent = "Show Less";
            } else {
                textElement.style.display = "none";
                textElement2.style.display = "none";
                buttonElement.textContent = "Read More";
            }
        }

        function toggleText2() {
            if (jenisDepresi4.style.display === "none") {
                jenisDepresi4.style.display = "block";
                jenisDepresi5.style.display = "block";
                jenisDepresi6.style.display = "block";
                jenisDepresi7.style.display = "block";
                buttonElement2.textContent = "Show Less";
            } else {
                jenisDepresi4.style.display = "none";
                jenisDepresi5.style.display = "none";
                jenisDepresi6.style.display = "none";
                jenisDepresi7.style.display = "none";
                buttonElement2.textContent = "Read More";
            }
        }

        function toggleText3() {
            if (gejala1.style.display === "none") {
                gejala1.style.display = "block";
                gejala2.style.display = "block";
                gejala3.style.display = "block";
                buttonElement3.textContent = "Show Less";
            } else {
                gejala1.style.display = "none";
                gejala2.style.display = "none";
                gejala3.style.display = "none";
                buttonElement3.textContent = "Read More";
            }
        }

        function toggleText4() {
            if (caraMengatasi1.style.display === "none") {
                caraMengatasi1.style.display = "block";
                caraMengatasi2.style.display = "block";
                caraMengatasi3.style.display = "block";
                caraMengatasi4.style.display = "block";
                caraMengatasi5.style.display = "block";
                buttonElement4.textContent = "Show Less";
            } else {
                caraMengatasi1.style.display = "none";
                caraMengatasi2.style.display = "none";
                caraMengatasi3.style.display = "none";
                caraMengatasi4.style.display = "none";
                caraMengatasi5.style.display = "none";
                buttonElement4.textContent = "Read More";
            }
        }
    </script>

</body>

</html>