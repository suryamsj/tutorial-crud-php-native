<?php

session_destroy();

echo "
        <script>
        Swal.fire({
            title: 'Berhasil',
            text: 'Berhasil Logout!',
            icon: 'success',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        }).then(() => {
            window.location.href = 'login.php';
        })
        </script>
        ";
