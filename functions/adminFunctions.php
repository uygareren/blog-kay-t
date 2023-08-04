<?php

include_once("../admin/config/config.php");


function getAllData($table){
    global $db;

    $query = "SELECT * FROM $table";
    $q = $db -> prepare($query);
    $q -> execute();

    $result = $q -> fetchAll(PDO::FETCH_ASSOC);

    return $result;
    
}

function getById($table, $idRow, $id){
    global $db;

    $query = "SELECT * FROM $table WHERE $idRow = ?";
    $q = $db->prepare($query);
    $q->execute([$id]);

    $result = $q->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function resizeImage($sourcePath, $destinationPath, $desiredWidth, $desiredHeight) {
    // Orijinal resim nesnesini oluşturma
    $originalImage = imagecreatefromjpeg($sourcePath);

    // Orijinal resmin geçerli olup olmadığını kontrol etme
    if (!$originalImage) {
        echo "Orijinal resim geçerli bir JPEG dosyası değil.";
        return; // Veya hata mesajını işleme yönlendirin.
    }

    // Orijinal resmin boyutlarını almak
    $width = imagesx($originalImage);
    $height = imagesy($originalImage);

    // Yeniden boyutlandırılmış resim nesnesini oluşturma
    $resizedImage = imagecreatetruecolor($desiredWidth, $desiredHeight);

    // Resmi yeniden boyutlandırma işlemini gerçekleştirme
    if (!imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, $desiredWidth, $desiredHeight, $width, $height)) {
        echo "Resim boyutlandırma işlemi başarısız oldu.";
        imagedestroy($originalImage); // Orijinal resim nesnesini serbest bırakma
        imagedestroy($resizedImage); // Yeniden boyutlandırılmış resim nesnesini serbest bırakma
        return; // Veya hata mesajını işleme yönlendirin.
    }

    // Yeniden boyutlandırılmış resmi belirtilen yol ve dosya adıyla kaydetme
    if (!imagejpeg($resizedImage, $destinationPath, 90)) {
        echo "Yeniden boyutlandırılmış resim kaydedilemedi.";
        imagedestroy($originalImage); // Orijinal resim nesnesini serbest bırakma
        imagedestroy($resizedImage); // Yeniden boyutlandırılmış resim nesnesini serbest bırakma
        return; // Veya hata mesajını işleme yönlendirin.
    }

    // Bellekteki resim nesnelerini serbest bırakma
    imagedestroy($originalImage);
    imagedestroy($resizedImage);
}


?>