<?php

var_dump($_POST);
//check id exist in database
if(isset($_GET['uid'])) {
    $sql = 'SELECT * FROM user WHERE uid=:uid';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':uid', $_GET['uid'], PDO::PARAM_INT);
    $stmt->execute();
    //set allcolumn in a row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}else{
    //header('location:?controller=default');
}

//cancel button
if(isset($_POST['cancel'])){
    //send to main page
    //header('location:?controller=my_account');
}
//if delete button is pushed
if(isset($_POST['delete'])){
    //call to delete a specific user from database
    $sql = "DELETE FROM user WHERE uid=:uid";
    //prepare data to send to database
    $stmt = $dbh->prepare($sql);
    //Bind all information from form
    $stmt->bindValue(':uid',$_POST['uid'],PDO::PARAM_INT);

    if($stmt->execute()){

        header('location: ?controller=default?');
    //check if variable is available
        if(isset($_GET['delete'])) {
            echo '
                <div class="alert alert-danger">
                User has been deleted.
                </div>
            
            ';

        }
    }

}

$row = '';
loadTemplate("user_delete", "$row");

?>