
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = trim($_POST["nama"] ?? "");

    if (empty($nama)) {
        echo "Input nama tidak boleh kosong!";
    } else {
        echo "Halo, " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "! Selamat datang di AJAX!";
    }

} else {
    echo "Metode request tidak valid!";
}

?>
