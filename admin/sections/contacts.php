<h4>Редактирование "Контактов"</h4>

<?
// Получаем контактные данные
$contacts = $db->query("SELECT * FROM `contacts`")->fetch(PDO::FETCH_ASSOC);
?>

<div class="form">
    <div class="form-wrapper">
        <div class="form-header">
            Редактирование секции Контакты  
        </div>
        <div class="form-content">
            <form action="hanler.php" method="POST">
                <input type="hidden" name="key_page" value="contacts">
                <label>
                    <span>Телефон</span>
                    <input type="text" name="phone" class="phone-mask" value="<?=$contacts['phone']?>">
                </label>
                <label>
                    <span>Почта</span>
                    <input type="text" name="email" value="<?=$contacts['email']?>">
                </label>
                <label>
                    <span>Адрес</span>
                    <input type="text" name="addres" value="<?=$contacts['addres']?>">
                </label>
                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
<script>
    // Mask for el that has class .phone-mask
    $(".phone-mask").mask("+7 (999) 999-99-99");
</script>