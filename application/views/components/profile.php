<style>
    .profile-section {
        padding: 60px 0;
        background-color: #f9f9f9;
    }

    .profile-card {
        background-color: #ffffff;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 30px;
        text-align: center;
    }

    .profile-card img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin-bottom: 20px;
    }

    .profile-card .profile-name {
        font-size: 24px;
        font-weight: bold;
        color: #333333;
    }

    .profile-card .profile-title {
        font-size: 18px;
        color: #f4623a;
        margin-bottom: 15px;
    }

    .profile-card .profile-description {
        font-size: 16px;
        color: #555555;
        margin-bottom: 20px;
    }
</style>
<section class="profile-section" id="profile-author">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card profile-card">
                    <div class="d-flex justify-content-center">
                        <img src="<?php echo base_url('assets/img/author.jpg'); ?>" alt="Author Image">
                    </div>
                    <h3 class="profile-name">Nama Penulis</h3>
                    <h4 class="profile-title">Gelar dan Posisi</h4>
                    <p class="profile-description">
                        Penulis adalah seorang ahli dalam bidang batik dan pewarnaan alami, dengan pengalaman lebih dari 20 tahun.
                        Beliau telah berkontribusi dalam berbagai penelitian dan pengembangan teknik batik ramah lingkungan, serta aktif dalam melestarikan budaya batik tradisional Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>