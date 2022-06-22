<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?=$setting_page['description']?>">
  <meta name="keywords" content="<?=$setting_page['keywords']?>">
  <title><?=$setting_page['title']?></title>

  <!-- Style link -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!— Стили Fancybox —>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="top-panel" style="text-align: center; padding: 16px;width: 100%;position: fixed; background: #bd37ff; z-index: 3;">
          <span>texttexttetexttext</span>
  </div>

  <div class="top-header" style="padding-top: 50px;">
    <div class="top-header__wrapper">
      <div class="top-header__container container">
        <div class="top-header__body">
          <a href="#"><?=$contacts['email'];?></a>
          <a href="#"><?=$contacts['phone'];?></a>
        </div>
      </div>
    </div>
  </div>
  
  <header class="header" id="header">
    <div class="header__wrapper">
      <div class="header__container container">
        <div class="header__body">
          <a href="/" class="header__logo">
            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_6_2)">
              <path d="M41.7576 8.77496C41.5172 8.43039 41.1303 8.21741 40.7101 8.19946L14.6571 7.07646C13.9096 7.04375 13.2849 7.62085 13.253 8.36488C13.2212 9.10863 13.7974 9.73705 14.5413 9.76901L38.8304 10.8161L34.0547 25.7168H12.802L8.96238 4.81034C8.87798 4.35214 8.56339 3.96988 8.12953 3.79966L1.8409 1.32912C1.14781 1.05777 0.365719 1.3982 0.0935218 2.09044C-0.178205 2.78306 0.162135 3.56562 0.854846 3.83782L6.44644 6.03448L10.3538 27.3078C10.4716 27.9474 11.029 28.4119 11.6795 28.4119H12.3276L10.8476 32.523C10.7237 32.8674 10.7747 33.2498 10.9855 33.549C11.1961 33.8483 11.5385 34.0263 11.904 34.0263H12.9421C12.2989 34.7422 11.904 35.6849 11.904 36.7215C11.904 38.9507 13.7179 40.7642 15.9467 40.7642C18.1755 40.7642 19.9895 38.9507 19.9895 36.7215C19.9895 35.6849 19.5946 34.7422 18.9514 34.0263H27.7656C27.122 34.7422 26.7273 35.6849 26.7273 36.7215C26.7273 38.9507 28.5407 40.7642 30.77 40.7642C32.9994 40.7642 34.8127 38.9507 34.8127 36.7215C34.8127 35.6849 34.418 34.7422 33.7749 34.0263H35.0374C35.6577 34.0263 36.1604 33.5235 36.1604 32.9034C36.1604 32.2831 35.6576 31.7804 35.0374 31.7804H13.5019L14.7145 28.4115H35.0373C35.6233 28.4115 36.1418 28.0329 36.3203 27.4753L41.9352 9.95671C42.0642 9.55687 41.998 9.11972 41.7576 8.77496ZM15.9468 38.5187C14.9559 38.5187 14.15 37.7129 14.15 36.7219C14.15 35.731 14.9559 34.9251 15.9468 34.9251C16.9378 34.9251 17.7436 35.731 17.7436 36.7219C17.7436 37.7129 16.9378 38.5187 15.9468 38.5187ZM30.77 38.5187C29.7791 38.5187 28.9733 37.7129 28.9733 36.7219C28.9733 35.731 29.7791 34.9251 30.77 34.9251C31.7609 34.9251 32.5667 35.731 32.5667 36.7219C32.5667 37.7129 31.7609 38.5187 30.77 38.5187Z" fill="#FFA133"/>
              </g>
              <defs>
              <clipPath id="clip0_6_2">
              <rect width="42" height="42" fill="white"/>
              </clipPath>
              </defs>
            </svg>
            <span>Trivia <br> Planet</span>
          </a>
          <ul class="header__nav">
            <li><a href="#header">Главная</a></li>
            <li><a href="#advantages">Преимущества</a></li>
            <li><a href="#about">О нас</a></li>
            <li><a href="#goods">Товары</a></li>
            <li><a href="#contacs">Контакты</a></li>
          </ul>
        </div>
      </div>
      
    </div>
  </header>
