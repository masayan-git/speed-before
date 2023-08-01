<?php get_header(); ?>
<main>
  <div class="mainView">
    <div class="mainView__inner">
      <header class="header">
        <div class="header__inner">
          <div class="header__logo">
            <a href="/" class="header__logoLink">
              <picture>
                <source srcset="<?= get_template_directory_uri() . '/images/header/logo-sp.png' ?>" media="(max-width: 768px)" />
                <img src="<?= get_template_directory_uri() . '/images/header/logo-pc.png' ?>" alt="OpenCafe" />
              </picture>
            </a>
          </div>
  
          <nav class="header__nav">
            <ul class="header__navInner">
              <li>
                <a href="/" data-ruby="トップ" class="header__navLink">
                  TOP
                </a>
              </li>
              <li>
                <a href="/" data-ruby="コンセプト" class="header__navLink">
                  CONCEPT
                </a>
              </li>
              <li>
                <a href="/" data-ruby="メニュー" class="header__navLink">
                  MENU
                </a>
              </li>
              <li>
                <a href="/" data-ruby="お知らせ" class="header__navLink">
                  NEWS
                </a>
              </li>
              <li>
                <a href="/" data-ruby="店舗情報" class="header__navLink">
                  SHOP
                </a>
              </li>
              <li>
                <a href="/" data-ruby="ギフト・贈り物" class="header__navLink">
                  GIFT
                </a>
              </li>
              <li>
                <a href="/" data-ruby="お問い合わせ" class="header__navLink">
                  CONTACT
                </a>
              </li>
            </ul>
          </nav>
          <ul class="header__sns">
            <li class="header__snsList">
              <a href="<?= esc_url(home_url('/')) ?>" class="header__snsLink">
                <?php get_template_part("components/icon/icon-twitter", null, "header__snsIcon") ?>
              </a>
            </li>
            <li class="header__snsList">
              <a href="<?= esc_url(home_url('/')) ?>" class="header__snsLink">
                <?php get_template_part("components/icon/icon-instagram", null, "header__snsIcon") ?>
              </a>
            </li>
            <li class="header__snsList">
              <a href="<?= esc_url(home_url('/')) ?>" class="header__snsLink">
                <?php get_template_part("components/icon/icon-youtube", null, "header__snsIcon") ?>
              </a>
            </li>
          </ul>
    
        </div>
      </header>
      <div class="mainImage">
        <div class="mainImage__inner">
          <div class="mainImage__swiper">
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <picture>
                  <source srcset="<?= get_template_directory_uri() . '/images/front-page/mv-pc1.jpg' ?>" media="(max-width: 768px)" />
                  <img src="<?= get_template_directory_uri() . '/images/front-page/mv-pc1.jpg' ?>" alt="モーニング" />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture>
                <source srcset="<?= get_template_directory_uri() . '/images/front-page/mv-sp2.jpg' ?>" media="(max-width: 768px)" />
                <img src="<?= get_template_directory_uri() . '/images/front-page/mv-pc2.jpg' ?>" alt="店内" />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture>
                  <source srcset="<?= get_template_directory_uri() . '/images/front-page/mv-sp3.jpg' ?>" media="(max-width: 768px)" />
                  <img src="<?= get_template_directory_uri() . '/images/front-page/mv-pc3.jpg' ?>" alt="コーヒー" />
                </picture>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="concept">
    <div class="concept__inner">
      
      <div class="concept__image">
        <picture>
          <source srcset="<?= get_template_directory_uri() . '/images/front-page/concept-sp.jpg' ?>" media="(max-width: 768px)" />
          <img src="<?= get_template_directory_uri() . '/images/front-page/concept-pc.jpg' ?>" alt="コーヒー" />
        </picture>
      </div>
      
      <div class="concept__contents">
        <div class="concept__contentsInner">
          <h2 class="title concept__title">
            <span class="title__en concept__titleEn">CONCEPT</span>
            <span class="title__ja concept__titleJa">当店のこだわり</span>
          </h2>
          <h3 class="concept__description">
            最高のコーヒーと、<br>
            時の流れを味わうことができる<br>
            手作りカフェ<br>
          </h3>
          <p class="concept__text">
            ダミー_国内外から賞賛を<br>
            受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br><br>
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          </p>
          <div class="concept__button">
            <a href="" class="button">詳しくはこちら</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>