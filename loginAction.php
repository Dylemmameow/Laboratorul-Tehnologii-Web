
<?php
    session_start();
    include_once("db.php");
    include_once("./functions.php");

    $unameLog = preventInjection($_POST["username"]);
    $pwdLog = md5(preventInjection($_POST["password"]));

    $errorList = [];

    if($unameLog === "" || $unameLog == null) {
        array_push($errorList, "Username field is empty<br>");
    }

    if($pwdLog === "" || $pwdLog == null) {
        array_push($errorList, "Password field is empty<br>");
    }

    if(!$errorList && userExists($db, $unameLog)) {
        $_SESSION["username"] = $unameLog;
        $_SESSION["password"] = $pwdLog;
        
        echo json_encode(array(
            "status" => true,
            "message" => ""
        ));
    }
    else {
        echo json_encode(array(
            "status" => false,
            "message" => "Wrong username or password"
        ));
    }
?>