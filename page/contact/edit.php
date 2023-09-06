<?php
include "./function/connection.php";

if (!isset($_SESSION['nama'])) {
    header('Location: index.php?halaman=login');
}


try {
    $message = "";
    $success = FALSE;
    $error = FALSE;

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Select Data
        $select = mysqli_query($connection, "SELECT * FROM kontak WHERE id = '$id'");
        $data = mysqli_fetch_assoc($select);

        if (!$data) {
            header('Location: index.php?halaman=kontak');
        }

        // Submit
        if (isset($_POST['submit'])) {
            $nama = htmlspecialchars($_POST['nama']);
            $nomor_hp = htmlspecialchars($_POST['nomor_hp']);
            $status = htmlspecialchars($_POST['status']);

            $query = mysqli_query($connection, "UPDATE kontak SET nama = '$nama', nomor_hp = '$nomor_hp', status = '$status' WHERE id = '$id'");

            if ($query == TRUE) {
                $message = "Berhasil mengubah data";
                echo "
            <script>
            Swal.fire({
                title: 'Berhasil',
                text: '$message',
                icon: 'success',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            }).then(() => {
                window.location.href = 'index.php?halaman=kontak';
            })
            </script>
            ";
            } else {
                $message = "Gagal mengubah data";
                echo "
            <script>
            Swal.fire({
                title: 'Gagal',
                text: '$message',
                icon: 'error',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            }).then(() => {
                window.location.href = 'index.php?halaman=kontak';
            })
            </script>
            ";
            }
        }
    }
} catch (\Throwable $th) {
    echo "
            <script>
            Swal.fire({
                title: 'Gagal',
                text: 'Server error!',
                icon: 'error',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
            }).then(() => {
                window.location.href = 'index.php?halaman=kontak';
            })
            </script>
            ";
}
?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Kontak</h3>
                <p class="text-subtitle text-muted">
                    Halaman Ubah Data Kontak
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php?halaman=kontak">Kontak</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Ubah Data Kontak
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <a href="index.php?halaman=kontak" class="btn btn-primary btn-sm mb-3">Kembali</a>
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama" placeholder="John Doe" name="nama" value="<?= $data['nama'] ?>" required>
                        <label for="nama">Nama Kontak</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nomor_hp" placeholder="John Doe" name="nomor_hp" value="<?= $data['nomor_hp'] ?>" required>
                        <label for="nomor_hp">Nomor Kontak</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="status" placeholder="John Doe" name="status" value="<?= $data['status'] ?>" required>
                        <label for="status">Status Kontak</label>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>