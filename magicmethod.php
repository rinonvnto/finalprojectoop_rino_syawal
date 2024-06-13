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
class Mobil {
    private $merk;
    private $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function __toString() {
        return "Mobil {$this->merk} berwarna {$this->warna}";
    }

    public function __call($namaMetode, $argumen) {
        echo "Metode '$namaMetode' tidak ditemukan atau tidak tersedia";
    }

    public function __isset($namaProperti) {
        if ($namaProperti == 'warna') {
            echo "Warna mobil: {$this->warna}";
            return isset($this->warna);
        }
        return false;
    }

    public function __unset($namaProperti) {
        if ($namaProperti == 'merk') {
            echo "Merk mobil: {$this->merk}";
            unset($this->merk);
        }
    }
}

$mobil = new Mobil("Honda Brio", "Kuning");

echo "Info Mobil: $mobil";

$mobil->metodeTidakAda();

echo isset($mobil->warna);

unset($mobil->merk);
            </pre>
        </section>
        <section class="result-section">
            <h2>Hasil :</h2>
            <p>
                <?php
            class Mobil { 
                private $merk;
                private $warna;

                public function __construct($merk, $warna) {
                    $this->merk = $merk;
                    $this->warna = $warna;
                }

                public function __toString() {
                    return "Mobil {$this->merk} berwarna {$this->warna}";
                }

                public function __call($namaMetode, $argumen) {
                    echo "Metode '$namaMetode' tidak ditemukan atau tidak tersedia";
                }

                public function __isset($namaProperti) {
                    if ($namaProperti == 'warna') {
                        echo "Warna mobil: {$this->warna}";
                        return isset($this->warna);
                    }
                    return false;
                }

                public function __unset($namaProperti) {
                    if ($namaProperti == 'merk') {
                        echo "Merk mobil: {$this->merk}";
                        unset($this->merk);
                    }
                }
            }

            $mobil = new Mobil("Honda Brio", "Kuning");

            echo "Info Mobil: $mobil"."<br>";

            echo $mobil->metodeTidakAda()."<br>";

            echo isset($mobil->warna)."<br>";

            unset($mobil->merk);
            ?>

            </p>
        </section>
    </main>
    <footer>
        <p>&copy; 236250073 / &copy; 236250076</p>
    </footer>
</body>
</html>
