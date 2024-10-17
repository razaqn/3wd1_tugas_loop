<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . ", ";
    }
}
echo "<br>";
for ($i = 1; $i <= 100; $i *= 2) {
    if ($i != 1) {
        echo $i . ", ";
    }
}
echo "<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FlashBuzz";
    } elseif ($i % 3 == 0) {
        echo "Buzz";
    } elseif ($i % 5 == 0) {
        echo "Flash";
    } else {
        echo $i;
    }
    echo ", ";
}

$barang = [
    [
        "nama" => "kipas angin",
        "deskripsi" => "kipas angin turbo 90 watt",
        "harga" => 10000,
        "gambar" => "kipas.jpg",
    ],
    [
        "nama" => "kulkas",
        "deskripsi" => "kulkas 4 pintu multifungsi",
        "harga" => 10000000,
        "gambar" => "kulkas.jpg",
    ],
    [
        "nama" => "dispenser",
        "deskripsi" => "dispenser dengan air dingin",
        "harga" => 300000,
        "gambar" => "dispenser.jpeg",
    ],
    [
        "nama" => "air conditioner",
        "deskripsi" => "ac sejuk brutal",
        "harga" => 2000000,
        "gambar" => "ac.jpg",
    ],
    [
        "nama" => "kursi",
        "deskripsi" => "kursi nyaman aman damai",
        "harga" => 150000,
        "gambar" => "kursi.jpg",
    ],
    [
        "nama" => "meja",
        "deskripsi" => "meja multifungsi serbaguna",
        "harga" => 150000,
        "gambar" => "meja.jpg",
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="row container">
    <?php
    foreach ($barang as $key => $value){
        echo "
        <div class='col-sm-6 col-md-4 mt-1'>
            <div class='card' style='width: 80%;'>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item item-center'><img src='img/" . $value['gambar'] . "' alt='' style='width: 100%;'></li>
                    <li class='list-group-item'>nama : " . $value['nama'] . "</li>
                    <li class='list-group-item'>deskripsi : " . $value['deskripsi'] . "</li>
                    <li class='list-group-item'>harga : " . $value['harga'] . "</li>
                </ul>
            </div>
        </div>
        ";
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>