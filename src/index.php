<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'>
    <title>Forum Studi Informatika</title>
</head>

<body class="h-full">
    <main class="container mx-auto">
        <div class="flex min-h-full justify-center px-6 py-12 w-full">
            <div class="mt-10 flex shadow-2xl dark:bg-surface-dark justify-between rounded-[38px] w-full p-16">
                <form class="space-y-6 w-2/4" action="config.php" method="POST">
                    <div class="mb-1">
                        <p class="text-lg text-blue-500 font-normal">#LetsGrowTogether</p>
                    </div>
                    <div class="mb-5">
                        <h1 class="text-5xl font-bold text-gray-900">Forum Studi Informatika</h1>
                        <p class="text-gray-600 mt-2 text-lg">Wadah Bagi Mahasiswa Teknik Informatika Yang Berfokus
                            Membangun Keterampilan Dalam Mengenal Dunia Teknologi</p>
                    </div>
                    <div class="mb-5">
                        <label for="namaLengkap" class="block text-lg font-bold leading-6 text-gray-900">Nama lengkap
                            kamu</label>
                        <div class="mt-2">
                            <input id="namaLengkap" placeholder="Nama Lengkap" name="namaLengkap" type="text"
                                autocomplete="Nama Lengkap" required
                                class="bg-slate-100 tracking-wide block w-full h-20 text-lg rounded-2xl border-0 py-6 px-9 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="nobpKamu" class="block text-lg font-bold leading-6 text-gray-900">Nomor BP
                            kamu</label>
                        <div class="mt-2">
                            <input id="nobpKamu" placeholder="Nomor BP" name="nobpKamu" type="number"
                                autocomplete="Nomor BP" required
                                class="bg-slate-100 tracking-wide block w-full h-20 text-lg rounded-2xl border-0 py-6 px-9 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                        </div>
                    </div>
                    <div class="mb-5">
                        <label for="jurusan" class="block text-lg font-bold leading-6 text-gray-900">Jurusan</label>
                        <div class="mt-2">
                            <select name="jurusan" id="jurusan" required
                                class="bg-slate-100 appearance-none tracking-wide block w-full text-lg h-20 rounded-2xl border-0 py-6 px-9 text-gray-400 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6">
                                <option value="" class="">Jurusan</option>
                                <option value="Teknik Informatika" class="text-gray-900">Teknik Informatika</option>
                                <option value="Sistem Informasi" class="text-gray-900">Sistem Informasi</option>
                                <option value="Sistem Komputer" class="text-gray-900">Sistem Komputer</option>
                                <option value="Manajemen Informatika" class="text-gray-900">Manajemen Informatika
                                </option>
                                <option value="Pendidikan Informatika" class="text-gray-900">Pendidikan Informatika
                                </option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="bg-blue-900 block w-full h-20 text-lg rounded-2xl border-0 py-6 px-9 leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk</button>
                    </div>
                </form>
                <div class="">
                    <img src="../assets/img/background.png" alt="Forstif Assets">
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            if (status === 'success') {
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Absensi Berhasil! Terima kasih, absensi Anda telah tercatat.',
                    icon: 'success',
                    confirmButtonText: 'Mantap'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'index.php';
                    }
                });
            } else if (status === 'duplicate') {
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Anda sudah ambil absensi sebelumnya.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'index.php';
                    }
                });
            }
        }
    </script>
</body>

</html>