<?php 

$mahasiswa = [
    ['nama' => 'tanwirul fuadhilan',
    'nrp' => '243040021',
    'email' => 'tanrul890@gmail.com',
    'jurusan' => 'Teknik Informatika',
    'gambar' => '1.jpg'
    ],

    ['nama' => 'Ansel Trivia',
    'nrp' => '223010049',
    'email' => 'Ansell928@gmail.com',
    'jurusan' => 'Teknik Industri',
    'gambar' => '2.jpg'
    ],

    ['nama' => 'Angga wahyu riski',
    'nrp' => '213020024',
    'email' => 'ang222@gmail.com',
    'jurusan' => 'Teknologi multimedia',
    'gambar' => '3.jpg'
    ],

    ['nama' => 'fatan',
    'nrp' => '20430066',
    'email' => 'tan@gmail.com',
    'jurusan' => 'Teknik informatika',
    'gambar' => '4.jpg'
    ],

    ['nama' => 'hariri humam al amin',
    'nrp' => '23043000',
    'email' => 'al2003@gmail.com',
    'jurusan' => 'Teknik indudtri',
    'gambar' => '5.jpg'
    ],

    ['nama' => 'jessie le maliq',
    'nrp' => '2304099',
    'email' => 'lee500@gmail.com',
    'jurusan' => 'Teknik pangan',
    'gambar' => '6.jpg'
    ],

    ['nama' => 'ibet',
    'nrp' => '244090340',
    'email' => 'ibet33@gmail.com',
    'jurusan' => 'teknik mesin',
    'gambar' => '7.jpg'
    ],

    ['nama' => 'fikri',
    'nrp' => '2030040030',
    'email' => 'fik890@gmail.com',
    'jurusan' => 'teknik mesin',
    'gambar' => '8.jpg'
    ],

    ['nama' => 'awan dwi',
    'nrp' => '23430034',
    'email' => 'dwi400@gmail.com',
    'jurusan' => 'perancangan wilayah dan kota',
    'gambar' => '9.jpg'
    ],



    
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a.php</title>
</head>

<style>
    img{
        width: 200px;
        height: 200px;
    }
</style>

<body>
   
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs['gambar']; ?>">
            </li>
            <li>Nama: <?= $mhs['nama']; ?></li>
            <li>NIM: <?= $mhs['nrp']; ?></li>
            <li>Email: <?= $mhs['email']; ?></li>
            <li>Jurusan: <?= $mhs['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>