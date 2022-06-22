<section class="goods" id="goods">
    <div class="goods__wrapper">
      <div class="goods__container container">
        <h3 class="title__line">Товары</h3>
        <div class="goods__body">
          <h2>Товары - по лучшей цене</h2>
          <div class="goods__card">
            <? foreach ($products as $product) { ?>
                <div class="goods__item" data-fancybox data-src="#getGoods<?=$product['id']?>">
                  <img src="<?=$product['img_src']?>">
                  <p><?=$product['name']?></p>
                  <small>От <?=$product['price']?> руб.</small>
                </div>

                <div style="display: none;" class ="getGoods" id="getGoods<?=$product['id']?>">
                  <div class="name-goods"><p><?=$product['name']?></p></div>
                  <div class="goods__card">
                    
                      <div class="goods__item fancy" >
                          <img src="<?=$product['img_src']?>">
                          <p><?=$product['name']?></p>
                          <small>От <?=$product['price']?> руб.</small>
                        </div>
                        <div class="goods__item fancy" >
                          <img src="<?=$product['img_src']?>">
                          <p><?=$product['name']?></p>
                          <small>От <?=$product['price']?> руб.</small>
                        </div>
                        <div class="goods__item fancy" >
                          <img src="<?=$product['img_src']?>">
                          <p><?=$product['name']?></p>
                          <small>От <?=$product['price']?> руб.</small>
                        </div>
                        <div class="goods__item fancy" >
                          <img src="<?=$product['img_src']?>">
                          <p><?=$product['name']?></p>
                          <small>От <?=$product['price']?> руб.</small>
                        </div>
                        <div class="goods__item fancy" >
                          <img src="<?=$product['img_src']?>">
                          <p><?=$product['name']?></p>
                          <small>От <?=$product['price']?> руб.</small>
                        </div>
                  </div>

                </div>
            <? } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>