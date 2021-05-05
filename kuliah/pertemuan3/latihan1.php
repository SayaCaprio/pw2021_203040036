<?php 
/* Caprio Sinaga 
203040036
https://github.com/SayaCaprio/pw2021_203040036.git
pertemuan 3 - 18 februari 
mempelajari struktur kendali pada php */
?>

<?php 
// pengulangan
// for 
// while
// do..  while
// foreach : pengungalangan khusus array

// for ($i = 0; $i < 5; $i++ ) {
//     echo "Hello world <br>";
// }

// $i = 0;
// while ( $i < 5 ) {
//     echo "Hello World <br> ";
//     $i++;
// }

// $i=10;
// do{
//     echo "hello world! <br>";
// $i++;
// } while( $i < 5 );

// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Latihan 1 </title>

    <style>
        .warna-baris {
            background-color: silver;
        }
    
    </style>

</head>
<body>
    <table border="1" cellpadding="10" cellspascing="0">
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
        <?php for ($j = 1; $j <= 5; $j++ ) : ?>
            <td> <?="$i, $j"; ?></td>
        <?php endfor; ?>
        </tr>
        <?php endfor; ?>

    </table>
</body>
</html>