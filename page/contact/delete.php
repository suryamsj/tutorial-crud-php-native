<?php
include "./function/connection.php";

try {
    $message = "";
    $success = FALSE;
    $error = FALSE;

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Select Data dan Check Data
        $select = mysqli_query($connection, "SELECT nama FROM kontak WHERE id = '$id'");
        $data = mysqli_fetch_assoc($select);

        if (!$data) {
            header('Location: index.php?halaman=kontak');
        }

        $query = mysqli_query($connection, "DELETE FROM kontak WHERE id = '$id'");

        if ($query == TRUE) {
            $message = "Berhasil menghapus data";
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
            $message = "Gagal menghapus data";
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
    } else {
        $message = "ID tidak ditemukan";
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
