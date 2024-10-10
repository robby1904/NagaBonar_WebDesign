<!DOCTYPE html>
<html lang="id">
<head>
   
    <title>Checkout Danuarta Music</title>
    <link rel="stylesheet" href="style.css"/>
    <style>


    </style>
</head>
<body>
<header>
    <h2>Danuarta Music</h2>
    <div class="moving-text">
            <span>DAPATKAN SEGERA ALAT MUSIK IMPIAN ANDA</span>
    </div>
</header>
<nav>
    <a href="home.php">Beranda</a>
    <a href="#produk">Produk</a>
    <a href="checkout.php">Checkout</a>
</nav>

    <div class="containerC">
        <h2>Checkout Danuarta Music</h2>
        <form method="POST" action="">
            <table>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <td>Bass</td>
                    <td>Rp 1.500.000</td>
                    <td><input type="number" name="bass" value="0" min="0"></td>
                </tr>
                <tr>
                    <td>Gitar Akustik</td>
                    <td>Rp 3.200.000</td>
                    <td><input type="number" name="gitar" value="0" min="0"></td>
                </tr>
                <tr>
                    <td>Set Drum</td>
                    <td>Rp 10.000.000</td>
                    <td><input type="number" name="drum" value="0" min="0"></td>
                </tr>
                <tr>
                    <td>Biola</td>
                    <td>Rp 2.000.0000</td>
                    <td><input type="number" name="biola" value="0" min="0"></td>
                </tr>
            </table>

            <input type="submit" name="checkout" value="Hitung Total">
        </form>

        <?php
        if (isset($_POST['checkout'])) {
            $harga_bass = 1500000;
            $harga_gitar = 3200000;
            $harga_drum = 10000000;
            $harga_biola = 2000000;

            $jumlah_bass = $_POST['gitar'];
            $jumlah_gitar = $_POST['bass'];
            $jumlah_drum = $_POST['drum'];
            $jumlah_biola = $_POST['biola'];

            $total_gitar = $jumlah_gitar * $harga_gitar;
            $total_bass = $jumlah_bass * $harga_bass;
            $total_drum = $jumlah_drum * $harga_drum;
            $total_biola = $jumlah_biola * $harga_biola;

            $total_belanja = $total_gitar + $total_bass + $total_drum + $total_biola;

            echo "<div class='total'>";
            echo "<h3>Total Harga:</h3>";
            echo "<p>Bass : Rp " . number_format($total_gitar, 0, ',', '.') . "</p>";
            echo "<p>Gitar Akustik: Rp " . number_format($total_bass, 0, ',', '.') . "</p>";
            echo "<p>Set Drum: Rp " . number_format($total_drum, 0, ',', '.') . "</p>";
            echo "<p>Biola: Rp " . number_format($total_biola, 0, ',', '.') . "</p>";
            echo "<h3>Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "</h3>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
