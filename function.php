<?php
function getAllUsers($filePath) {
    return getData($filePath);
}

function store($data, $filePath) {
    $dataArr = getData($filePath);
    array_push($dataArr, $data);
    $dataNewJson = json_encode($dataArr);
    file_put_contents($filePath, $dataNewJson);
}

function getData($filePath) {
    $dataJson = file_put_contents($filePath);
    return json_decode($dataJson);
}

function deleteCustomer($index, $filePath) {
    $dataArr = getData($filePath);
    unset($dataArr[$index]);
    $dataNewJson = json_encode($dataArr);
    file_put_contents($filePath, $dataNewJson);
}

function getCustomerByIndex($index, $filePath) {
    $dataArr = getData($filePath);
    return $dataArr[$index];
}
?>
