<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Barang</title>
</head>
<body>
    <h2>Form Pembayaran Barang</h2>

    <form method="POST" action="">
        <p>
            Nama Barang : <input type="text" name="nama_barang">
        </p>
        <p>
            Harga Satuan : <input type="number" name="harga">
        </p>
        <p>
            Jumlah Pembelian : <input type="number" name="jumlah">
        </p>
        <p>
            <input type="submit" value="Hitung">
        </p>
    </form>

    <?php
    if (isset($_POST['nama_barang'])) {
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        if ($harga < 0 || $jumlah < 1) {
            echo "<p>Harga tidak boleh negatif dan jumlah minimal 1!</p>";
        } else {
            $total_harga = $harga * $jumlah;

            if ($total_harga >= 500000) {
                $diskon = $total_harga * 0.20;
            } else if ($total_harga >= 250000) {
                $diskon = $total_harga * 0.10;
            } else {
                $diskon = 0;
            }

            $total_bayar = $total_harga - $diskon;

            echo "<h3>Hasil Pembayaran</h3>";
            echo "Nama Barang : " . $nama_barang . "<br>";
            echo "Harga Satuan : Rp" . $harga . "<br>";
            echo "Jumlah Pembelian : " . $jumlah . "<br>";
            echo "Total Harga : Rp" . $total_harga . "<br>";
            echo "Diskon : Rp" . $diskon . "<br>";
            echo "<b>Total Pembayaran : Rp" . $total_bayar . "</b>";
        }
    }
    ?>
</body>
</html>
