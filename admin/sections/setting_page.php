<h4>Настройка сайта</h4>

<?

// Получаем общие настройки страницы
$setting_page = $db->query("SELECT * FROM `setting_page`")->fetch(PDO::FETCH_ASSOC);

?>

<div class="form">
    <div class="form-wrapper">
        <div class="form-header">
            Настройка head
        </div>
        <div class="form-content">
            <form action="hanler.php" method="POST">
                <input type="hidden" name="key_page" value="setting_page">
                <label>
                    <span>Заголок сайта</span>
                    <input type="text" name="title" value="<?=$setting_page['title']?>">
                </label>
                <label>
                    <span>Ключевые слова <small>(Указывать через запятую)</small></span>
                    <input type="text" name="keywords" value="<?=$setting_page['keywords']?>">
                </label>
                <label>
                    <span>Описание сайта</span>
                    <input type="text" name="description" value="<?=$setting_page['description']?>">
                </label>
                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
    <div class="form-wrapper">
        <div class="form-header">
            Редактирование оффера
        </div>
        <div class="form-content">
            <form action="hanler.php" method="POST">
                <input type="hidden" name="key_page" value="setting_offer">
                <label>
                    <span>Укажите оффер</span>
                    <textarea name="offer" style="resize: none;" rows="3"><?=$setting_page['offer']?></textarea>
                </label>
                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
</div>