

  <div class="advantages" id="advantages">
    <div class="advantages__wrapper">
      <div class="advantages__container container">
        <div class="advantages__body">
          <div class="advantages__list">
          <?
          $imgList = ['reliable', 'price', 'assortment'];
          $i = 0;

          foreach($advantages as $advantage) {
            ?>
            <div class="advantages__item">
              <?=$index?>
              <img src="assets/images/<?=$imgList[$i]?>.svg">
              <span class="title"><?=$advantage['title']?></span>
              <span><?=$advantage['text']?></span>
            </div>
            <?
            $i++;
          }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>