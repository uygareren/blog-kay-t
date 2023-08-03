<?php
session_start();
require("../admin/config/config.php");

if (isset($_POST["register"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password != $confirmPassword) {
        $_SESSION["message"] = "Password doesn't match!";
        header("Location: ../admin/auth/register.php");
        exit();
    } else {
        // E-posta adresinin var olup olmadığını kontrol et
        $q = $db->prepare("SELECT * FROM user WHERE email = ?");
        $q->execute([$email]);
        $rowCount = $q->fetchColumn();

        if ($rowCount > 0) {
            $_SESSION["message"] = "You already have an account!";
            header("Location: ../admin/auth/register.php");
            exit();
        } else {
            // Eğer buraya gelindiğinde, şifreler eşleşiyor ve e-posta adresi veritabanında yok
            // Kullanıcıyı veritabanına kaydet

            // Şifreyi hashleme (güvenlik amacıyla)
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Kayıt işlemini gerçekleştir
            $insertQuery = $db->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
            $insertQuery->execute([$name, $email, $hashedPassword]);

            $_SESSION["message"] = "Registration successful! You can now log in.";
            header("Location: ../admin/auth/login.php");
            exit();

        }
    }
} else if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Veritabanına bağlanın ve kullanıcıyı sorgulayın
    // Örnek olarak, $db bağlantı değişkeni kullanılarak sorgulama yapılıyor varsayalım
    $query = "SELECT * FROM user WHERE email = ?";
    $q = $db->prepare($query);
    $q->execute([$email]);
    $user = $q->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Kullanıcı bulundu, şifreyi doğrulayın
        if (password_verify($password, $user['password'])) {
            // Şifre doğrulandı, kullanıcı giriş yaptı

            // Oturum açma işlemleri
            // Örnek olarak, oturum başlatma işlemleri için $_SESSION kullanıyoruz
            $_SESSION['auth'] = true;
            $_SESSION['auth_user'] = [
                "id" => $user["id"],
                'name' => $user["name"],
                'email' => $user["email"]
            ];

            $role = $user['role'];
            $_SESSION['role'] = $role;
            

            if($role == 1){
                // Giriş yapıldıktan sonra yönlendirme yapabilirsiniz
                $_SESSION['message'] = $user['Login Succesfull!'];

                header('Location: ../admin/index.php');
                exit();
            }else{
                $_SESSION['message'] = $user['Login Succesfull!'];

                header('Location: ../index.php');
                exit();
            }

            
        } else {
            // Şifre doğrulanamadı, hata mesajı döndürebilirsiniz
            $_SESSION['message'] = $user['Password Error!'];
            header('Location: ../admin/auth/login.php');
            exit();

        }
    } else {
        // Kullanıcı bulunamadı, hata mesajı döndürebilirsiniz
        $_SESSION['message'] = $user['There is no user!'];
        header('Location: ../admin/auth/login.php');
        exit();
    }
}




?>
