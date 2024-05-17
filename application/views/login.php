<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login KKN Unimed</title>
    <link href="<?php echo base_url("assets/batik.png") ?>" rel="icon">
    <link href="<?php echo base_url('assets/css/login.css') ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Pemilihan Lokasi KKN <br> UNIMED 2023
                                    </h3>
                                    <br>
                                </div><br>
                                <div class="card-body">
                                    <form action="<?php echo base_url('admin/login') ?>" method="POST">
                                        <div class="mb-1">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group auth-inputgroup">
                                                <input type="email" required title="Email" class="form-control" id="email" placeholder="Silahkan Masukkan Email Anda" name="email">
                                                <button class="btn btn-light" type="button" id="email-addon">
                                                    <i class="fas fa-user"></i>
                                                </button>
                                            </div>
                                            <span class="text-danger"></span>

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input required type="password" id="password" title="Password" name="password" class="form-control" placeholder="Silahkan Masukkan Password Anda" aria-label="Password" aria-describedby="password-addon">
                                                <!-- Eye Icon -->
                                                <button class="btn btn-light" type="button" id="password-addon">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                        <br>
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary " type="submit">Log
                                                In</button>
                                        </div>
                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; E-KKN UNIMED 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?php echo base_url('js/scripts.js') ?>"></script>
</body>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "arial", heletica, sans-serif;
        font-size: 12px;
        background: #f4623a url('https://static.tumblr.com/03fbbc566b081016810402488936fbae/pqpk3dn/MRSmlzpj3/tumblr_static_bg3.png') repeat 0 0;
        -webkit-animation: 10s linear 0s normal none infinite animate;
        -moz-animation: 10s linear 0s normal none infinite animate;
        -ms-animation: 10s linear 0s normal none infinite animate;
        -o-animation: 10s linear 0s normal none infinite animate;
        animation: 10s linear 0s normal none infinite animate;

    }

    @-webkit-keyframes animate {
        from {
            background-position: 0 0;
        }

        to {
            background-position: 500px 0;
        }
    }

    @-moz-keyframes animate {
        from {
            background-position: 0 0;
        }

        to {
            background-position: 500px 0;
        }
    }

    @-ms-keyframes animate {
        from {
            background-position: 0 0;
        }

        to {
            background-position: 500px 0;
        }
    }

    @-o-keyframes animate {
        from {
            background-position: 0 0;
        }

        to {
            background-position: 500px 0;
        }
    }

    @keyframes animate {
        from {
            background-position: 0 0;
        }

        to {
            background-position: 500px 0;
        }
    }
</style>
<script>
    const password = document.getElementById('password');
    const passwordBtn = document.getElementById('password-addon');
    passwordBtn.addEventListener('click', function() {
        if (password.type === 'password') {
            password.type = 'text';
            this.innerHTML = '<i class="fas fa-eye-slash"></i>';
        } else {
            password.type = 'password';
            this.innerHTML = '<i class="fas fa-eye"></i>';
        }
    });
</script>

</html>