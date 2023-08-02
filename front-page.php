<?php get_header(); ?>
<main>
  <div class="main-view">
    <div class="main-view__container">
      <div class="main-view__image">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide ">
              <div class="slide-img">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/main1-pc.jpg" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/main1-sp.jpg" alt="">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/main2-pc.jpg" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/main2-sp.jpg" alt="">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/main3-pc.jpg" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/main3-sp.jpg" alt="">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-view__content">
        <h2 class="main-view__title">メインタイトルが入ります</h2>
        <p class="main-view__sub-title">サブタイトルが入ります</p>
      </div>
    </div>
  </div>

  <section class="top-news">
    <div class="inner top-news__container">
      <div class="top-news__warp">
        <div class="top-news__info">
          <time class="top-news__time" datetime="2020-07-20">2020.07.20</time>
          <div class="top-news__category">
            <div class="top-news__category-container">
              <p class="top-news__category-title">お知らせ</p>
            </div>
          </div>
        </div>
        <div class="top-news__title-container">
          <p class="top-news__title"><a href="" class="top-news__title-link">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a></p>
        </div>
      </div>
      <div class="top-news__button-container">
        <a href="" class="top-news__button">すべて見る</a>
      </div>
    </div>
  </section>

  <section class="section content">
    <div class="line line--content is-sp">
      <svg viewBox="0 0 375 681" fill="none" class="line__svg line__svg--content-sp" xmlns="http://www.w3.org/2000/svg">
        <line x1="0.437685" y1="0.758274" x2="375.597" y2="680.046" stroke="#F9F871"/>
      </svg>
    </div>
    <div class="line line--content is-pc">
      <svg viewBox="0 0 1213 1213" fill="none" class="line__svg line__svg--content-pc" xmlns="http://www.w3.org/2000/svg">
        <line x1="0.353553" y1="0.646447" x2="1212.33" y2="1212.63" stroke="#F9F871"/>
      </svg>
    </div>
    <h2 class="inner section__title">
      <span class="section__title-en section__title-en--left">Content</span>
      <span class="section__title-ja section__title-ja--content">事業内容</span>
    </h2>
    <div class="content__container">
      <div class="content__items">
        <div class="content__items-container">
          <div class="content__item">
            <a href="" class="content__item-link">
              <picture>
                <source srcset="<?= get_template_directory_uri() ?>/images/top/content1-pc.jpg" media="(min-width: 768px)">
                <img src="<?= get_template_directory_uri() ?>/images/top/content1-sp.jpg" alt="">
              </picture>
              <span class="content__item-text">経営理念ページへ</span>
            </a>
          </div>
          <div class="content__item">
            <a href="" class="content__item-link">
              <picture>
                <source srcset="<?= get_template_directory_uri() ?>/images/top/content2-pc.jpg" media="(min-width: 768px)">
                <img src="<?= get_template_directory_uri() ?>/images/top/content2-sp.jpg" alt="">
              </picture>
              <span class="content__item-text">理念1へ</span>
            </a>
          </div>
          <div class="content__item">
            <a href="" class="content__item-link">
              <picture>
                <source srcset="<?= get_template_directory_uri() ?>/images/top/content3-pc.jpg" media="(min-width: 768px)">
                <img src="<?= get_template_directory_uri() ?>/images/top/content3-sp.jpg" alt="">
              </picture>
              <span class="content__item-text">理念2へ</span>
            </a>
          </div>
          <div class="content__item">
            <a href="" class="content__item-link">
              <picture>
                <source srcset="<?= get_template_directory_uri() ?>/images/top/content4-pc.jpg" media="(min-width: 768px)">
                <img src="<?= get_template_directory_uri() ?>/images/top/content4-sp.jpg" alt="">
              </picture>
              <span class="content__item-text">理念3へ</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section works">
    <div class="line line--works is-sp">
      <svg viewBox="0 0 375 1399" class="line__svg line__svg--works-sp" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="375.483" y1="0.129801" x2="-0.419472" y2="1398.49" stroke="#F9F871"/>
      </svg>
    </div>
    
    <h2 class="inner section__title">
      <span class="section__title-en section__title-en--right">Works</span>
      <span class="section__title-ja section__title-ja--works">制作実績</span>
    </h2>
    <div class="media-text works__warp">
      <div class="pc-inner  media-text__container works__container">
        <div class="media-text__image works__image">
          <div class="swiper">
            
            <div class="swiper-wrapper">
              
              <div class="swiper-slide works-slide">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/works1-pc.jpg" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/works1-sp.jpg" alt="">
                </picture>
              </div>
              <div class="swiper-slide works-slide">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/works2-pc.jpg" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/works2-sp.jpg" alt="">
                </picture>
              </div>
              <div class="swiper-slide works-slide">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/works3-pc.jpg" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/works3-sp.jpg" alt="">
                </picture>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="media-text__contents works__contents">
          <div class="inner media-text__contents-container works__contents-container">
            <div class="media-text__title-container works__title-container">
              <h3 class="media-text__title works__title">メインタイトルが入ります。</h3>
            </div>
            <div class="media-text__text-container works__text-container">
              <p class="media-text__text works__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>

            <div class="media-text__button works__button">
              <a href="" class="button">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section overview">
    <div class="line line--works is-pc">
      <svg viewBox="0 0 1212 1212" fill="none" class="line__svg line__svg--overview-pc" xmlns="http://www.w3.org/2000/svg">
        <line x1="0.646447" y1="1211.65" x2="1211.46" y2="0.837022" stroke="#F9F871"/>
      </svg>
    </div>
    <h2 class="inner section__title">
      <span class="section__title-en section__title-en--left">Overview</span>
      <span class="section__title-ja section__title-ja--overview">企業概要</span>
    </h2>

    <div class="media-text media-text--left">
      <div class="pc-inner  media-text__container media-text__container--left">
        <div class="media-text__image overview__image">
          <picture>
            <source srcset="<?= get_template_directory_uri() ?>/images/top/overview1-pc.jpg" media="(min-width: 768px)">
            <img src="<?= get_template_directory_uri() ?>/images/top/overview1-sp.jpg" alt="">
          </picture>
        </div>
        <div class="media-text__contents">
          <div class="inner media-text__contents-container">
            <div class="media-text__title-container">
              <h3 class="media-text__title">メインタイトルが入ります。</h3>
            </div>
            <div class="media-text__text-container">
              <p class="media-text__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <div class="media-text__button">
              <a href="" class="button">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section blog">
    <h2 class="inner section__title">
      <span class="section__title-en section__title-en--right">Blog</span>
      <span class="section__title-ja section__title-ja--blog">ブログ</span>
    </h2>
    <div class="inner blog__container">
      <div class="cards blog__cards">
        <article class="card cards__card new-icon">
          <a href="" class="card__link">
            <div class="card__image">
              <img src="<?= get_template_directory_uri() ?>/images/top/blog1.jpg" alt="">
            </div>
            <div class="card__contents">
              <dl class="card__contents-container">
                <dt class="card__title">タイトルが入ります。タイトルが入ります。</dt>
                <dd class="card__description">説明文が入ります。説明文が入ります。説明文が入ります。</dd>
              </dl>
              <div class="card__info">
                <span class="card__category">カテゴリ</span>
                <time class="card__time" datetime="2021-07-20">2021.07.20</time>
              </div>
            </div>
          </a>
        </article>
        <article class="card cards__card">
          <a href="" class="card__link">
            <div class="card__image">
              <img src="<?= get_template_directory_uri() ?>/images/top/blog2.jpg" alt="">
            </div>
            <div class="card__contents">
              <dl class="card__contents-container">
                <dt class="card__title">タイトルが入ります。タイトルが入ります。</dt>
                <dd class="card__description">説明文が入ります。説明文が入ります。説明文が入ります。</dd>
              </dl>
              <div class="card__info">
                <span class="card__category">カテゴリ</span>
                <time class="card__time" datetime="2021-07-20">2021.07.20</time>
              </div>
            </div>
          </a>
        </article>
        <article class="card cards__card">
          <a href="" class="card__link">
            <div class="card__image">
              <img src="<?= get_template_directory_uri() ?>/images/top/blog3.jpg" alt="">
            </div>
            <div class="card__contents">
              <dl class="card__contents-container">
                <dt class="card__title">タイトルが入ります。タイトルが入ります。</dt>
                <dd class="card__description">説明文が入ります。説明文が入ります。説明文が入ります。</dd>
              </dl>
              <div class="card__info">
                <span class="card__category">カテゴリ</span>
                <time class="card__time" datetime="2021-07-20">2021.07.20</time>
              </div>
            </div>
          </a>
        </article>
      </div>
      <div class="blog__button">
        <a href="" class="button">詳しく見る</a>
      </div>
    </div>
  </section>

  <section class="section contact">
    <div class="inner contact__container">
      <h2 class="section__title">
        <span class="section__title-en section__title-en--left">Contact</span>
        <span class="section__title-ja section__title-ja--contact">お問い合わせ</span>
      </h2>
      <div class="contact__text-container">
        <p class="contact__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>

      <div class="contact__button">
        <a href="" class="button button--contact">お問い合わせへ</a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>