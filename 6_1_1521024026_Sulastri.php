<!DOCTYPE html>
<html>
<head>
    <title>SK 6_1 Dewi Citra Kurnia</title>
</head>
<body>
    <h2>LINGKARAN</h2>
    <br>
    <?php
    $r = 26 ;
    $phi = 3.14 ;       
    function luas(){
        global $r, $phi, $luasLing;
        $luasLing = $phi * $r * $r;

    }
    luas();
    echo "1. Luas Lingkaran = ". $luasLing;
    ?>
    <?php
    function keliling(){
        global $r, $phi, $kelLing;
        $kelLing = 2 * $phi * $r;

    }
    keliling();
    echo "<br><br>2. Keliling Lingkaran = ". $kelLing;
    ?>
    <?php
    function volume(){
        global $r, $phi, $volumeBola;
        $volumeBola = 4 * $phi * $r * $r;

    }
    volume();
    echo "<br><br>3. Volume Bola = ". $volumeBola;
    ?>

</body>
</html>