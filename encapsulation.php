<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Web : Rino & Syawal OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Judul Web : Rino & Syawal OOP</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/oop/tugas_akhir/index.php">Home</a></li>
            <li><a href="/oop/tugas_akhir/php/kelasmethodobjek.php">Kelas Method Objek</a></li>
            <li><a href="/oop/tugas_akhir/php/encapsulation.php">Encapsulation</a></li>
            <li><a href="/oop/tugas_akhir/php/inheritance.php">Inheritance</a></li>
            <li><a href="/oop/tugas_akhir/php/polymorphism.php">Polymorphism</a></li>
            <li><a href="/oop/tugas_akhir/php/magicmethod.php">Magic Method</a></li>
            <li><a href="/oop/tugas_akhir/php/abstraksi.php">Abstraksi</a></li>
            <li><a href="/oop/tugas_akhir/php/overriding.php">Overriding</a></li>
            <li><a href="/oop/tugas_akhir/php/overloading.php">Overloading</a></li>
        </ul>
    </nav>

    <main>
        <section class="code-section">
            <h2>Kode :</h2>
            <pre>
class Produk {
    private $nama;
    protected $harga;
    public $stok;

    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getStok() {
        return $this->stok;
    }

    public function setStok($stok) {
        $this->stok = $stok;
    }
}

$produk = new Produk("Laptop", 15000000, 10);

$produk->setNama("Smartphone");
$produk->setHarga(5000000);
$produk->setStok(25);

echo "Nama Produk: " . $produk->getNama();
echo "Harga Produk: " . $produk->getHarga();
echo "Stok Produk: " . $produk->getStok();
            </pre>
        </section>
        <section class="result-section">
            <h2>Hasil :</h2>
            <p>
                <?php
                class Produk {
                    private $nama;
                    protected $harga;
                    public $stok;
                
                    public function __construct($nama, $harga, $stok) {
                        $this->nama = $nama;
                        $this->harga = $harga;
                        $this->stok = $stok;
                    }
                
                    public function getNama() {
                        return $this->nama;
                    }
                
                    public function setNama($nama) {
                        $this->nama = $nama;
                    }
                
                    public function getHarga() {
                        return $this->harga;
                    }
                
                    public function setHarga($harga) {
                        $this->harga = $harga;
                    }
                
                    public function getStok() {
                        return $this->stok;
                    }
                
                    public function setStok($stok) {
                        $this->stok = $stok;
                    }
                }
                
                $produk = new Produk("Laptop", 15000000, 10);
                
                $produk->setNama("Smartphone");
                $produk->setHarga(5000000);
                $produk->setStok(25);
                
                echo "Nama Produk: " . $produk->getNama() . "<br>";
                echo "Harga Produk: " . $produk->getHarga() . "<br>";
                echo "Stok Produk: " . $produk->getStok() . "<br>";
                ?>
            </p>
        </section>
    </main>
    <footer>
        <p>&copy; 236250073 / &copy; 236250076</p>
    </footer>
</body>
</html>
