<?php
    include 'query.php';

    $id = $_GET['NIM'];

    $value = query("SELECT * FROM mahasiswa WHERE NIM = '$id'")[0];

    if (isset($_POST["submit"])) { 
        if (edit($_POST) > 0) {
            echo"
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = '../index.php'; 
                </script>
            ";
        }
        else{
            echo"
                <script>
                    alert('Data Gagal Diubah');
                    document.location.href = '../index.php'; 
                </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="../css/style.css"> 
</head>

<body>
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>
                EDIT DATA
                MAHASISWA
                </h1>

            </div>
        </div>

        <div class="right">
            <div class="input-control">

                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $value["NIM"] ?>">

                    <div>
                        <br>
                        <label for=""><b>NIM</b></label>
                        <input type="text" name="NIM" id="NIM" value="<?= $value["NIM"] ?>"disabled>
                    </div>


                    <div>
                        <br>
                        <label for=""><b>Nama</b></label>
                        <input type="text" name="Namamhs" id="Namamhs" value="<?= $value["Namamhs"] ?>">
                    </div>


                    <div>
                        <br>
                        <label for=""><b>Alamat</b></label>
                        <input type="text" name="Alamatmhs" id="Alamatmhs" value="<?= $value["Alamatmhs"] ?>">
                    </div>


                    <div>
                        <br>
                        <label for=""><b>Kontak</b></label>
                        <input type="text" name="Kontakmhs" id="Kontakmhs" value="<?= $value["Kontakmhs"] ?>">
                    </div>


                    <div>
                        <br>
                        <button name="submit">Simpan Perubahan</button>
                    </div>

                </form>
            </div>    
        </div>
    </div>

</body>

</html>