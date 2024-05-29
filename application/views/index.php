<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('components/dashboard_head'); ?>

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
    <?php $this->load->view('components/batik_mangrove'); ?>
    <?php $this->load->view('components/proses_batik'); ?>
    <?php $this->load->view('components/video_dashboard'); ?>
    <?php $this->load->view('components/intro_modul'); ?>

    <?php $this->load->view('components/pdf_viewer'); ?>



    <?php $this->load->view('components/evaluasi'); ?>

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





    <?php $this->load->view('components/modal_pemahaman_1'); ?>
    <?php $this->load->view('components/modal_pemahaman_2'); ?>
    <?php $this->load->view('components/modal_pemahaman_3'); ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url("/assets/js/scripts.js") ?>"></script>

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