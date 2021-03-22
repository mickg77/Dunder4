<?php include 'header.php'?>

<form method="post" action="staff.php">
    <div class="form-group">
        <label for="usernamebox">Username</label>
        <input type="text" name="usernamebox" class="form-control" id="usernamebox" placeholder="Enter username">
    </div>
    <div class="form-group">
        <label for="passwordbox">Password</label>
        <input type="text" name="passwordbox" class="form-control" id="passwordbox" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-outline-dark" name="myLogin">Submit</button>
</form>

<?php include 'footer.php'?>
