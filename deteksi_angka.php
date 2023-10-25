<!DOCTYPE html>
<html>
<head>
    <title>Hasil Deteksi Angka</title>
    <style>
        /* Style untuk elemen umum */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

.wrapper {
    align-items: center;
    max-width: 500px;
    background-color: #fff;
    border-radius: 20px;
    border: 3px solid ;
    padding: 20px;
    margin-top: 20px;
}
.container {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 5px #999;
    border-radius: 5px;
    margin-top: 20px;
}

h1 {
    color: #333;
}

form {
    margin: 10px 0;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 3px;
    cursor: pointer;
}

/* Style untuk pesan hasil */
p {
    margin-top: 10px;
    font-size: 18px;
    color: #333;
}

/* Tautan kembali */
a {
    color: #007BFF;
    text-decoration: none;
}

/* Tautan hover */
a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="wrapper">
    <h1>Hasil Deteksi Angka</h1>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];

    echo "<p>Anda memasukkan angka: $angka</p>";

    if ($angka > 0) {
        echo "<p>Angka $angka adalah positif.</p>";
    } elseif ($angka < 0) {
        echo "<p>Angka $angka adalah negatif.</p>";
    } else {
        echo "<p>Angka $angka adalah nol.</p>";
    }
} else {
    echo "<p>Masukkan angka terlebih dahulu menggunakan formulir sebelumnya.</p>";
}
?>

<p><a href="kaes.php">Kembali ke formulir</a></p>
    </div>
</body>
</html>
