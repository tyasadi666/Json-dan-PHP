<?php

//membuka lib/metpde
$ch =curl_init();

//setting option untuk url yang akan dibuka
curl_setopt($ch, CURLOPT_URL, "http://localhost/json/data.json");

//settion option untuk hasil hit url return
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

//Eksekusi curl
$output = curl_exec($ch);

//close curl
curl_close($ch);

//cek perubahan json to array
$data = json_decode($output);
//echo "<pre>"; print_r ($data); echo"</pro>";

//echo $data[0]->nama;
?>

<html>

<head>
    <title>Biodata</title>
</head>

<body>
    <?php
    foreach($data as $mhs){
        echo '
        <label> Nama:</label>
        '.$mhs->nama.'
        <br/>
        <label> NIM:</label>
        '.$mhs->nim.'
        <br/>
        <label> Riwayat Pendidikan:</label>
        '.$mhs->riwayat_pendidikan->sma.',
        '.$mhs->riwayat_pendidikan->smp.',
        '.$mhs->riwayat_pendidikan->sd.'
        <br/>
        ';

        echo "<label> Hobi</label><br/>";
        foreach ($mhs->hobi as $hobi){
            echo "- ".$hobi;
            echo "<br/>";
        }
    echo "<hr/>";
}

    ?>
</body>

</html>