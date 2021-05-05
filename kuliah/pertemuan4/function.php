<?php
function salam($waktu = "Datang", $nama = "Admin"){
    return "Selamat $waktu, $nama";

}


?>
<!DOCTYPE html>
<html>
<head>
    <title>latihan Function</title>
</head>
<body>
    <h1><?php echo salam("morning" ,"Sinaga"); ?></h1>
</body>
</html>