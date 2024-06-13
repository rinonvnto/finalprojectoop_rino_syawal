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
abstract class Kendaraan {
    abstract protected function bergerak();

    public function deskripsi() {
        echo "Ini adalah sebuah kendaraan.";
    }
}

class Mobil extends Kendaraan {
    public function bergerak() {
        echo "Mobil bergerak dengan roda.";
    }
}

class Kapal extends Kendaraan {
    public function bergerak() {
        echo "Kapal bergerak dengan baling-baling.";
    }
}

$mobil = new Mobil();
$kapal = new Kapal();

echo $mobil->deskripsi();
echo $mobil->bergerak();
$kapal->bergerak();
            </pre>
        </section>
        <section class="result-section">
            <h2>Hasil :</h2>
            <p>
                <?php
                abstract class Kendaraan {
                    abstract protected function bergerak();

                    public function deskripsi() {
                        echo "Ini adalah sebuah kendaraan.";
                    }
                }

                class Mobil extends Kendaraan {
                    public function bergerak() {
                        echo "Mobil bergerak dengan roda.";
                    }
                }

                class Kapal extends Kendaraan {
                    public function bergerak() {
                        echo "Kapal bergerak dengan baling-baling.";
                    }
                }

                $mobil = new Mobil();
                $kapal = new Kapal();

                echo $mobil->deskripsi()."<br>";
                echo $mobil->bergerak()."<br>";
                $kapal->bergerak();
                ?>
            </p>
        </section>
    </main>
    <footer>
        <p>&copy; 236250073 / &copy; 236250076</p>
    </footer>
</body>
</html>
