<?php

if (isset($_GET['halaman'])) {
    $halaman = $_GET['halaman'];
    switch ($halaman) {
        case 'beranda':
            include "page/index.php";
            break;
        case 'logout':
            include "page/logout.php";
            break;
        case 'kontak':
            include "page/contact/view.php";
            break;
        case 'tambah_kontak':
            include "page/contact/add.php";
            break;
        case 'ubah_kontak':
            include "page/contact/edit.php";
            break;
        case 'hapus_kontak':
            include "page/contact/delete.php";
            break;
        default:
            include "page/error.php";
    }
} else {
    include "page/index.php";
}
