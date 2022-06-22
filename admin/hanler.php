<?

// Подключаем БД
require_once '../db.php';

// Функция которая редиректит на страницу обратно, если всё ок
function getResultChanges ($result, $keyPage) {
    if($result) {
        header('Location: /admin/panel.php?page='.$keyPage);
    } else {
        echo "<div>Request failed <a href='/'>На сайта!</a></div>";
    }
}

$keyPage = $_POST['key_page'];

// Перебираем ключи с формы и делаем запросы в БД
switch($keyPage) {
    case 'setting_page':
        require_once 'queries/setting_page.php';
        getResultChanges($result, $keyPage);
        break;
    case 'setting_offer':
        require_once 'queries/setting_offer.php';
        getResultChanges($result, 'setting_page');
        break;
    case 'advantages':
        require_once 'queries/advantages.php';
        getResultChanges($result, $keyPage);
        break;
    case 'contacts':
        require_once 'queries/contacts.php';
        getResultChanges($result, $keyPage);
        break;
    case 'about':
        require_once 'queries/about.php';
        getResultChanges($result, $keyPage);
        break;
    case 'products':
        require_once 'queries/products.php';
        getResultChanges($result, $keyPage);
        break;
}

?>