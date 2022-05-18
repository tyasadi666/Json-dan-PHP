<?php
    //memuat halaman json
$data= file_get_contents("http://localhost/json/data.json");

//menampilkan hasil
//echo $data;
$parsdata = json_decode($data);

//cek perubahan json to array
//echo "<pre>"; print_r ($parsdata); echo"</pro>";

//tampilkan data spesifik
//echo $parsdata[0]->nama;

?>

<html>

<head>
    <title>Biodata</title>
</head>

<body>
    <label>
        Nama :
    </label>
    <?php echo $parsdata[0]->nama; ?>
    <br />
    <label>
        NIM:
    </label>
    <?php echo $parsdata[0]->nim; ?>
    <br />
    <label>
        Alamat:
    </label>
    <?php echo $parsdata[0]->alamat; ?>
    </br>
    Hobi:
    <br />
    <?php

        foreach ($parsdata[0]->hobi as $hobi){
            echo "$hobi";
            echo"<br/>";
        }
        ?>
    </>
</body>

</html>