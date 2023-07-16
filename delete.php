<?php
$connection = new mysqli("localhost", "root", "","latihan");

$id  = $_POST['id'];

if(!empty($id)){
    $result = mysqli_query($connection, "DELETE FROM note_app WHERE id='$id'");
    if ($result) {
        echo json_encode([
            "message" => "DATA BERHASIL DIHAPUS"
        ]);
    }else{
        echo json_encode([
            "message" => "DATA GAGAL DIHAPUS"
        ]);
    }
}else{
    echo json_encode([
        "message" => "KOMPONEN HARUS DIISI"
    ]);
}

?>