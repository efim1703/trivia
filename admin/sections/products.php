<h4>Редактирование "Товаров"</h4>

<?

// Получаем товары
$products = $db->query("SELECT * FROM `products`");


?>

<div class="form">
<div class="form-wrapper">
        <div class="form-header">
            Редактирование товаров  
        </div>
        <div class="form-scroll">
            <? foreach($products as $product) { ?>
            <div class="form-content">
                <form action="hanler.php" method="POST">
                    <input type="hidden" name="key_page" value="products">
                    <input type="hidden" name="id_product" value="<?=$product['id']?>">
                    <div class="product-list">
                        <div class="product-form">
                            <label>
                                <span>Заголок товара</span>
                                <input type="text" name="name" value="<?=$product['name']?>">
                            </label>
                            <label>
                                <span>Цена товар</span>
                                <input type="number" name="price" value="<?=$product['price']?>">
                            </label>
                            <input type="submit" value="Сохранить">
                        </div>
                        <img src="<?=$product['img_src']?>" width="120" height="120">
                    </div>
                </form>
            </div>
            <? } ?>
        </div>
    </div>
</div>