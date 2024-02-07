 <?php

    $conn = mysqli_connect("localhost", "root", "", "absensi");


    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }


    function create($data)
    {
        global $conn;
        $nama = htmlspecialchars($data['nama_pegawai']);
        $nik = htmlspecialchars($data['nik']);
        $image = $_FILES['file_image'];

        $query = "INSERT INTO pegawai (nama_pegawai, nik, file_image )
                            VALUES 
                    ('$nama', '$nik', '$image')
                         ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    ?> 