<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="loginapp.js" defer></script>
    <link rel="stylesheet" href="loginapp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Giriş</title>
</head>
<body>
<div class="container">
    <form action="" method="post">
    <label ><input type="text" name="username" placeholder="Kullanıcı Adı" required class="username"><i class="user fa-solid fa-user"></i></label>
    <label ><input type="password" name="password" placeholder="Şifre" required class="password"><i class="passw1 fa-solid fa-lock"></i><i class="passw2 fa-solid fa-unlock-keyhole"></i></label>
    <label class="line1"><input type="checkbox" class="checkbox"><span class="rememberpassw">Şifremi Hatırla  </span>  <a href="#" class="forgetpassw">Şifremi Unuttum</a></label>
    <button type="submit" class="giris" name="giris">Giriş Yap</button>
    <button type="reset" class="kayit"><a>Kayıt Ol</a></button>
    </form>

</div>
<?php
session_start(); //* bilgilerin menülerde $_SESSION ile işlenmesi için;
ob_start();
$veritabani = new PDO("mysql:host=localhost;dbname=page_users","root","");

@$usernameForm = $_POST["username"];
@$passwordForm =$_POST["password"];

@$usernameDB = (($veritabani->query("SELECT user_name FROM users WHERE user_name='$usernameForm'")->fetchAll(PDO::FETCH_ASSOC))[0])["user_name"];
@$passwordDB = (($veritabani->query("SELECT password FROM users WHERE user_name='$usernameDB'")->fetchAll(PDO::FETCH_ASSOC))[0])["password"];
@$idDB = (($veritabani->query("SELECT id FROM users WHERE user_name='$usernameDB'")->fetchAll(PDO::FETCH_ASSOC))[0])["id"];
@$name = (($veritabani->query("SELECT isim FROM users WHERE id='$idDB'")->fetchAll(PDO::FETCH_ASSOC))[0])["isim"];
@$lastname = (($veritabani->query("SELECT soy_isim FROM users WHERE id='$idDB'")->fetchAll(PDO::FETCH_ASSOC))[0])["soy_isim"];
@$eposta = (($veritabani->query("SELECT eposta FROM users WHERE id='$idDB'")->fetchAll(PDO::FETCH_ASSOC))[0])["eposta"];





if(isset($_POST["giris"])) {
    @$_SESSION["isim"] = $name;
    @$_SESSION["soy_isim"] = $lastname;
    @$_SESSION["eposta"] = $eposta;

    header_remove();
    if($usernameDB == $usernameForm && $passwordDB == $passwordForm) {
        header("location:anamenu.php");
        exit;
    
    
    
    
    }
    
}

if($usernameDB !== $usernameForm) {
}
if( $passwordDB !== $passwordForm) {
 
}



?>
    
</body>
</html>