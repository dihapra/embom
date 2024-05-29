<style>
    #pdf-frame {
        width: 100%;
        max-width: 700px;
        height: 500px;
        border: none;
        margin: 20px auto;
    }

    #pdf-modal-frame {
        width: 100%;
        height: 100%;
        border: none;
    }

    .modal-dialog-fullscreen {
        width: auto;
        max-width: 100%;
        margin: 0;
    }

    .modal-content-fullscreen {
        height: 100vh;
        border-radius: 0;
    }
</style>
<section id="readsection" class="d-flex flex-column align-items-center">
    <iframe id="pdf-frame" src="<?php echo base_url('assets/embom.pdf') ?>"></iframe>
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#pdfModal">Fullscreen</button>
</section>

<!-- Modal -->
<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-fullscreen">
        <div class="modal-content modal-content-fullscreen">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <iframe id="pdf-modal-frame" src="<?php echo base_url('assets/embom.pdf') ?>"></iframe>
            </div>
        </div>
    </div>
</div>