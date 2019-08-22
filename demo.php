<?php
include_once 'database.php';

$database = new database();
$database->create("thy",'thuy','123');





//<!doctype html>
//<html lang="en">
//<head>
//    <meta charset="UTF-8">
//    <meta name="viewport"
//          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
//    <meta http-equiv="X-UA-Compatible" content="ie=edge">
//    <title>Document</title>
//</head>
//<?php
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    if (isset($_POST["email"])) {
//        $email = $_POST["email"];
//    }
//    if (isset($_POST["name"])) {
//        $username = $_POST["name"];
//    }
//    if (isset($_POST["pass"])) {
//        $pass = $_POST["pass"];
//    }
//    include_once "database.php";
//    $Database = new database();
//    $Database->create($email, $username, $pass);
//    echo "Dang ki thanh cong";
//}
//
//?>
<!--<body>-->
<!--<form method="post">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <td>Email</td>-->
<!--            <td><input name="email" type="text"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Name</td>-->
<!--            <td><input name="name" type="text"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Password</td>-->
<!--            <td><input name="pass" type="text"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td></td>-->
<!--            <td>-->
<!--                <button type="submit">Submit</button>-->
<!--            </td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->
