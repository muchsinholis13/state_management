<?php
$connection = new mysqli("localhost", "root", "","latihan");
$title  = $_POST['title'];
$content  = $_POST['content'];
$id  = $_POST['id'];

if(!empty($title) && !empty($content)){
    $result = mysqli_query($connection, "UPDATE note_app SET title= '$title', content='$content' where id ='$id'");
    if ($result) {
        echo json_encode([
            "message" => "DATA BERHASIL DIEDIT"
        ]);
    }else{
        echo json_encode([
            "message" => "DATA GAGAL DIEDIT"
        ]);
    }
}else{
    echo json_encode([
        "message" => "KOMPONEN HARUS DIISI"
    ]);
}

?>