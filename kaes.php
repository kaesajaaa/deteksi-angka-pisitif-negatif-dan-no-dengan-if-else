<!DOCTYPE html>
<html>
<head>
    <title>Deteksi Angka Positif, Negatif, atau Nol</title>
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
    <h1>Deteksi Angka Positif, Negatif, atau Nol</h1>
    <p>Masukkan sebuah angka di bawah ini:</p>
    <form method="post" action="deteksi_angka.php">
        <input type="number" name="angka" required>
        <input type="submit" value="Deteksi">
    </form>

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
    }
    ?>
    </div>
</body>
</html>
