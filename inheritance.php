ber<!DOCTYPE html>
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
class Kendaraan {
    public $merk;
    public $model;

    public function __construct($merk, $model) {
        $this->merk = $merk;
        $this->model = $model;
    }

    public function getInfo() {
        return "Merk: " . $this->merk . ", Model: " . $this->model;
    }
}

class Mobil extends Kendaraan {
    public $jumlahPintu;

    public function __construct($merk, $model, $jumlahPintu) {
        parent::__construct($merk, $model);
        $this->jumlahPintu = $jumlahPintu;
    }

    public function getInfo() {
        return parent::getInfo() . ", Jumlah Pintu: " . $this->jumlahPintu;
    }
}

$mobil1 = new Mobil("Toyota", "Corolla", 4);

echo $mobil1->getInfo();
            </pre>
        </section>
        <section class="result-section">
            <h2>Hasil :</h2>
            <p>
                <?php
                class Kendaraan {
                    public $merk;
                    public $model;

                    public function __construct($merk, $model) {
                        $this->merk = $merk;
                        $this->model = $model;
                    }

                    public function getInfo() {
                        return "Merk: " . $this->merk . ", Model: " . $this->model;
                    }
                }

                class Mobil extends Kendaraan {
                    public $jumlahPintu;

                    public function __construct($merk, $model, $jumlahPintu) {
                        parent::__construct($merk, $model);
                        $this->jumlahPintu = $jumlahPintu;
                    }

                    public function getInfo() {
                        return parent::getInfo() . ", Jumlah Pintu: " . $this->jumlahPintu;
                    }
                }

                $mobil1 = new Mobil("Toyota", "Corolla", 4);

                echo $mobil1->getInfo();
                ?>
            </p>
        </section>
    </main>
    <footer>
        <p>&copy; 236250073 / &copy; 236250076</p>
    </footer>
</body>
</html>
