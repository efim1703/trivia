<?

session_start();

$login = 'admin';
$password = 'admin';

if(isset($_POST['done']) && !empty($_POST['login'])) {
    $loginUser = $_POST['login'];
    $passwordUser = $_POST['password'];
    if($loginUser === $login && $passwordUser === $password) {
        $_SESSION['user_admin'] = $login;
    } else {
        $error = "Неверный логин или пароль";
    }
}


if ($_SESSION['user_admin']) {
    header("Location: panel.php");
} else {
    ?>  
        <?
        if(isset($error) && !empty($error)) {?> <p class="error"><?=$error?></p> <?}?>
        
        <form method="POST">
            <label>
                <span>Логин</span>
                <input type="text" name="login">
            </label>
            <label>
                <span>Пароль</span>
                <input type="password" name="password">
            </label>
        
            <input type="submit" name="done">
        </form>
    <?
}

?>


 