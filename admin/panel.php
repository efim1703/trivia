<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-2 p-4 cs-navbar">
            <h3><i>Admin Panel</i></h3>
            <nav class="admin-navbar">
                <a href="/admin/panel.php" class="<? if (!isset($_GET['page'])) echo 'active'?>">
                    Главная
                </a>

                <a href="?page=setting_page" class="<? if ($_GET['page'] === 'setting_page') echo 'active'?>">
                    Настройка сайта
                </a>
                
                <a href="?page=advantages" class="<? if ($_GET['page'] === 'advantages') echo 'active'?>">
                    Редактирование "Преимуществ"
                </a>

                <a href="?page=about" class="<? if ($_GET['page'] === 'about') echo 'active'?>">
                    Редактирование "О нас"
                </a>

                <a href="?page=products" class="<? if ($_GET['page'] === 'products') echo 'active'?>">
                    Редактирование "Товаров"
                </a>

                <a href="?page=contacts" class="<? if ($_GET['page'] === 'contacts') echo 'active'?>">
                    Редактирование "Контактов"
                </a>

                <a href="/" target="_blank">
                    На сайт
                </a>

                <a href="logout.php">
                    Выйти
                </a>

            </nav>
        </div>
        <div class="col-md-10 content-page p-4">
            <?
            require_once '../db.php';

            switch ($_GET['page']) {
                case 'setting_page':
                    require_once 'sections/setting_page.php';
                    break;
                case 'about':
                    require_once 'sections/about.php';
                    break;
                case 'advantages':
                    require_once 'sections/advantages.php';
                    break;
                case 'products':
                    require_once 'sections/products.php';
                    break;
                case 'contacts':
                    require_once 'sections/contacts.php';
                    break;
                

                default:
                    ?>
                    <h4>Добро пожаловать в админ панель насйтроки сайта Trivia Planet</h4>
                    <div class="alert alert-primary" role="alert">
                        Тут вы можете настроить ваш сайт, заменить текста и обновлять
                    </div>
                    <?
                    break;
            }
            ?>
        </div>
    </div>
    </div>
    

<!-- Пакет JavaScript с Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>