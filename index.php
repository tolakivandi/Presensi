<?php
require './fungsi/fungsipegawai.php';

$mhs = mysqli_query($conn, "SELECT * FROM pegawai  ");

if (isset($_POST['submit'])) {

    if (create($_POST) > 0) {
        echo "
            <script>
               alert('data berhasil di tambahkan');
               document.location.href = 'index.php';
            </script>
         ";
    } else {
        echo "
         <script>
            alert('data gagal di tambahkan');
                        document.location.href = 'index.php';

         </script>
      ";
    }
}

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col items-center justify-center w-screen h-screen bg-gray-200 text-gray-700">

    <!-- Component Start -->
    <h1 class="font-bold text-2xl">Data Pegawai :)</h1>
    <form class="flex flex-col bg-white rounded shadow-lg p-12 mt-12" method="post" action="" enctype="multipart/form-data">
        <label class="font-semibold text-lg" for="namapegawaiField">Nama Pegawai</label>
        <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" name="nama_pegawai">
        <label class="font-semibold text-lg mt-3" for="NIKField">NIK</label>
        <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" name="nik">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" name="file_image" id="file_input" type="file">
        <p class="mt-1 text-sm text-black-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        <button class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700" name="submit">Simpan</button>
        <div class="flex mt-6 justify-center text-xs">
            <a class="text-blue-400 hover:text-blue-500" href="#">Forgot Password</a>
            <span class="mx-2 text-gray-300">/</span>
            <a class="text-blue-400 hover:text-blue-500" href="#">Sign Up</a>
        </div>
    </form>
    <!-- Component End  -->

</body>

</html>