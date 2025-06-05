<?php
$con=mysqli_connect("localhost","root","","bawaslu");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

// Data for Sugar
$query = mysqli_query($con,"SELECT dpb_jml FROM master");
$rows = array();
$rows['name'] = 'Dpb';
while($tmp= mysqli_fetch_array($query)) {
    $rows['data'][] = $tmp['dpb_jml'];
}

// Data for Rice
$query = mysqli_query($con,"SELECT ppb_jml FROM master");
$rows1 = array();
$rows1['name'] = 'Ppb';
while($tmp = mysqli_fetch_array($query)) {
    $rows1['data'][] = $tmp['ppb_jml'];
}

// Data for Wheat Flour
$query = mysqli_query($con,"SELECT tms_jml FROM master");
$rows2 = array();
$rows2['name'] = 'Tms';
while($tmp = mysqli_fetch_array($query)) {
    $rows2['data'][] = $tmp['tms_jml'];
}

$result = array();
array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);

print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 