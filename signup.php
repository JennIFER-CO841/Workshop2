<?php

if(isset($_POST['fname']) &&
   isset($_POST['uname']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname."&uname=".$uname;


    if (empty($fname)) {
        $em = "Full name is required";
        header("Location: ../index_2.php?error=$em&$data");
        exit;
    }else if (empty($uname)) {
        $em = "User name is required";
        header("Location: ../index_2.php?error=$em&$data");
        exit;
    }else if(empty($pass)){
        $em = "Paasword is required";
        header("Location: ../index_2.php?error=$em&$data");
        exit;
    }else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
        $stmt->execute([$uname]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($user as $u){
            echo $u['username'];
            echo "existe déjà.<br>";
            echo "chosissez un autre nom d'utilisateur<br>";
            header("Location: ../index_2.php");
        }

        $pass = password_hash($pass, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users(fname, username, password)
               VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $uname, $pass]);
        header("Location: login.php?success=Your account has beencreated successfully");
        exit;
    }


}else {
    header("Location: ../index_2.php?error=error");
    exit;
}