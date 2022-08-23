<html>

<head>
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
         Enter Username:<br><br><input type = "email" name="un" id ="us" ><br><br>
         Enter Password:<br><br><input type ="password" name="pwd" id = "pd"><br><br>
        <input type="submit" value ="Login"> <input type="reset" value="cancel" >
</form>

No account? <button id = "btn" onClick="fn()">Create account</button><br><br>
<script>
    function fn() // 
    {
        window.location.href= "http://127.0.0.1/signup__php.php";
    }
</script>
</body>

</html>
<?php

if(isset($_POST['un']))
{
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "vitap_db";
$conn = mysqli_connect($servername,$username,$password,$database);
$r = $_POST['un'];
$fn = $_POST['pwd'];
    //$s = "INSERT INTO CREDENTIALS VALUES ('$r', '$fn')";
    
    if(mysqli_num_rows(mysqli_query($conn,"SELECT USERNAME FROM CREDENTIALS WHERE USERNAME = '$r' AND PIN = '$fn' ")) == 1  )
    {
        echo "<b>Account succesfully found !</b><br>";
    }
    else
    {
        echo "<b>Incorrect username and password !</b><br>";
    }
}

// Developed By Amar

?>
