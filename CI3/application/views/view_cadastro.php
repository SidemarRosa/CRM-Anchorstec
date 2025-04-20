<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset=" utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/fav/apple-icon.png">
    <link rel="icon" type="image/ico" href="../assets/img/fav/favicon.png">
    <title>
        CRM Anchorstec - Cadastro
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

</head>

<body class="g-sidenav-show  bg-gray-100">
    <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-75 pt-5 pb-11" style="background-image: url('../assets/img/curved-images/curved8.jpg');">
            <span class="mask bg-gradient-dark opacity-3"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Bem vindo!</h1>
                        <p class="text-lead text-white">Faça seu cadastro para acesso ao CRM Anchorstec.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Registre-se</h5>
                        </div>
                        <div class="card-body">
                            <form action="http://localhost/crm/CI3/index.php/cadastro/processar" method="POST">

                                <!-- Token CSRF -->
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                                    <div class="text-danger"><?= form_error('nome'); ?></div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="documento" placeholder="CNPJ ou CPF" required>
                                    <div class="text-danger"><?= form_error('documento'); ?></div>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    <div class="text-danger"><?= form_error('email'); ?></div>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                                    <div class="text-danger"><?= form_error('senha'); ?></div>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="confirmar_senha" placeholder="Confirme sua Senha" required>
                                    <div class="text-danger"><?= form_error('confirmar_senha'); ?></div>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2 text-white">Registrar</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">
                                    Já tem uma conta? <a href="http://localhost/crm/CI3/index.php/Login" class="text-dark font-weight-bolder">Faça login</a>
                                </p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>