<?php
    include 'query.php';

    if (isset($_POST["submit"])) {
        if (add($_POST) > 0) {
            echo 
            "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = '../index.php'; 
            </script>";
        }else{
            "<script>
                alert('Data Gagal Ditambahkan');
                document.location.href = '../index.php'; 
            </script>";
        }
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>


<body>
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>
                INPUT DATA
                MAHASISWA
                </h1>

            </div>
        </div>

        <div class="right">
            <div class="input-control">
                <form action="tambah.php" method="POST">

                    <div>
                        <br>
                        <label for=""><b>NIM</b></label>
                        <input type="text" name="NIM" required>
                    </div>


                    <div>
                        <br>
                        <label for=""><b>Nama</b></label>
                        <input type="text" name="Namamhs" id="" required>
                    </div>


                    <div>
                        <br>
                        <label for=""><b>Alamat</b></label>
                        <input type="text" name="Alamatmhs" id="" required>
                    </div>


                    <div>
                        <br>
                        <label for=""><b>Kontak</b></label>
                        <input type="text" name="Kontakmhs" id="" required>
                    </div>


                    <div>
                        <br>
                        <button name="submit">Simpan</button>
                    </div>

                </form>
            </div>    
        </div>
    </div>

</body>

</html>