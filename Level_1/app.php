<?php
$targetDir = "./uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));


// Verificar si $uploadOk está configurado en 0 por un error
if ($uploadOk == 0) {
    echo "Lo siento, tu archivo no fue subido.";
// si todo está bien, intentar subir el archivo
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "El archivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " ha sido subido en ". $targetDir .".";
    } else {
        echo "Lo siento, hubo un error al subir tu archivo en ". $targetDir .".";
    }
}
?>
