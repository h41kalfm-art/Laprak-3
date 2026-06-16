<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Mata Kuliah</title>
</head>
<body>

<h2>Moh Naufal Demas Hartono - 202432013</h2>

<form method="POST">

    Nama Mata Kuliah :
    <input type="text" name="matkul">

    <button type="submit">
        Cari
    </button>

</form>

<?php

if(isset($_POST['matkul'])){

$input = trim(strtolower($_POST['matkul']));

echo "<fieldset>";

if($input == "data warehouse"){

echo "Laboratorium : Information Retrieval Laboratory<br>";
echo "Mata Kuliah : Data Warehouse<br>";
echo "Kode : JA101<br>";
echo "SKS : 3<br>";
echo "Deskripsi : Mata kuliah pengolahan data warehouse.";

}
elseif($input == "data mining"){

echo "Laboratorium : Information Retrieval Laboratory<br>";
echo "Mata Kuliah : Data Mining<br>";
echo "Kode : D102<br>";
echo "SKS : 3<br>";
echo "Deskripsi : Analisis data.";

}
elseif($input == "pengantar big data"){

echo "Laboratorium : Information Retrieval Laboratory<br>";
echo "Mata Kuliah : Pengantar Big Data<br>";
echo "Kode : LS103<br>";
echo "SKS : 3<br>";
echo "Deskripsi : Dasar pengelolaan manajemen data.";

}
elseif($input == "pemrograman mobile"){

echo "Laboratorium : Information Retrieval Laboratory<br>";
echo "Mata Kuliah : Pemrograman Mobile<br>";
echo "Kode : LS704<br>";
echo "SKS : 3<br>";
echo "Deskripsi : Pengembangan aplikasi mobile.";

}
elseif($input == "pemrograman visual"){

echo "Laboratorium : Software Engineering Laboratory<br>";
echo "Mata Kuliah : Pemrograman Visual<br>";
echo "Kode : CV888<br>";
echo "SKS : 2<br>";
echo "Deskripsi : Pembuatan Tampilan Aplikasi Desktop.";

}
elseif($input == "rekayasa perangkat lunak"){

echo "Laboratorium : Software Engineering Laboratory<br>";
echo "Mata Kuliah : Rekayasa Perangkat Lunak<br>";
echo "Kode : DBN111<br>";
echo "SKS : 3<br>";
echo "Deskripsi : Pengembangan dari perangkat lunak.";

}
elseif($input == "pemrograman web"){

echo "Laboratorium : Software Engineering Laboratory<br>";
echo "Mata Kuliah : Pemrograman Web<br>";
echo "Kode : LWS213<br>";
echo "SKS : 3<br>";
echo "Deskripsi : Pembuatan dan pengembangan sebuah website.";

}
elseif($input == "basis data"){

echo "Laboratorium : Software Engineering Laboratory<br>";
echo "Mata Kuliah : Basis Data<br>";
echo "Kode : BM04<br>";
echo "SKS : 3<br>";
echo "Deskripsi : Pengelolaan database.";

}
else{

echo "Mata kuliah '" .
$_POST['matkul'] .
"' tidak ditemukan.";

}

echo "</fieldset>";

}

?>

</body>
</html>