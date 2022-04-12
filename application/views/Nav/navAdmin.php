<nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <div class="container-fluid ms-5 me-5">
        <a class="navbar-brand" href="#">
            <h1>HOTEL HEBAT</h1>
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Landing_Page"
                        >Beranda</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Kamar">Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="FasilitasKamar">Fasilitas kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="FasilitasHotel">Fasilitas Hotel</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/logout')?>" class="logout btn btn-primary btn-nav" data-confirm="Anda yakin ingin Keluar?">Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="<?= base_url('asset/js/'); ?>logout.js"></script>