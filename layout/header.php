<header>
    <nav class="navbar navbar-expand navbar-light navbar-top">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="dropdown ms-auto">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">
                                    <?= !isset($_SESSION['nama']) ? 'Guest' : $_SESSION['nama'] ?></h6>
                                <p class="mb-0 text-sm text-gray-600">Administrator</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="./assets/compiled/jpg/1.jpg" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem">
                        <li>
                            <h6 class="dropdown-header">Hello,
                                <?= !isset($_SESSION['nama']) ? 'Guest' : $_SESSION['nama'] ?></h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <?php if (isset($_SESSION['nama'])) : ?>
                            <li>
                                <a class="dropdown-item" href="index.php?halaman=logout" onclick="confirmLogout(event)"><i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                    Logout</a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a class="dropdown-item" href="login.php"><i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                    Login</a>
                            </li>
                        <?php endif ?>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>