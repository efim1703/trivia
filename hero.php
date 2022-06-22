<section class="hero">
    <div class="hero__wrapper">
      <div class="hero__container container">
        <div class="hero__body">
          <div class="hero__title">trivia planet</div>
          <h1 class="hero__header"><?=$setting_page['offer']?></h1>
          <a href="#getProduct" data-fancybox data-src="#getProduct" class="btn">Получить сейчас</a>
        </div>

      </div>
    </div>
  </section>

          <div class="about__form" id="getProduct" style="display: none;">
            <h2>Что-то уже выбрали или вам <br>помочь?</h2>
            <p>Укажите ваш номер телефона и наш менеджер вам перезвонит!</p>
            <form action="handler.php" method="post">
                      <input type="text" class="phone-mask" name="phone" id="phone" placeholder="+7 (___) ___-__-__" required><br>
                      <input type="submit" value="Получить сейчас">
                    </form>
          </div>