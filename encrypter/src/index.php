<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Server</h1>
    <h2>Upload text file</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <br><br>
        <button>Submit</button>
    </form>
</body>
</html>