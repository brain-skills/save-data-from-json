<?php
$file = "data.json";
$data = file_get_contents($file);
if (empty($data)) {
    $json = [];
} else {
    $json = json_decode($data, $assoc = TRUE);
}
$arr = array(
    'login'     => $_POST['login'],
    'password'    => $_POST['password']
);
array_push($json, $arr);
$json_string = json_encode($json);
file_put_contents($file, $json_string);
?>