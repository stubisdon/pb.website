<?php

function data_record($db,$id) {
    $q = "SELECT * FROM log_ngal WHERE id = $id";
    $r = mysqli_query($db,$q);

    $data = mysqli_fetch_assoc($r);

    return $data;

}

$totalRows = "SELECT COUNT(*) FROM log_ngal";
$t = mysqli_query($db,$totalRows);
$row_data = mysqli_fetch_assoc($t);
return $row_data;

$record = Array();

for ($i = 1; $i <= $totalRows; $i++) {
  $record[$i] = data_record($db, $i);
}

// $record1 = data_record($db,1);
// $record2 = data_record($db,2);
// $record3 = data_record($db,3);
// $record4 = data_record($db,4);
// $record5 = data_record($db,5);
// $record6 = data_record($db,6);
// $record7 = data_record($db,7);
// $record8 = data_record($db,8);
// $record9 = data_record($db,9);
// $record10 = data_record($db,10);
// $record11 = data_record($db,11);
// $record12 = data_record($db,12);
// $record13 = data_record($db,13);
// $record14 = data_record($db,14);
// $record15 = data_record($db,15);
// $record16 = data_record($db,16);
// $record17 = data_record($db,17);
// $record18 = data_record($db,18);
// $record19 = data_record($db,19);
// $record20 = data_record($db,20);
// $record21 = data_record($db,21);
// $record22 = data_record($db,22);
// $record23 = data_record($db,23);
// $record24 = data_record($db,24);
// $record25 = data_record($db,25);
// $record26 = data_record($db,26);
// $record27 = data_record($db,27);
// $record28 = data_record($db,28);
// $record29 = data_record($db,29);
// $record30 = data_record($db,30);
// $record45 = data_record($db,45);

?>
