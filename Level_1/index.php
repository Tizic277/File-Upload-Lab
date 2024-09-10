<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Lab</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="mainTitle">
        <h1>Level 1</h1>
        <a href="../index.php" class="home">Back to home</a>
    </div>
    <div class="levels">
        <img src="../Images/Level_1.png">
        <br>
        <form action="app.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Subir Archivo" name="submit">
    </form>
    </div>
    
</body>
</html>
