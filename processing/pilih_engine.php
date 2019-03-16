<?php
include 'conection.php';

if($_POST['data']!=''){
    $data = $_POST['data'];
    $parse = explode(':', $data);
    $nik = $parse[0];
    $desa = $parse[1];
    $liter = (int)$parse[2];
    $sekarang = time();
    $sql = "INSERT INTO log_minyak (nik, desa, liter, reg_date)
    VALUES ('$nik', '$desa', '$liter', '$sekarang')";
    switch ($liter) {
        case 1:
            $command = 'sudo python /var/www/html/engine/satuliter.py';
            $output = exec($command);
            break;
        case 2:
            $command = 'sudo python /var/www/html/engine/dualiter.py';
            $output = exec($command);
            break;
        case 4:
            $command = 'sudo python /var/www/html/engine/empatliter.py';
            $output = exec($command);
            break;
        case 5:
            $command = 'sudo python /var/www/html/engine/limaliter.py';
            $output = exec($command);
            break;
        case 8:
            $command = 'sudo python /var/www/html/engine/delapanliter.py';
            $output = exec($command);
            break;
        case 10:
            $command = 'sudo python /var/www/html/engine/sepuluhliter.py';
            $output = exec($command);
            break;
        case 0:
            $command = 'sudo python /var/www/html/engine/isiulang.py';
            $output = exec($command);
            break;
        default:
            $command = 'sudo python /var/www/html/engine/isiulang.py';
            $output = exec($command);
            break;
    }
    
    if (mysqli_query($conn, $sql)) {
        echo 'SEDANG MENGISI '.$output;
    } else {
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}else {
    echo "Tidak Dapat Menghubungi Sensor";
    echo "<hr>";
    echo "TimeZone : ".date_default_timezone_get() ." " .date("d-M-Y, H:i:s", time()). " WIB"; 
    echo "<hr>";
    // $timezone_identifiers = DateTimeZone::listIdentifiers();

    // foreach($timezone_identifiers as $key => $list){

    // echo $list . "<br/>";

    // }

    // echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");

    // date_default_timezone_set("Asia/Jakarta");
    // echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s");
}

?>