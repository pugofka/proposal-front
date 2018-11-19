<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Document</title>
  <style>
    body {
      font-family: DejaVu Sans;
      font-size: 14px;
    }

    .h1 {
      font-size: 34px;
    }

    .h2 {
      font-size: 18px;
    }

    ul {
      list-style-type: none;
      margin: 0px;
      padding: 0px;
    }

    .clear {
      clear: both;
    }

    .font-bold {
      font-weight: 900;
    }

    .text-center {
      text-align: center;
    }

    .text-uppercase {
      text-transform: uppercase
    }

    table {
      border-spacing: 0px;
    }

    section {
      page-break-after: always;
    }

    section:last-child {
      page-break-after: never;
    }

    .color-red {
      color: #eb4523;
    }

    .tr-gray {
      background-color: #ececec;
    }

    .page-break {
      page-break-after: always;
    }

    .section-home {
      position: relative;
      z-index: 2;
    }

    .section-home__title {
      font-weight: bold;
      text-align: center;
      width: 100%;
      padding-top: 200px;
    }

    .section-home__logo {
      width: 300px;
    }

    .section-price__block {
      background-color: #ececec;
      padding: 50px 30px;
      margin-bottom: 80px;
    }

    .section-price__block-left,
    .section-price__block-right {
      width: 50%;
      text-align: center;
    }

    .section-price__block-left h4,
    .section-price__block-right h4 {
      margin-top: 0;
    }
    
    .section-price__block-left p,
    .section-price__block-right p {
      margin-top: 20px;
      margin-bottom: 20px;
      font-size: 25px;
      font-weight: bold;
    }

    .section-price__block-left span,
    .section-price__block-right span {
      font-weight: bold;
    }

    .section-price__block-left {
      float: left;
      left: 0;
    }

    .section-price__block-right {
      float: right;
      right: 0;
    }

    .section-price__list__item-name {
      text-transform: uppercase;
      width: 180px;
      float: left;
      height: 50px;
      font-weight: bold;
    }

    .section-price__list__item {
      padding-bottom: 20px;
    }

    .section-estimate__table tr td {
      padding: 20px;
    }

    .section-estimate__table thead td {
      font-size: 12px;
    }

    .section__table {
      margin-top: 50px;
    }

    .section-calendar-plan__table td {
      padding: 30px;
    }

    .section-calendar-plan__table td {
      border: 1px solid #ececec;
    }

    .section-calendar-plan__table thead td {
      padding: 15px;
      background-color: #ececec;
    }

    .ection-functionality__table tr td {
      padding: 15px;
    }

    .section-about__table td {
      padding-bottom: 30px;
    }

    .section-about__post-title {
      margin-bottom: 20px;
    }
    .section-about__post-title h2 {
      font-size: 34px;
      margin: 0;
    }
    .section-about__post-title p {
      font-size: 34px;
      font-style: italic;
    }
    .section-about__text p {
      font-size: 14px;
    }
    .section-about__prize {
      width: 50%;
      padding: 0 10px;
      text-align: center;
      padding-bottom: 20px;
    }

    .section-about__prize p {
      font-weight: 700;
    }

    .section-about__achievement {
      width: 50%;
      padding-right: 50px;
    }

    .section-about__achievement:nth-of-type(2n) {
      padding-right: 0;
    }
    .section-about__achievement-title {
      font-size: 30px;
      font-weight: 700;
    }
    .section-about__achievement-title small {
      font-size: 22px;
    }
    .section-about__achievement p {
      font-size: 16px;
    }
    .section-group-members__table td {
      padding-bottom: 30px;
    }
    .section-group-members__table td img {
      width: auto;
      height: 80px;
    }
    .section-competence__table td img {
      width: auto;
      height: 40px;
    }

    .section-competence__table td img {
      width: 180px;
      height: auto;
    }

    .section-competence__table td {
      padding-bottom: 50px;
    }

    .section-competence__list img {
      width: 40px;
      float: left;
      margin-right: 30px;
      margin-top: 10px;
    }

    .section-competence__list li {
      margin-bottom: 10px;
    }

    .section-reviews__table td {
      padding-bottom: 10px;
    }

    .section-reviews__table td img {
      width: 220px;
    }

    .section-clients__table td {
      padding-bottom: 100px;
    }

    .section-clients__table td img {
      width: 150px;
    }

    .section-contacts__table td {
      padding-bottom: 30px;
    }

    .map {
      margin-top: 30px;
      width: 100%;
    }

    @page { margin: 100px 1.5cm; }
    .header {
      position: fixed;
      top: -60px;
      left: 0px;
      right: 0px;
      height: 50px;
      z-index: 1;
    }
    .header__img {
      float: left;
      width: 50%;
    }
    .header__text {
      text-align: right;
      float: left;
      width: 50%;
      color: #CBCBCB;
      font-size: 12px;
      margin: 0;
      padding: 0;
    }
    .footer {
      position: fixed;
      bottom: -60px;
      left: 0px;
      right: 0px;
      height: 50px;
      z-index: 1;
    }
    .footer__img {
      float: left;
      margin-top: 5px;
    }
    .footer__text {
      font-size: 12px;
      margin-left: 40px;
      color: #515151;
    }
  </style>
</head>

<body>
    <section class="section-home">
      <img src="img/pdfgen/pugofka_logo.png" class="section-home__logo">
      <h1 class="section-home__title">Коммерческое предложение по созданию сайта <span class="color-red">www.kapous.ru</span>
        19.04.2016
      </h1>
    </section>

    <header class='header'>
      <div class="header__img"><img src="img/pdfgen/pugofka_logo.png" height="50"></div>
      <div class="header__text">Коммерческое предложение<br/>по созданию сайта www.kapous.ru</div>
    </header>
    <footer class='footer'>
      <img src="img/pdfgen/icon_pugofka.png" class="footer__img" height="25">
      <div class="footer__text">
        Санкт-Петербург, Громова 4, офис 371, 373<br/>
        +7 (812) 425-64-08<br/>
        info@pugofka.com
      </div>
    </footer>

    <section class="section-price">

      <table width="100%" height="100%">

        <tbody height="100%">
          <tr>
            <td colspan="2">
              <div class="section-price__block">
                <div class="section-price__block-left">
                  <h4 class="h4">Стоимость работ</h4>
                  <p class="h1 color-red">{{$price}} рублей</p>
                  <span class="color-red">в т.ч. НДС 18:</span>
                </div>
                <div class="section-price__block-right">
                  <h4 class="h4">Срок разработки</h4>
                  <p class="h1 color-red">
                    
                    @php
                      $hoursData = json_decode($data->additional_tasks);
                      $hours = 0;
                      for ($i=0; $i < count($hoursData); $i++) { 
                        $hours += $hoursData[$i]->hours;
                      }
                    @endphp
                    {{$hours / 8}} рабочих дней
                  </p>
                </div>
                <div class="clear"></div>
              </div>
            </td>
          </tr>

          <tr class="section-price__list">
            <td class="section-price__list__item" colspan="2">
              <p class="section-price__list__item-name color-red">Проблема</p>
              <p class="section-price__list__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum
                neque vel enim impedit, provident voluptatem?</p>
            </td>
          </tr>
          <tr class="section-price__list">
            <td class="section-price__list__item" colspan="2">
              <p class="section-price__list__item-name color-red">Задача</p>
              <p class="section-price__list__item-text">{{$data->name}}</p>
            </td>
          </tr>
          <tr class="section-price__list">
            <td class="section-price__list__item" colspan="2">
              <p class="section-price__list__item-name color-red">Цель</p>
              <p class="section-price__list__item-text">{{$template}}</p>
            </td>
          </tr>

        </tbody>
      </table>
    </section>


    <section class="section-estimate">
      <h1 class="section-estimate__title h1">Расчетная сммета</h1>
      <table width="100%" class="section__table section-estimate__table">
        <thead>
          <tr class="tr-gray">
            <td width="10%">Этап</td>
            <td width="50%">Описание работ / этапа</td>
            <td width="20%" align="right">Стоимость работ. / условия оплаты</td>
            <td width="20%" align="right">Сроки сдачи (раюочих дней)</td>
          </tr>
        </thead>
        <tbody>
          @php
            $hoursData = json_decode($data->additional_tasks);
          @endphp
          @for ($i = 0; $i < count($hoursData); $i++)
            @if ((($i + 1) % 2) == 0)
              <tr class="tr-gray">
            @else
              <tr>
            @endif
                <td valign="top">
                  {{ $i + 1 }}
                </td>
                <td valign="top">
                  <strong>{{$hoursData[$i]->name}}</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quae porro quas tempora, quos commodi?</p>
                </td>
                <td align="right">{{$data->cost_per_hour * $hoursData[$i]->hours}}</td>
                <td align="right">{{$hoursData[$i]->hours / 8}}</td>
            </tr>
          @endfor
          
        </tbody>
      </table>
    </section>

    <section class="section section-cms">
      <h1 class="h1 section__title">Система управления сайтом</h1>
      <table width="100%" class="section__table section-cms__table">
        <thead>
          <tr>
            <td width="40%"></td>
            <td width="30%"></td>
            <td width="30%"></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img src="img/pdfgen/b24_redaction.png" alt="" width="150">
            </td>
            <td>
              <h2 class="h2">1С-Битрикс Редакция бизнес</h2>
            </td>
            <td style="text-align:right; font-size: 18px">72 900*</td>
          </tr>
          <tr>
            <td colspan="3" style="padding-top:80px">*Лицензионный ключ активации ПО для дальнейшей разработки сайта и управления
              им.
            </td>
          </tr>
        </tbody>
      </table>
    </section>

    <section class="section section-calendar-plan">
      <h1 class="h1 section__title">Календарный план</h1>
      <table width="100%" class="section__table section-calendar-plan__table">
        <thead>
          <tr>
            <td width="24%">Этап / месяц</td>
            <td width="19%">Апрель, 2018</td>
            <td width="19%">Май, 2018</td>
            <td width="19%">Июнь, 2018</td>
            <td width="19%">Июнь, 2018</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ТЗ, прототипы</td>
            <td bgcolor="#eb4523"></td>
            <td bgcolor="#eb4523"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Дизайн</td>
            <td></td>
            <td bgcolor="#eb4523"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Верстка</td>
            <td></td>
            <td bgcolor="#eb4523"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Сборка сайта</td>
            <td></td>
            <td bgcolor="#eb4523"></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Интеграция с 1С</td>
            <td></td>
            <td></td>
            <td bgcolor="#eb4523"></td>
            <td></td>
          </tr>
          <tr>
            <td>Тестирование, сдача</td>
            <td></td>
            <td></td>
            <td></td>
            <td bgcolor="#eb4523"></td>
          </tr>
        </tbody>
      </table>
    </section>

    <section class="section section-functionality">
      <h1 class="section-functionality__title h1">Дополнительный функцинал</h1>
      <table width="100%" class="section__table ection-functionality__table">
        <tbody>
          @for ($i = 0; $i < count($info); $i++)
            <tr>
              <td bgcolor="#ececec">{{$info[$i]->name}}</td>
            </tr>
            <tr>
            <td>
              {{$info[$i]->price}}
            </td>
          </tr>
          @endfor
        </tbody>
      </table>

    </section>


    <section class="section-about">
      <h1 class="section__title h1">О нас</h1>

      <div class="section-about__post-title">
        <h2>5 +</h2>
        <i>лет на рынке</i>
      </div>
      
      <div class="section-about__text">
        <p>Наша специализация - разработка и поддержка сайтов на 1С-Битрикс. Подбираем решения на любой бюджет. Гарантия на все работы. Больше всеголюбим и умеем делать сложные интернет-магазины.</p>
      </div>

      <table>
        <tr>
          <td class="section-about__prize">
            <img src="img/pdfgen/prize_rating_runet.png" width="300" alt="">
            <p>2 место</p>
          </td>
          <td class="section-about__prize">
            <img src="img/pdfgen/prize_1cbitrix.png" width="300" alt="">
            <p>26 место</p>
          </td>
        </tr>
      </table>

      <table>
        <tr>
          <td class="section-about__achievement">
            <div class="section-about__achievement-title">&lt; 0,7</div>
            <p>секунды средняя скорость наших сайтов</p>
          </td>
          <td class="section-about__achievement">
            <div class="section-about__achievement-title">19 <small>из 20</small></div>
            <p>клиентов работают с нами</p>
          </td>
        </tr>
        <tr>
          <td class="section-about__achievement">
            <div class="section-about__achievement-title">170 +</div>
            <p>проектов реализовано</p>
          </td>
          <td class="section-about__achievement">
            <div class="section-about__achievement-title">15 <small>из 15</small></div>
            <p>клиентов рекомендуют нас</p>
          </td>
        </tr>
      </table>
    </section>

    <section class="section section-group-members">
      <h1 class="section__title h1">Состав проектной группы</h1>
      <p>На разных технологических этапах работы, над реализацией вашего проекта принимают участние от 6 до 12 специалистов нашей компании.</p>
      <table width="100%" class="section__table section-group-members__table">
        <tbody>
          <tr>
            <td width='50%'>
              <img src="img/pdfgen/spec_project_manager.png" alt="">
              <p>Менеджеры проектов<br/>Контент менджеры</p>
            </td>
            <td width='50%'>
              <img src="img/pdfgen/spec_information_architects.png" alt="">
              <p>UI/UX-специалисты<br/>Информационные архитекторы<br/>Дизайнеры</p>
            </td>
          </tr>
          <tr>
            <td width='50%'>
              <img src="img/pdfgen/spec_frontend.png" alt="">
              <p>Front-End специалисты<br/>Back-End специалисты</p>
            </td>
            <td width='50%'>
              <img src="img/pdfgen/spec_system_architects.png" alt="">
              <p>Системные архитекторы<br/>Системные администраторы</p>
            </td>
          </tr>
          <tr>
            <td width='50%'>
              <img src="img/pdfgen/spec_qa_engineers.png" alt="">
              <p>QA-инженеры</p>
            </td>
          </tr>
        </tbody>
      </table>
    </section>


    <section class="section section-competence">
      <h1 class="section__title h1">Наши компетенции</h1>
      <table width="100%" class="section__table section-competence__table">
        <tbody>
          <tr>
            <td>
              <img src="img/pdfgen/features_compose_site.png">
              <h3>Bitrix 24</h3>
              <p>Композитный сайт</p>
            </td>
            <td>
              <img src="img/pdfgen/b24_integration.png">
              <h3>Bitrix 24</h3>
              <p>Интеграция с 1С</p>
            </td>
          </tr>
          <tr>
            <td>
              <img src="img/pdfgen/features_competence.png">
              <h3>Bitrix 24</h3>
              <p>Компетенция</p>
            </td>
            <td>
              <img src="img/pdfgen/features_quality_of_inmplementation.png">
              <h3>Качества внедрений</h3>
              <p>Участник программы</p>
            </td>
          </tr>
          <tr>
            <td>
              <img src="img/pdfgen/features_gold_partner.png">
              <h3>Bitrix 24</h3>
              <p>Золотой сертифицированный партнер</p>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="section-competence__list">
        <img src="img/pdfgen/specia_triangle.png">
        <ul>
          <li>Входим в координационный совет</li>
          <li>Содружества петербургских цифровых агенств <span class="color-red">Specia</span></li>
        </ul>
      </div>
    </section>


    <section class="section section-reviews">
      <h1 class="section__title h1">Отзывы наших клиентов</h1>
      <table width="100%" class="section__table section-reviews__table">
        <thead>
          <tr>
            <td width="33.3333%"></td>
            <td width="33.3333%"></td>
            <td width="33.3333%"></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img src="img/pdfgen/review_ball_spb.png" alt=""></td>
            <td><img src="img/pdfgen/review_akvabook.png" alt=""></td>
            <td><img src="img/pdfgen/review_alpha_insurance.png" alt=""></td>
          </tr>
          <tr>
            <td><img src="img/pdfgen/review_buisnes_school.png" alt=""></td>
            <td><img src="img/pdfgen/review_clover_groups.png" alt=""></td>
          </tr>
        </tbody>
      </table>
    </section>

    <section class="section section-clients">
      <h1 class="section__title h1">Клиенты</h1>
      <table width="100%" class="section__table section-clients__table">
        <thead>
          <tr>
            <td width="33.3333%"></td>
            <td width="33.3333%"></td>
            <td width="33.3333%"></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img src="img/pdfgen/clients_kapous.png" alt=""></td>
            <td><img src="img/pdfgen/clients_buisnes_grant.png" alt=""></td>
            <td><img src="img/pdfgen/clients_alfa_insurance.png" alt=""></td>
          </tr>
          <tr>
            <td><img src="img/pdfgen/clients_ball_spb.png" alt=""></td>
            <td><img src="img/pdfgen/clients_stronto.png" alt=""></td>
            <td><img src="img/pdfgen/clients_spadream.png" alt=""></td>
          </tr>
          <tr>
            <td><img src="img/pdfgen/clients_buisnes_school.png" alt=""></td>
            <td><img src="img/pdfgen/clients_clover_groups.png" alt=""></td>
          </tr>
        </tbody>
      </table>
    </section>


    <section class="section section-contacts">
      <h1 class="section__title h1">Контакты</h1>
      <table width="100%" class="section__table section-contacts__table">
        <thead>
          <tr>
            <td width="20%"></td>
            <td width="80%"></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="color-red text-uppercase font-bold">Адрес</span></td>
            <td>Санкт-Петербург, Громова 4, офис 371, 373</td>
          </tr>
          <tr>
            <td><span class="color-red text-uppercase font-bold">Телефон</span></td>
            <td>+7 (812) 425-64-08</td>
          </tr>
          <tr>
            <td><span class="color-red text-uppercase font-bold">e-mail</span></td>
            <td>info@pugofka.com</td>
          </tr>
        </tbody>
      </table>
      <img src="img/pdfgen/map.png" class="map" alt="">
    </section>

</body>

</html>