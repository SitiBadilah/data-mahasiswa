<?php 
    $host = "localhost";
    $port = "3306";
    $database = "prodi";
    $username = "root";
    $password = ""; 

    $conn = mysqli_connect($host, $username, $password, $database);

    if ($conn ->connect_error) {
        die("Koneksi gagal" . $conn->connect_error);
    }

function query($query){
    global $conn;

    $sql = mysqli_query($conn, $query);
    
    $result = array();
    
    while ($data = mysqli_fetch_array($sql)){
        $result[] = $data;
    }
    
    return $result;
}

function add($value){
    global $conn;

    $nim = $value["NIM"];
    $namamhs = $value["Namamhs"];
    $alamatmhs = $value["Alamatmhs"];
    $kontak = $value["Kontakmhs"];

    $insert = "INSERT INTO mahasiswa VALUES
                ('$nim', '$namamhs', '$alamatmhs', '$kontak')";
    
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;

    $delete = "DELETE FROM mahasiswa WHERE NIM = '$id'";

    mysqli_query($conn, $delete);

    return mysqli_affected_rows($conn);
}

function edit($value){
    global $conn;

    $nim = $value["id"];
    $namamhs = htmlspecialchars($value["Namamhs"]);
    $alamatmhs = htmlspecialchars($value["Alamatmhs"]);
    $kontak = htmlspecialchars($value["Kontakmhs"]);

    $edit = "UPDATE mahasiswa SET 
                namamhs = '$namamhs',
                alamatmhs = '$alamatmhs',
                kontakmhs = '$kontak' 

                WHERE NIM = '$nim'
            ";
    
    mysqli_query($conn, $edit);

    return mysqli_affected_rows($conn);
}
?>