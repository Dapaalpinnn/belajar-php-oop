<?php 

// Membuat Namespace

namespace Data\One {
    class Mahasiswa{
        var string $nama;
        var int $nim;
        var string $jurusan;
        function sayMahasiswa(){
            echo "Welcome to class $this->nama " . PHP_EOL;
        }
    }
    class Ayah {
        var string $nama;
        var ?string $email;
        function sayAyah(){
            echo "Hello Mr. $this->nama, Welcome!" . PHP_EOL;
        }
    }
    class Ibu {
        var string $nama;
        var ?string $email;
        function sayIbu(){
            echo "Hello Mrs. $this->nama, Welcome!" . PHP_EOL;
        }
    }
}

namespace Data\Two {
    class Mahasiswa{
        var string $nama;
        var int $nim;
        var string $jurusan;
        function sayMahasiswa(){
            echo "Welcome to class $this->nama " . PHP_EOL;
        }
    }
    class Ayah {
        var string $nama;
        var ?string $email;
        function sayAyah(){
            echo "Hello Mr. $this->nama, Welcome!" . PHP_EOL;
        }
    }
    class Ibu {
        var string $nama;
        var ?string $email;
        function sayIbu(){
            echo "Hello Mrs. $this->nama, Welcome!" . PHP_EOL;
        }
}
}
    


?>