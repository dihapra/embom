<!-- Portfolio-->
<div id="portfolio">
    <div class="container-fluid p-0">
        <h2 class="text-center" style="color: #f4623a;">Video</h2>
        <div class="row g-1">
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-box" data-fancybox="gallery" href="https://www.youtube.com/embed/ZBfNbuSSxtQ?si=u70a3PwUN6rQaMsE" title="Indonesia's batik makers shifted from chemicals to mangrove-based products">
                    <iframe class="img-fluid" src="https://www.youtube.com/embed/ZBfNbuSSxtQ?si=u70a3PwUN6rQaMsE" frameborder="0" allowfullscreen></iframe>
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Yayasan Gajah Sumatera</div>
                        <div class="project-name">Yagasu Organic Batik</div>
                    </div>
                </div>
                <p class="text-center mt-2">Source: <a href="https://www.youtube.com/@yayasangajahsumatera169" target="_blank">Yayasan Gajah Sumatera</a></p>
            </div>
            <!-- You can add more videos in the similar way -->
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-box" data-fancybox="gallery" href="https://www.youtube.com/embed/pfa_SEgjoYo" title="Indonesia's batik makers shifted from chemicals to mangrove-based products">
                    <iframe class="img-fluid" src="https://www.youtube.com/embed/pfa_SEgjoYo" frameborder="0" allowfullscreen></iframe>
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">TRT World</div>
                        <div class="project-name">Indonesia's batik makers shifted from chemicals to mangrove-based products</div>
                    </div>
                </div>
                <p class="text-center mt-2">Source: <a href="https://www.youtube.com/c/trtworld" target="_blank">TRT World</a></p>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-box" data-fancybox="gallery" href="https://www.youtube.com/embed/7PcV72AfPSY?si=w8jvswBPbTG107qV" title="Indonesia's batik makers shifted from chemicals to mangrove-based products">
                    <iframe class="img-fluid" src="https://www.youtube.com/embed/7PcV72AfPSY?si=w8jvswBPbTG107qV" frameborder="0" allowfullscreen></iframe>
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">keMangi</div>
                        <div class="project-name">Cara Pembuatan Batik Mangrove</div>
                    </div>
                </div>
                <p class="text-center mt-2">Source: <a href="https://www.youtube.com/@KeMANGI" target="_blank">keMangi</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Fancybox for YouTube modal view -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script>
    // Initialize Fancybox
    Fancybox.bind("[data-fancybox]", {
        // Options will go here
    });
</script>

<style>
    .portfolio-box {
        position: relative;
        display: block;
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 0.25rem;
    }

    .portfolio-box iframe {
        width: 100%;
        height: 300px;
        display: block;
        max-width: 100%;
    }

    .portfolio-box-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        color: white;
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

        .portfolio-box iframe {
            height: 300px;

        }
    }
</style>