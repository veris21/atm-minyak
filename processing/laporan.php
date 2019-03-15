<?php
include "conection.php";
$conn->set_charset("utf8");
$csv  = "Log-Minyak-" . date('d-m-Y-his') . '.csv';
$file = fopen($csv, 'w');
if (!$conn_result = mysqli_query($conn, "SELECT * FROM log_minyak"))
    printf("Error: %s\n", $conn->error);
    while ($column = mysqli_fetch_field($conn_result)) {
        $column_names[] = $column->name;
    }
    if (!fputcsv($file, $column_names))
        die('Can\'t write column names in csv file');
    
    // Get table rows
    while ($row = mysqli_fetch_row($conn_result)) {
        // Write table rows in csv files
        if (!fputcsv($file, $row))
            die('Can\'t write rows in csv file');
    }
fclose($file);
header('Location: '.$csv);
?>