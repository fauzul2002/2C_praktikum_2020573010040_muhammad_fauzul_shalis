<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <html>
        <body>
            <?php
            echo "mencari jumlah huruf vokal dalam suatu kata";
            echo "<br>"; // ganti baris
            $jumlah = 0;
            $kata = "belajar PHP";// suatu kata 
            $huruf = "a"; // huruf vokal yang dicari bisa huruf a,e,i,u,o for ($i=0; $i<strlen($kata); $i++)
            {
                if (substr($kata, $i , 1)== $huruf)
                {
                    $jumlah ++
                }
            }
            echo "jumlah huruf ". $huruf . "dalam kata " .$kata . ":";
echo "<br>"; echo $jumlah;  ?>
        </body>
    </html>
</body>
</html>