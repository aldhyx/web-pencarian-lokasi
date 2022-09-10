<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
    <div class="container">
        <!-- <a class="navbar-brand" href="/page/home"><i class="bi bi-house"></i>SPK</a> -->
        <a class="navbar-brand" href="/dashboard">SPK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <a class="nav-link" href="<?= url_to('admin.alternative.index'); ?>">Alternatif</a>
                <a class="nav-link" href="<?= url_to('admin.criteria.index'); ?>"> Kriteria</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Perhitungan
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="">Bobot</a>
                        <a class="dropdown-item" href="">Penilaian</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</nav>