<style>
    #batik-mangrove .content {
        text-align: center;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .portfolio-box {
        position: relative;
        display: block;
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 0.25rem;
    }

    .portfolio-box img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
        transition: all 0.3s ease;
    }

    .portfolio-box:hover img {
        transform: scale(1.1);
    }

    .portfolio-box-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        padding: 1rem;
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        width: 100%;
    }

    .portfolio-box:hover .portfolio-box-caption {
        opacity: 1;
    }

    @media (max-width: 576px) {
        .portfolio-box {
            margin: 0 10px;
        }

        .portfolio-box img {
            height: 150px;
        }
    }
</style>
<section class="page-section" id="batik-mangrove">
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-12 content">
                <h2 class="text-center" style="color: #f4623a;">Batik Mangrove</h2>
                <p>
                    Batik Mangrove adalah jenis batik yang menggunakan pewarna alami yang berasal dari
                    tanaman mangrove. Pewarna alami ini tidak hanya memberikan warna yang unik dan
                    menarik, tetapi juga ramah lingkungan karena tidak mengandung bahan kimia berbahaya.
                    Batik Mangrove merupakan inovasi yang mendukung kelestarian lingkungan dan memberikan
                    nilai tambah ekonomi bagi masyarakat pesisir yang menanam dan merawat mangrove.
                </p>
                <p>
                    Proses pembuatan Batik Mangrove dimulai dengan ekstraksi pewarna dari bagian-bagian
                    tertentu dari tanaman mangrove seperti daun, kulit kayu, atau buah. Ekstraksi ini
                    kemudian digunakan untuk mewarnai kain batik melalui teknik pewarnaan tradisional.
                    Warna yang dihasilkan dari mangrove cenderung lebih lembut dan alami, menciptakan
                    karya seni yang indah dan memiliki nilai ekologis tinggi.
                </p>
            </div>
        </div>
        <div class="row g-1">
            <!-- Placeholder for images -->
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" data-fancybox="gallery" href="<?php echo base_url('assets/img/batik-mangrove-1.jpg'); ?>" title="Batik Mangrove 1">
                    <img class="img-fluid" src="<?php echo base_url('assets/img/batik-mangrove-1.jpg'); ?>" alt="Batik Mangrove 1" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Batik Mangrove</div>
                        <div class="project-name">Batik Mangrove 1</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" data-fancybox="gallery" href="<?php echo base_url('assets/img/batik-mangrove-2.jpg'); ?>" title="Batik Mangrove 2">
                    <img class="img-fluid" src="<?php echo base_url('assets/img/batik-mangrove-2.jpg'); ?>" alt="Batik Mangrove 2" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Batik Mangrove</div>
                        <div class="project-name">Batik Mangrove 2</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" data-fancybox="gallery" href="<?php echo base_url('assets/img/batik-mangrove-3.jpg'); ?>" title="Batik Mangrove 3">
                    <img class="img-fluid" src="<?php echo base_url('assets/img/batik-mangrove-3.jpg'); ?>" alt="Batik Mangrove 3" />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Batik Mangrove</div>
                        <div class="project-name">Batik Mangrove 3</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script>
    // Initialize Fancybox
    Fancybox.bind("[data-fancybox]", {
        // Options will go here
    });
</script>