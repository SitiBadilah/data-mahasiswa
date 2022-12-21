<?php
    include 'php/query.php';
    $result = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>DATA MAHASISWA</h1>
            </div>
        </div>

        <div class="right">
            <div class="input-control">
            <center>
                <table class="table">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Action</th>
                </tr>
                
                <?php  
                    foreach ($result as $value) {
                ?>

                <tr>
                    <td> <?php echo $value["NIM"] ?> </td>
                    <td> <?php echo $value["Namamhs"] ?> </td>
                    <td> <?php echo $value["Alamatmhs"] ?> </td>
                    <td> <?php echo $value["Kontakmhs"] ?> </td>
                    <td>
                        <a href="php/edit.php?NIM=<?php echo $value['NIM'] ?>">Edit</a>
                        <a href="php/delete.php?NIM=<?php echo $value['NIM']; ?>">Delete</a>
                    </td>
                </tr>

                <?php 
                    } 
                ?>

                </table>
            </center>           
            

            <a href="php/tambah.php">
            <br>
            <button> Tambah Data</button></a> 

            </div>
        </div>
    </div>

</body>
</html>
