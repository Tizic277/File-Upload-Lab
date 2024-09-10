<?php
$targetDir = "./uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Verificar el Content-Type del archivo
$fileType = $_FILES['fileToUpload']['type'];

if ($fileType != 'image/jpeg' && $fileType != 'image/png') {
    echo "Lo siento, solo se permiten imagenes en formato PNG o JPEG.<br>";
    $uploadOk = 0;
}

// Verificar si $uploadOk está configurado en 0 por un error
if ($uploadOk == 0) {
    echo "Lo siento, tu archivo no fue subido.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "El archivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " ha sido subido en ". $targetDir .".";
    } else {
        echo "Lo siento, hubo un error al subir tu archivo en ". $targetDir .".";
    }
}
?>
