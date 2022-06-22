<section class="about" id="about">
    <div class="container">
      <h3 class="title__line">Немного о нас</h3>
    </div>
    <div class="about__wrapper">
      <div class="about__container container">
        <div class="about__body">
            <div class="row">
              <div class="col-md-6">
                <div class="about__text">
                  <h2><?=$about['title']?></h2>
                  <p><?=$about['text1']?></p>
                  <p><?=$about['text2']?></p>
                  <p><?=$about['text3']?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about__form" id="getProduct">
                  <h2>Срочно нужен товар?</h2>
                  <p>Укажите номер телефона и мы перезвоним<br>в течении 120 секунд</p>
                  <form action="handler.php" method="post">
                    <input type="text" class="phone-mask" name="phone" id="phone" placeholder="+7 (___) ___-__-__" required><br>
                    <input type="submit" value="Получить сейчас">
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>