<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Panggilan Pasien - Klinik</title>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=YOUR_KEY"></script>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <div class="container">
        <h1>Pemanggilan Pasien</h1>

        <?php
            // Bisa disesuaikan dengan inputan dari DB atau form
            $namaPasien = "Budi Santoso";
            $poli = "Poli Umum";
            $text = "Pasien atas nama $namaPasien, silakan menuju ke $poli.";
        ?>

        <p class="teks"><?= $text ?></p>

        <button class="btn" onclick="suarakan()">🔊 Panggil Sekarang</button>
    </div>

    <script>
        function suarakan() {
            responsiveVoice.speak("<?= $text ?>", "Indonesian Female");
        }
    </script>

</body>
</html>
