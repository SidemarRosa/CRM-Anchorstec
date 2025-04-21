  <!-- Conteudo da pagina -->
  <main
        class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <!-- Navbar -->
        <nav
            class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
            id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-5 text-dark" href="http://localhost/crm/CI3/index.php/dashboard">Home</a>
                        </li>
                        <li
                            class="breadcrumb-item text-sm text-dark active"
                            aria-current="page">
                            <?php echo $page; ?>
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0"> <?php echo $page; ?> </h6>
                </nav>
                <div class="align-items-center">
                    <!-- Saudação com nome da variável de sessão -->
                    <?php if ($this->session->userdata('user_name')): ?>
                        <span class="fs-5 fw-bold text-dark">Olá, <?php echo $this->session->userdata('user_name'); ?>!</span>
                    <?php else: ?>
                        <span class="fs-5 fw-bold text-dark">Olá, visitante!</span>
                    <?php endif; ?>
                </div>


                <div
                    class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
                    id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="text-body" id="horaDataAtual" style="font-weight: 500;">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->