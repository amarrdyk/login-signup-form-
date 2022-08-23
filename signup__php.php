<?php

if(isset($_POST['un']))
{
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "vitap_db";
$conn = mysqli_connect($servername,$username,$password,$database);
$un = $_POST['un'];
$pw = $_POST['pwd'];
$s = mysqli_query($conn,"SELECT USERNAME FROM CREDENTIALS WHERE USERNAME = '$un' ");

 if(mysqli_num_rows($s)==0)
 {
    mysqli_query($conn,"INSERT INTO CREDENTIALS VALUES('$un','$pw')");
    echo "<br><b>Account successfully created!</b></br>";
    
 }
 else{
     echo "<br><b>Email-id already exists, try different one!</b><br>";
 }


//mysql_close($conn);
}


?>

<!DOCTYPE html>
<head>
    <title>Create account</title>
</head>
<body>
    <form action="" method ="POST">
        Enter Email Id:<br><br><input type = "email" name="un" id ="us" ><br><br>
        Enter Password:<br><br><input type ="password" name="pwd" id = "pd"><br><br>
        Enter Mobile:<br><br><input type="tel" name="tel" id="tel"><br><br>
        <input type="submit" value ="Create account"><br><br>
      
    </form>
    Already had an account?<br><br>
    <Button id="btn" onClick="fn()">Sign in instead</Button><br><br>
    <script>
    function fn()
    {
        window.location.href="sqltask.php";
    }
</script>
 
</body>

<!-- Developed By Amar -->

</html>

