<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="../index.php" method="post">
    <h2>Login</h2>
    Username: <input type="text" name="username" placeholder="username"/>
    <br>
    Password: <input type="password" name="password" placeholder="password"/>
    <br>
    <input name="act" type="submit" value="Login"/>
    <input name="act" type="submit" value="Register"/>
</form>
</body>
</html>
<?php
//$user = "hoangdt";
//$password = "1233";
//$arrayList = array(
//    '1' => array(
//        'user' => "hoangdt",
//        'password' => "1233",
//    ),
//    '2' => array(
//        'user' => 'chiennm',
//        'password' => '1234',
//    )
//);
$path = "../data.json";
$arrayList = getData($path);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $u = $_POST['username'];
    $p = $_POST['password'];
    if($_POST['act'] == 'Login')
    {
        if (checkUser($u,$p)) {
            echo "Chao Mung " . $u;
            header("Location: ../index.php");
        } else {
            echo "Tai khoan k hop le, nhap lai";
        }
    }

    else if($_POST['act'] == 'Register')
    {
//        header("Location: register.php");
        $user = [
            'username' => $u,
            'password' => $p
        ];
        if(checkAvailable($u,$p)){
            addUser($user);
            echo "Dang ky thanh cong";

        }else{
            echo "Thong tin khong hop le " . $u . " da ton tai.";
        }

    }

}

function checkAvailable($u,$p){
    if($u == "" || $p = "") return false;
    $arr = $GLOBALS['arrayList'];
    foreach ($arr as $index => $value) {
        if($value->username == $u){
            return false;
        }
    }

    return true;

}

function checkUser($user, $password)
{
    $arr = $GLOBALS['arrayList'];
    foreach ($arr as $index => $value) {
        if($value->username == $user && $value->password == $password){
            return true;
        }
    }
    return false;
}


function getAllUsers($filePath){
    return getData($filePath);
}

function getData($filePath) {
    $dataJson = file_get_contents($filePath);
    return json_decode($dataJson);
}

function addUser($user){
    $users = $GLOBALS['arrayList'];
    array_push($users, $user);
    saveData($users);
}

function saveData($data){
    $jsonData = json_encode($data);
    file_put_contents("../data.json",$jsonData);
}
//function store($data, $filePath) {
//    $dataArr = getData($filePath);
//    array_push($dataArr, $data);
//
//    $dataNewJson = json_encode($dataArr);// convert json
//    file_put_contents($filePath, $dataNewJson);//save to file
//    echo "Register Success";
//}