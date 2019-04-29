<?php
include 'conection.php';

if($_POST['data']!=''){
    $data = $_POST['data'];
    $parse = explode(':', $data);
    $tipe = $parse[0];
    $desa = $parse[1];
    $nik = $parse[2];
    if($tipe=="MINYAK"){
        $liter = (int)$parse[3];
        if($liter == 0){
            $liter_input = 'Kuras Tangki Ukur';
        }elseif ($liter == 99) {
            $liter_input = 'Isi Ulang Tangki Ukur';
        }else {
            $liter_input = 'Mengisi '.$liter.' Liter';
        }
        $sekarang = time();
        $sql = "INSERT INTO log_minyak (nik, desa, liter, reg_date)
        VALUES ('$nik', '$desa', '$liter_input', '$sekarang')";
        switch ($liter) {
            case 1:
                $command = 'sudo python /var/www/html/engine/satuliter.py';
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
    
            case 180:
                $command = 'sudo python /var/www/html/engine/180.py';
                $output = exec($command);
                break;
    
            case 182:
                $command = 'sudo python /var/www/html/engine/182.py';
                $output = exec($command);
                break;
    
            case 181:
                $command = 'sudo python /var/www/html/engine/181.py';
                $output = exec($command);
                break;
    
            case 183:
                $command = 'sudo python /var/www/html/engine/183.py';
                $output = exec($command);
                break;
    
            case 99:
                $command = 'sudo python /var/www/html/engine/isiulang.py';
                $output = exec($command);
                break;
            case 0:
                $command = 'sudo python /var/www/html/engine/kuras.py';
                $output = exec($command);
                break;
        }
        
    }else{ 
        $kilo = (int)$parse[3];
        $sekarang = time();
        $sql = "INSERT INTO log_beras (nik, desa, kilo, reg_date)
        VALUES ('$nik', '$desa', '$kilo', '$sekarang')";
        switch ($kilo) {
            case 5:
               $command = 'sudo python /var/www/html/engine/beras-5.py';
               $output = exec($command);
                break;
            case 10:
               $command = 'sudo python /var/www/html/engine/beras-10.py';
               $output = exec($command);             
                break;
        }
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