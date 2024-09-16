
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        Select File To Upload : <br> <br>
        <input type="file" name="FileToUpload" id="FileToUpload"><br><br>
        <input type="submit" value="Upload File" name="submit" >
    </form>
</body>
</html>