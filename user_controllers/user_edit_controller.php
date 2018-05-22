<?php

var_dump($_GET);
//check if id exist in database
if(isset($_GET['uid'])) {
    $sql = "SELECT * FROM user WHERE uid = :uid";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':uid', $_GET['uid'], PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::fetch_ASSOC);
}else{
    //header('location: ?controller=default');
}
if(isset($_POST['update'])){
    $sql = "UPDATE user SET name = :name, email = :email, phone = :phone, password = :password";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name',$_POST['name']);
    $stmt->bindValue(':email',$_POST['email']);
    $stmt->bindValue(':phone',$_POST['phone']);
    $stmt->bindValue(':password',$_POST['password']);

    if($stmt->execute()){
        header('location :?controller=default?delete=true');


        if(isset($_GET['update'])){
            echo'
            <div class="alert alert-success">
                Changes have been updated.
                </div>
            ';
        }
    }


}
$edit = '';
loadTemplate("user_edit", "$edit");
?>