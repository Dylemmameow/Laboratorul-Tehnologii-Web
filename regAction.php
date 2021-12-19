
<?php

include_once("./db.php");
include_once("./functions.php");

$unameReg = preventInjection($_POST["username"]);
$pwdReg = preventInjection($_POST["password"]);
$emailReg = preventInjection($_POST["email"]);

if(usernameValide($unameReg) && passwordValide($pwdReg) && emailValide($emailReg)) {
    if(!userExists($db, $unameReg)) {

        addUser($db, $unameReg, $emailReg, md5($pwdReg));
        echo json_encode(array(
            "status" => true,
            "message" => ""
        ));
    }
    else {
        echo json_encode(array(
            "status" => false,
            "message" => "User already exists"
        ));
    }
}
else {
    echo json_encode(array(
        "status" => false,
        "message" => "Not valid data"
    ));
}