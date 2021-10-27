<!DOCTYPE html>
< lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koneksi database</title>
</head>
<body>
    <>
        <head>
            <title>koneksi database mysql</title>
        </head>
</body>
<h1> demo koneksi database mysql</h1>
<?php
$coon =mysqli_connect ("localhost","root","");
if ($conn) {
    echo "server terkoneksi";
}else{
    echo "server tidak jalan ";
}
?>
</body>
</html>