
<div class="container">
    <h2>Contact details</h2><a href="?controller=my_account">Back to profile</a>
<form action="" method="POST">
        <label for="uid">Customer ID: <?php echo  $_SESSION['u_id']; ?></label>
        <br>
        <label for="name">Name:<?php echo  $_SESSION['u_name']; ?></label>
        <br>
        <label for="email">Email:<?php echo  $_SESSION['u_email']; ?></label>
        <br>
        <label for="phone">Phone number:<?php echo  $_SESSION['u_phone']; ?></label>
        <br>
    </div>
</form>
