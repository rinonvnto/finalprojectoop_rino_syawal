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
class Kendaraan {
    public function kecepatanMaksimal() {
        return "Kecepatan maksimal tidak diketahui.";
    }
}

class Mobil extends Kendaraan {
    public function kecepatanMaksimal() {
        return "Kecepatan maksimal mobil adalah 200 km/jam.";
    }
}

class SepedaMotor extends Kendaraan {
    public function kecepatanMaksimal() {
        return "Kecepatan maksimal sepeda motor adalah 150 km/jam.";
    }
}

class Sepeda extends Kendaraan {
    public function kecepatanMaksimal() {
        return "Kecepatan maksimal sepeda adalah 30 km/jam.";
    }
}

function cekKecepatanMaksimal(Kendaraan $kendaraan) {
    echo $kendaraan->kecepatanMaksimal();
}

$mobil = new Mobil();
$sepedaMotor = new SepedaMotor();
$sepeda = new Sepeda();

cekKecepatanMaksimal($mobil);
cekKecepatanMaksimal($sepedaMotor);
cekKecepatanMaksimal($sepeda);
            </pre>
        </section>
        <section class="result-section">
            <h2>Hasil :</h2>
            <p>
                <?php
                class Kendaraan {
                    public function kecepatanMaksimal() {
                        return "Kecepatan maksimal tidak diketahui.";
                    }
                }

                class Mobil extends Kendaraan {
                    public function kecepatanMaksimal() {
                        return "Kecepatan maksimal mobil adalah 200 km/jam.";
                    }
                }

                class SepedaMotor extends Kendaraan {
                    public function kecepatanMaksimal() {
                        return "Kecepatan maksimal sepeda motor adalah 150 km/jam.";
                    }
                }

                class Sepeda extends Kendaraan {
                    public function kecepatanMaksimal() {
                        return "Kecepatan maksimal sepeda adalah 30 km/jam.";
                    }
                }

                function cekKecepatanMaksimal(Kendaraan $kendaraan) {
                    echo $kendaraan->kecepatanMaksimal() . "<br>";
                }

                $mobil = new Mobil();
                $sepedaMotor = new SepedaMotor();
                $sepeda = new Sepeda();

                cekKecepatanMaksimal($mobil);
                cekKecepatanMaksimal($sepedaMotor);
                cekKecepatanMaksimal($sepeda);
                ?>

            </p>
        </section>
    </main>
    <footer>
        <p>&copy; 236250073 / &copy; 236250076</p>
    </footer>
</body>
</html>
