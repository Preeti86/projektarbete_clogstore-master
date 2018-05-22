<?php
var_dump($_POST);
if ($user) {
    //user is logged in
    if (isset($_POST['submit'])) {
        //start changing password
        $user = $_SESSION['uid'];
            //check fields
            $oldpassword = md5($_POST['oldpassword']);
            $newpassword = md5($_POST['newpassword']);
            $repeatnewpassword = md5($_POST['repeatnewpassword']);

        // Hash the new password
        $hashedPwd1 = password_hash($newpassword, PASSWORD_DEFAULT);
        // Hash the repeated password
        $hashedPwd2 = password_hash($repeatnewpassword, PASSWORD_DEFAULT);
        //Get user password from database
        $sql = ("SELECT password FROM user WHERE password = '$user'");
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // check if old passworld matches the given old password
        $oldpassworddbh = password_verify($oldpassword , $row['password']);

                //check if old password matches with the database
                if($oldpassword==$oldpassworddbh) {
                //check if new password and repeat passsword are same
                //if ($newpassword == $repeatnepassword) {
                        //success
                        //change password in db
                    //Update password and delete the old password and set the new password
                        $sql2 = ("UPDATE user SET password='$hashedPwd1' WHERE uid = '$user'");
                        $stmt2 = $dbh->prepare($sql2);
                        $stmt2->execute();
           //hitta session so that the user can log in with new password instead
        session_unset();
        session_destroy();

        die("Your password has been changed.<a href='?controller=my_account'>Returm</a> to the main page");
                    }
                   // $changepassword = die("<b>Your password has been changed</b>");
                //. " " .'<a href="?controller=log_in">Log in here!</a>');
}
}
else{
echo "Password is incorrect";

        }
        $password = '';
loadTemplate('change_password', $password);

?>
