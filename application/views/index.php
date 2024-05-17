<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>EMBOM</title>
    <!-- Favicon-->
    <link href="<?php echo base_url("assets/batik.png") ?>" rel="icon">
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url("/assets/css/styles.css") ?>" rel="stylesheet" />
    <style>
        #soal {
            position: relative;
            background-image: url(<?php echo base_url('assets/img/bg-2.jpg') ?>);
            /* Ganti dengan URL gambar Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
        }

        #soal::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            /* Warna overlay hitam semi-transparan */
            z-index: 1;
        }

        #soal .container {
            position: relative;
            z-index: 2;
        }

        .font-soal {
            font-size: 12px;
        }

        .font-header-soal {
            font-size: 14px;
            font-weight: 600;
        }

        header.masthead {
            padding-top: 10rem;
            padding-bottom: calc(10rem - 4.5rem);
            background: linear-gradient(to bottom,
                    rgba(92, 77, 66, 0.8) 0%,
                    rgba(92, 77, 66, 0.8) 100%),
                url("<?php echo base_url("/assets/img/bg-masthead.jpg") ?>");
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }
    </style>
    <style>
        #pdf-container {
            width: 60%;
            height: 500px;
            overflow: auto;
            margin: auto;
            border: 1px solid #ddd;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Custom scrollbar */
        #pdf-container::-webkit-scrollbar {
            width: 8px;
        }

        #pdf-container::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        #pdf-container::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">E-MBOM</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#module">Module</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#evaluasi">Evaluasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Galery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">
                        (E-MBOM) Elektronik Modul Batik Organik Mangrove
                    </h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">
                        Selamat datang di Elektronik Modul Batik Organik Mangrove, di mana
                        tradisi batik Indonesia berpadu dengan inovasi teknologi dan
                        keberlanjutan lingkungan!
                    </p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <!-- Services-->
    <section class="page-section" id="module">
        <div class="container px-4 px-lg-5">
            <div class="row">
                <div class="col-md-4 col-12 text-center ">
                    <img src="<?php echo base_url("assets/img/cover.jpg") ?>" alt="cover modul">
                </div>
                <div class="col-md-8 col-12 ">

                    <h1>E-MBOM</h1>
                    <h2 class="fs-5 font-weight-bold">
                        MODUL BATIK: Batik Khas Medan dan Ornamen Sumatra Utara
                    </h2>
                    <p class="fs-6">
                        Modul ini dirancang untuk memfasilitasi pembelajaran tentang
                        batik khas Medan dan ornamen tradisional Sumatra Utara. Dengan
                        menggali pengertian, teknik pembuatan, serta mendalami ragam
                        motif dan ornamen etnis Sumatra Utara, pembelajar akan mampu
                        mengembangkan pemahaman mendalam tentang kekayaan budaya batik
                        Indonesia. Langkah-langkah praktis dan evaluasi yang
                        disediakan akan membantu pembelajar menguasai materi dengan
                        lebih baik.
                    </p>
                    <h2 class="fs-5 font-weight-bold">Deskripsi</h2>
                    <p class="fs-6">
                        Buku ini membahas secara komprehensif mengenai batik sebagai
                        warisan budaya Indonesia yang memiliki nilai seni tinggi. Dari
                        sejarah asal usul batik hingga perkembangannya yang pesat di
                        seluruh Nusantara dan mancanegara, buku ini menyoroti peran
                        penting kesadaran lingkungan dalam menjaga kelestarian
                        industri batik. Fokusnya terletak pada pengembangan batik
                        warna alami, dengan penekanan pada pemanfaatan sumber daya
                        alam lokal untuk zat warna alami guna mengurangi dampak
                        negatif terhadap lingkungan. Buku ini mengajak pembaca untuk
                        memahami peran strategis batik dalam perekonomian Indonesia
                        serta mendukung gerakan menuju produksi batik yang
                        berkelanjutan dan ramah lingkungan.
                    </p>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <section id="readsection" class="d-flex flex-column align-items-center">
        <div id="pdf-container"></div>
        <div class="mt-3">
            <button id="prev" class="btn btn-primary mr-2">Previous</button>
            <button id="next" class="btn btn-primary">Next</button>
        </div>
    </section>

    <section id="evaluasi">
        <div class="container px-4 px-lg-5 py-1">
            <h2 class="text-center mt-2">Uji Pemahaman</h2>
            <hr class="divider" />
            <p class="text-white-75 mb-4">
                Uji pemahaman Anda tentang teknik pewarnaan batik dengan mangrove melalui modul ini,
                dan kembangkan keterampilan seni tradisional yang berkelanjutan serta ramah lingkungan.</p>
            <div class="row gx-4 gx-lg-5 text-center mt-10">
                <div class="col-md-4 col-12">
                    <div class="mt-5 mb-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#soalModal1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                            Tes pemahaman 1
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="mt-5 mb-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#soalModal2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                            Tes pemahaman 2
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="mt-5 mb-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#soalModal3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                            Tes pemahaman 3
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="<?php echo base_url('assets/img/bg-masthead.jpg') ?>" title="Project Name">
                        <img class="img-fluid" src="<?php echo base_url('assets/img/bg-masthead.jpg') ?>" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="<?php echo base_url('assets/img/bg-2.jpg') ?>" title="Project Name">
                        <img class="img-fluid" src="<?php echo base_url('assets/img/bg-2.jpg') ?>" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="<?php echo base_url('assets/img/bg-2.jpg') ?>" title="Project Name">
                        <img class="img-fluid" src="<?php echo base_url('assets/img/bg-2.jpg') ?>" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">
                E-MBOM
            </div>
        </div>
    </footer>

    <!-- Modal Tes Pemahaman 1 -->
    <div class="modal fade" id="soalModal1" tabindex="-1" aria-labelledby="soalModal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="soalModal1Label">Tes Pemahaman 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formSoal1" class="p-1 pe-5">
                        <h2 class="font-header-soal">Kerjakanlah soal evaluasi dibawah ini !</h2>
                        <div class="mb-3">
                            <label for="pertanyaan3" class="form-label font-soal">Nama</label>
                            <input type="text" class="form-control font-soal" name="nama" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan1" class="form-label font-soal">1. Tuliskan pengertian Batik menurut istilah?</label>
                            <input type="text" class="form-control font-soal" name="jawaban1" id="pertanyaan1" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan2" class="form-label font-soal">2. Tuliskan pengertian Batik menurut bahasa?</label>
                            <input type="text" class="form-control font-soal" name="jawaban2" id="pertanyaan2" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan3" class="form-label font-soal">3. Pada tanggal berapa UNESCO menetapkan bahwasanya batik merupakan salah satu kebudayaan asli Indonesia?</label>
                            <input type="text" class="form-control font-soal" name="jawaban3" id="pertanyaan3" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan4" class="form-label font-soal">4. Tuliskan cara penerapan ornamen pada motif Batik?</label>
                            <input type="text" class="form-control font-soal" name="jawaban4" id="pertanyaan4" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan5" class="form-label font-soal">5. Penciptaan motif batik dipengaruhi oleh?</label>
                            <input type="text" class="form-control font-soal" name="jawaban5" id="pertanyaan5" required>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="submitForm()">Kirim Jawaban</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tes Pemahaman 2 -->
    <div class="modal fade" id="soalModal2" style="font-size: 12px;" tabindex="-1" aria-labelledby="soalModal2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="soalModal2Label">Tes Pemahaman 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Konten soal evaluasi 2 -->
                    <form id="formSoal2" class="p-1 pe-5">
                        <h2 class="font-header-soal">Kerjakanlah soal evaluasi dibawah ini !</h2>
                        <div class="mb-3">
                            <label for="pertanyaan3" class="form-label font-soal">Nama</label>
                            <input type="text" class="form-control font-soal" name="nama" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan1" class="form-label font-soal">1. Jelaskan alat dan bahan yang diperlukan dalam membuat batik?</label>
                            <input type="text" class="form-control font-soal" name="jawaban1" id="pertanyaan1" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan2" class="form-label font-soal">2. Tuliskan Teknik dalam pembuatan batik?</label>
                            <input type="text" class="form-control font-soal" name="jawaban2" id="pertanyaan2" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan3" class="form-label font-soal">3. Jelaskan proses membuat batik?</label>
                            <input type="text" class="form-control font-soal" name="jawaban3" id="pertanyaan3" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan4" class="form-label font-soal">4. Tuliskan 2 jenis sumber warna dalam membatik?</label>
                            <input type="text" class="form-control font-soal" name="jawaban4" id="pertanyaan4" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan5" class="form-label font-soal">5. Apa tahapan awal sebelum melakukan proses membatik tulis?</label>
                            <input type="text" class="form-control font-soal" name="jawaban5" id="pertanyaan5" required>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="submitForm()">Kirim Jawaban</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tes Pemahaman 3 -->
    <div class="modal fade" id="soalModal3" tabindex="-1" aria-labelledby="soalModal3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="soalModal3Label">Tes Pemahaman 3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Konten soal evaluasi 3 -->
                    <form id="formSoal3" class="p-1 pe-5">
                        <h2 class="font-header-soal">Kerjakanlah soal evaluasi dibawah ini !</h2>
                        <div class="mb-3">
                            <label for="pertanyaan3" class="form-label font-soal">Nama</label>
                            <input type="text" class="form-control font-soal" name="nama" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan1" class="form-label font-soal">1. Tuliskan makna simbolik dari 5 ornamen pada etnis Batak Toba?</label>
                            <input type="text" class="form-control font-soal" name="jawaban1" id="pertanyaan1" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan2" class="form-label font-soal">2. Tuliskan makna simbolik dari 5 ornamen pada etnis Simalungun dan Nias?</label>
                            <input type="text" class="form-control font-soal" name="jawaban2" id="pertanyaan2" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan3" class="form-label font-soal">3. Tuliskan makna simbolik dari 5 ornamen pada etnis Karo dan Melayu?</label>
                            <input type="text" class="form-control font-soal" name="jawaban3" id="pertanyaan3" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan4" class="form-label font-soal">4. Tuliskan makna simbolik dari 5 ornamen pada etnis Pak pak?</label>
                            <input type="text" class="form-control font-soal" name="jawaban4" id="pertanyaan4" required>
                        </div>
                        <div class="mb-3">
                            <label for="pertanyaan5" class="form-label font-soal">5. Kelompokan 3 ornamen yang memiliki makna serupa?</label>
                            <input type="text" class="form-control font-soal" name="jawaban5" id="pertanyaan5" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
                        <a href="index.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url("/assets/js/scripts.js") ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js"></script>
    <script>
        const url = '<?php echo base_url('assets/embom.pdf') ?>'; // Ganti dengan URL PDF Anda


        const pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js';

        let pdfDoc = null;
        let currentPage = 1;
        let scale = 1.0;
        const pdfContainer = document.getElementById('pdf-container');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');

        const renderPage = async (pageNum) => {
            const page = await pdfDoc.getPage(pageNum);
            const viewport = page.getViewport({
                scale: scale * (pdfContainer.clientWidth / page.getViewport({
                    scale: 1.0
                }).width)
            });
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            pdfContainer.innerHTML = ''; // Clear previous page
            pdfContainer.appendChild(canvas);

            const renderContext = {
                canvasContext: context,
                viewport: viewport
            };

            await page.render(renderContext).promise;

            // Adjust container scrollbars
            if (scale > 1.0) {
                pdfContainer.style.overflow = 'auto';
            } else {
                pdfContainer.style.overflow = 'hidden';
            }

            console.log(`Page ${pageNum} rendered`);
        };

        const loadPDF = async (url) => {
            try {
                pdfDoc = await pdfjsLib.getDocument(url).promise;
                console.log(`PDF loaded with ${pdfDoc.numPages} pages`);
                renderPage(currentPage);
            } catch (error) {
                console.error('Error loading PDF', error);
            }
        };

        prevButton.addEventListener('click', () => {
            if (currentPage <= 1) return;
            currentPage--;
            renderPage(currentPage);
        });

        nextButton.addEventListener('click', () => {
            if (currentPage >= pdfDoc.numPages) return;
            currentPage++;
            renderPage(currentPage);
        });

        pdfContainer.addEventListener('wheel', (event) => {
            event.preventDefault();
            if (event.deltaY < 0) {
                scale += 0.1;
            } else {
                if (scale > 0.2) {
                    scale -= 0.1;
                }
            }
            renderPage(currentPage);
        });

        loadPDF(url);
    </script>
</body>
<script>
    async function submitForm() {
        const form = document.getElementById('formSoal1');
        const formData = new FormData(form);
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });
        const jsonData = JSON.stringify(data);
        console.log(jsonData);

        // try {
        //     const response = await fetch('your-server-endpoint', {
        //         method: 'POST',
        //         headers: {
        //             'Content-Type': 'application/json'
        //         },
        //         body: jsonData
        //     });

        //     if (!response.ok) {
        //         throw new Error('Network response was not ok');
        //     }

        //     const responseData = await response.json();
        //     console.log(responseData);
        // } catch (error) {
        //     console.error('Error:', error);
        // }
    }
</script>

</html>