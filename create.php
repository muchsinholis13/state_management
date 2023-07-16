<?php
$connection = new mysqli("localhost", "root", "","latihan");
$title = isset($_POST['title'])?$_POST['title']:'';
$content = isset($_POST['content'])?$_POST['content']:'';

if(!empty($title) && !empty($content)){
    $result = mysqli_query($connection, "INSERT INTO note_app SET title= '$title', content='$content'");
    if ($result) {
        echo json_encode([
            "message" => "DATA BERHASIL DISIMPAN"
        ]);
    }else{
        echo json_encode([
            "message" => "DATA GAGAL DISIMPAN"
        ]);
    }
}else{
    echo json_encode([
        "message" => "KOMPONEN HARUS DIISI"
    ]);
}

?>