<?php
include "conection.php";
$query = "select * from log_subsidi where tipe = BERAS order by id desc";
$result = $conn->query( $query );
$num_results = $result->num_rows;
if( $num_results > 0){
    $output = array();
    while( $row = $result->fetch_assoc() ){
        $data = array();
        $data['id'] = $row['id'];
        $data['nik'] = $row['nik'];
        $data['desa'] = $row['desa'];
        $data['banyak'] = $row['banyak']. ' Kilogram' ;
        $data['reg_date'] = date("d-M-Y , H:i:s",$row['reg_date']) ." WIB";
        $output[] = $data;
    }
    echo json_encode($output);
}
$result->free();
$conn->close();
?>