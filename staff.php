<?php require 'connect.php'?>
<?php include 'header.php'?>
<?php
    if(isset($_POST['myLogin'])) { //check page has been loaded by submit event
        $username = trim($_POST['usernamebox']);
        $password = trim($_POST['passwordbox']);

        if($username!="" && $password!="") { //check boxes aren't empty
            //prepare Database query statement
            $stmt = "select * from staff where
                    staff_username=:username and 
                    staff_password=:password
                    ";
            $stmt = $conn->prepare($stmt);

            $stmt->bindParam('username',$username);
            $stmt->bindParam('password',$password);
            $stmt->execute(); //sends the query to the sql database

            //if successful then $stmt should generate 1 row
            $count =$stmt->rowCount();
            if($count==1) {
                $row = $stmt->fetch();
                echo "<p>Welcome ".$row['staff_username']."</p>";
                echo "<p>Your job is ".$row['job_title']."</p>";
            }
            else {
                echo "<h1>You have logged in incorrectly</h1>";
            }

        }
        else {
            echo "<h1>You need to type something in the boxes</h1>";
        }

    }
    else{
        echo "<h1>You don't have permission to see this page. Please <a href='index.php'>login</a></h1>";
    }

    ?>
<?php include 'footer.php'?>

