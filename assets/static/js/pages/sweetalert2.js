function confirmModal(e) {
  e.preventDefault();
  const link = e.currentTarget.getAttribute("href");

  Swal.fire({
    title: "Yakin ingin menghapus data ini?",
    text: "Data yang dihapus akan hilang!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, yakin!",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = link;
    }
  });
}

function confirmLogout(e) {
  e.preventDefault();
  const link = e.currentTarget.getAttribute("href");

  Swal.fire({
    title: "Yakin ingin keluar?",
    text: "Anda akan logout dari aplikasi!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, yakin!",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = link;
    }
  });
}

function logout() {
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
}