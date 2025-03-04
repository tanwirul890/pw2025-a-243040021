<?php
// Fungsi untuk menghitung luas lingkaran
function hitungLuasLingkaran($jariJari) {
    return pi() * pow($jariJari, 2);  // Rumus luas: π * r²
}

// Fungsi untuk menghitung keliling lingkaran
function hitungKelilingLingkaran($jariJari) {
    return 2 * pi() * $jariJari2;  // Rumus keliling: 2 * π * r
}

// Set nilai jari-jari
$jariJari = 10;  // Misalnya jari-jari 7 cm
$jariJari2 = 20;  // Misalnya jari-jari 7 cm

// Menghitung luas dan keliling lingkaran berdasarkan jari-jari
$luasLingkaran = hitungLuasLingkaran($jariJari);
$kelilingLingkaran = hitungKelilingLingkaran($jariJari);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Lingkaran</title>
</head>
<body>
    <h1>Perhitungan Lingkaran</h1>
    
    <h2>Luas Lingkaran</h2>
    <p>Dengan jari-jari <strong><?php echo $jariJari; ?> cm</strong>, luas lingkaran adalah:</p>
    <p><strong><?php echo $luasLingkaran; ?> cm²</strong></p>

    <hr>  <!-- Horizontal Rule sebagai pemisah -->

    <h2>Keliling Lingkaran</h2>
    <p>Dengan jari-jari <strong><?php echo $jariJari; ?> cm</strong>, keliling lingkaran adalah:</p>
    <p><strong><?php echo $kelilingLingkaran; ?> cm</strong></p>

    <hr>

    <!-- Form untuk mengubah nilai jari-jari -->
    <h3>Ubah Jari-jari Lingkaran</h3>
    <form method="post">
        <label for="jariJariBaru">Masukkan Jari-jari (cm):</label>
        <input type="number" id="jariJariBaru" name="jariJariBaru" value="<?php echo $jariJari; ?>" required>
        <input type="submit" value="Hitung Ulang">
    </form>

    <?php
    // Mengubah nilai jari-jari jika form disubmit
    if (isset($_POST['jariJariBaru'])) {
        $jariJari = $_POST['jariJariBaru'];  // Mengambil input jari-jari dari form
        $luasLingkaran = hitungLuasLingkaran($jariJari);  // Hitung ulang luas
        $kelilingLingkaran = hitungKelilingLingkaran($jariJari);  // Hitung ulang keliling
        echo "<script>window.location.href = window.location.href;</script>"; // Refresh halaman
    }
    ?>
</body>
</html>
