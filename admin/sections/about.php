<h4>Редактирование "О нас"</h4>

<?
// Получение "о нас"
$about = $db->query("SELECT * FROM `about`")->fetch(PDO::FETCH_ASSOC);
?>

<div class="form">
    <div class="form-wrapper">
        <div class="form-header">
            Настройка секции "О нас"
        </div>
        <div class="form-content">
            <form action="hanler.php" method="POST">
                <input type="hidden" name="key_page" value="about">
                <label>
                    <span>Заголок</span>
                    <input type="text" name="title" value="<?=$about['title']?>">
                </label>
                <label>
                    <span>Абзац 1</span>
                    <textarea name="text1" style="resize: none;" rows="3"><?=$about['text1']?></textarea>
                </label>
                <label>
                    <span>Абзац 2</span>
                    <textarea name="text2" style="resize: none;" rows="3"><?=$about['text2']?></textarea>
                </label>
                <label>
                    <span>Абзац 3</span>
                    <textarea name="text3" style="resize: none;" rows="3"><?=$about['text3']?></textarea>
                </label>

                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
</div>