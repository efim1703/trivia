<h4>Редактирование "Преимуществ"</h4>

<?

// Получаем преимуществ
$advantages = $db->query("SELECT * FROM `advantages`");

?>

<div class="form">
    <div class="form-wrapper">
        <div class="form-header">
            Редактирование преимуществ  
        </div>
        <div class="form-content">
            <form action="hanler.php" method="POST">
                <input type="hidden" name="key_page" value="advantages">
                <?
                    foreach($advantages as $advantage){
                        ?>
                        <label>
                            <span>Заголок преимущества №<?=$advantage['id']?></span>
                            <input type="text" name="title<?=$advantage['id']?>" value="<?=$advantage['title']?>">
                        </label>
                        <label>
                            <span>Заголок преимущества №<?=$advantage['id']?></span>
                            <input type="text" name="text<?=$advantage['id']?>" value="<?=$advantage['text']?>">
                        </label>
                        <?
                    }
                ?>
                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
</div>