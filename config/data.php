<?php

function data_project($db,$id) {
    $q = "SELECT * FROM portfolio WHERE id = $id";
    $r = mysqli_query($db,$q);

    $data = mysqli_fetch_assoc($r);

    return $data;

}

$project1 = data_project($db,1);
$project2 = data_project($db,2);
$project3 = data_project($db,3);
$project4 = data_project($db,4);
$project5 = data_project($db,5);
$project6 = data_project($db,6);
$project7 = data_project($db,7);
$project8 = data_project($db,8);
$project9 = data_project($db,9);
$project10 = data_project($db,10);
$project11 = data_project($db,11);
$project12 = data_project($db,12);
$project13 = data_project($db,13);
$project14 = data_project($db,14);
$project15 = data_project($db,15);
$project16 = data_project($db,16);
$project17 = data_project($db,17);
$project18 = data_project($db,18);
$project19 = data_project($db,19);
$project20 = data_project($db,20);
$project21 = data_project($db,21);
$project22 = data_project($db,22);
$project23 = data_project($db,23);
$project24 = data_project($db,24);
$project25 = data_project($db,25);
$project26 = data_project($db,26);
$project27 = data_project($db,27);
$project28 = data_project($db,28);
$project29 = data_project($db,29);
$project30 = data_project($db,30);
$project45 = data_project($db,45);

?>
