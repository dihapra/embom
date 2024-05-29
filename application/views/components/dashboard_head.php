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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
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
            width: 100%;
            height: 100%;
            overflow: auto;
            margin: auto;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #pdf-canvas {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 576px) {
            #pdf-container {
                width: 90%;
                height: 90%;
            }
        }
    </style>
</head>