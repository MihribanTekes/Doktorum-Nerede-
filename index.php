<?PHP
include_once("connection.php"); 
if(isset($_POST['txtUsername']) && isset($_POST['txtPassword'])){
    
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $query = "SELECT * FROM tbl_user WHERE username = '$username' 
        AND password = '$password'";

    $result = mysqli_query($conn, $query);
    if($result->num_rows > 0){ //has record. correct username and password
        echo "Basarili";
        exit;
    }
    else{
        echo "Yanlis kullanici adi ve sifre"; 
        exit;
    }
}
?>


<html>
<head><title>Login</title></head>
    <body>
        <h1>Login| <a href=”Android”>Giris</a></h1>
        <form action="<?PHP $_PHP_SELF ?>" method="post">
            Username <input type="text" name="txtUsername" value="" placeholder="Kullanici Adi" /><br/>
            Password <input type="password" name="txtPassword" value="" placeholder="Sifre" /><br/>
            <input type="submit" name="btnSubmit" value="Login"/>
        </form>
    </body>
</html>