<?php get_header(); ?>

<main>
  <section class="fv">
    <div class="fv__inner">
      <div class="fv__images">
        <!-- Swiper -->
        <div class="swiper js-fv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture class="fv__img">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-1_sp.jpg" media="(max-width: 768px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-1_pc.jpg" alt="海中の写真" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="fv__img">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-2_sp.jpg" media="(max-width: 768px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-2_pc.jpg" alt="海の写真" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="fv__img">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-3_sp.jpg" media="(max-width: 768px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-3_pc.jpg" alt="砂浜の写真" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="fv__img">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-5_sp.jpg" media="(max-width: 768px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-5_pc.jpg" alt="海中にいる亀の写真" />
              </picture>
            </div>
          </div>
        </div>
        <div class="fv__title-box">
          <h2 class="fv__main-title">diving</h2>
          <p class="fv__sub-title">into the ocean</p>
        </div>
      </div>
    </div>
  </section>
  <section class="campaign top-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__title section-title">
        <h2 class="section-title__en">Campaign</h2>
        <p class="section-title__ja">キャンペーン</p>
      </div>
      <div class="campaign__items price-cards swiper js-campaign-swiper">
        <div class="swiper-wrapper price-cards__items">
          <div class="swiper-slide price-cards__item">
            <div class="price-card">
              <div class="price-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-1.jpg" alt="ライセンス講習についての写真" />
              </div>
              <div class="price-card__container">
                <div class="price-card__category">ライセンス講習</div>
                <h3 class="price-card__heading">ライセンス取得</h3>
              </div>
              <div class="price-card__prices">
                <p class="price-card__text">全部コミコミ(お一人様)</p>
                <div class="price-card__price-box">
                  <div class="price-card__price">
                    <span class="price-card__price--redline">¥56,000</span>
                  </div>
                  <div class="price-card__discount">¥46,000</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide price-cards__item">
            <div class="price-card">
              <div class="price-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-2.jpg" alt="貸し切り体験ダイビングについての写真" />
              </div>
              <div class="price-card__container">
                <div class="price-card__category">体験ダイビング</div>
                <h3 class="price-card__heading">貸切体験ダイビング</h3>
              </div>
              <div class="price-card__prices">
                <p class="price-card__text">全部コミコミ(お一人様)</p>
                <div class="price-card__price-box">
                  <div class="price-card__price">
                    <span class="price-card__price--redline">¥24,000</span>
                  </div>
                  <div class="price-card__discount">¥18,000</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide price-cards__item">
            <div class="price-card">
              <div class="price-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-3.jpg" alt="ナイトダイビングの写真" />
              </div>
              <div class="price-card__container">
                <div class="price-card__category">体験ダイビング</div>
                <h3 class="price-card__heading">ナイトダイビング</h3>
              </div>
              <div class="price-card__prices">
                <p class="price-card__text">全部コミコミ(お一人様)</p>
                <div class="price-card__price-box">
                  <div class="price-card__price">
                    <span class="price-card__price--redline">¥10,000</span>
                  </div>
                  <div class="price-card__discount">¥8,000</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide price-cards__item">
            <div class="price-card">
              <div class="price-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-4.jpg" alt="ファンダイビングの写真" />
              </div>
              <div class="price-card__container">
                <div class="price-card__category">ファンダイビング</div>
                <h3 class="price-card__heading">貸切ファンダイビング</h3>
              </div>
              <div class="price-card__prices">
                <p class="price-card__text">全部コミコミ(お一人様)</p>
                <div class="price-card__price-box">
                  <div class="price-card__price">
                    <span class="price-card__price--redline">¥20,000</span>
                  </div>
                  <div class="price-card__discount">¥16,000</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide price-cards__item">
            <div class="price-card">
              <div class="price-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-1.jpg" alt="ライセンス講習についての写真" />
              </div>
              <div class="price-card__container">
                <div class="price-card__category">ライセンス講習</div>
                <h3 class="price-card__heading">ライセンス取得</h3>
              </div>
              <div class="price-card__prices">
                <p class="price-card__text">全部コミコミ(お一人様)</p>
                <div class="price-card__price-box">
                  <div class="price-card__price">
                    <span class="price-card__price--redline">¥56,000</span>
                  </div>
                  <div class="price-card__discount">¥46,000</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide price-cards__item">
            <div class="price-card">
              <div class="price-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-2.jpg" alt="貸し切り体験ダイビングについての写真" />
              </div>
              <div class="price-card__container">
                <div class="price-card__category">体験ダイビング</div>
                <h3 class="price-card__heading">貸切体験ダイビング</h3>
              </div>
              <div class="price-card__prices">
                <p class="price-card__text">全部コミコミ(お一人様)</p>
                <div class="price-card__price-box">
                  <div class="price-card__price">
                    <span class="price-card__price--redline">¥24,000</span>
                  </div>
                  <div class="price-card__discount">¥18,000</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide price-cards__item">
            <div class="price-card">
              <div class="price-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-3.jpg" alt="ナイトダイビングの写真" />
              </div>
              <div class="price-card__container">
                <div class="price-card__category">体験ダイビング</div>
                <h3 class="price-card__heading">ナイトダイビング</h3>
              </div>
              <div class="price-card__prices">
                <p class="price-card__text">全部コミコミ(お一人様)</p>
                <div class="price-card__price-box">
                  <div class="price-card__price">
                    <span class="price-card__price--redline">¥10,000</span>
                  </div>
                  <div class="price-card__discount">¥8,000</div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide price-cards__item">
            <div class="price-card">
              <div class="price-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-4.jpg" alt="ファンダイビングの写真" />
              </div>
              <div class="price-card__container">
                <div class="price-card__category">ファンダイビング</div>
                <h3 class="price-card__heading">貸切ファンダイビング</h3>
              </div>
              <div class="price-card__prices">
                <p class="price-card__text">全部コミコミ(お一人様)</p>
                <div class="price-card__price-box">
                  <div class="price-card__price">
                    <span class="price-card__price--redline">¥20,000</span>
                  </div>
                  <div class="price-card__discount">¥16,000</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="campaign-swiper__button-box">
        <div class="campaign-swiper__button-prev"></div>
        <div class="campaign-swiper__button-next"></div>
      </div>
      <div class="campaign__button">
        <a href="archive-campaign.html" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </div>
  </section>
  <section class="about top-about">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <h2 class="section-title__en">About us</h2>
        <p class="section-title__ja">私たちについて</p>
      </div>
      <div class="about__container">
        <div class="about__img-box">
          <div class="about__img-left">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-1.jpg" alt="シーサーの写真" />
          </div>
          <div class="about__img-right">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-2.jpg" alt="熱帯魚の写真" />
          </div>
        </div>
        <div class="about__contents">
          <p class="about__catch">
            Dive into<br />
            the Ocean
          </p>
          <div class="about__text-box">
            <p class="about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="about__button">
              <a href="page-about-us.html" class="button">View more<span class="button__arrow"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="info top-info">
    <div class="info__inner inner">
      <div class="info__title section-title">
        <h2 class="section-title__en">Information</h2>
        <p class="section-title__ja">ダイビング情報</p>
      </div>
      <div class="info__contents">
        <div class="info__img animate-img js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info.jpg" alt="熱帯魚の写真" />
        </div>
        <div class="info__content">
          <h3 class="info__heading">ライセンス講習</h3>
          <p class="info__text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="info__button">
            <a href="page-information.html" class="button">View more<span class="button__arrow"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog top-blog">
    <div class="blog__inner inner">
      <div class="blog__title section-title">
        <h2 class="section-title__en section-title__en--white">Blog</h2>
        <p class="section-title__ja section-title__ja--white">ブログ</p>
      </div>
      <div class="blog__items blog-cards">
        <a href="#" class="blog-cards__item blog-card">
          <div class="blog-card__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-1.jpg" alt="ブログの写真1" />
          </div>
          <div class="blog-card__container">
            <div class="blog-card__meta">
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <div class="blog-card__title">ライセンス取得</div>
            </div>
            <p class="blog-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </a>
        <a href="#" class="blog-cards__item blog-card">
          <div class="blog-card__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-2.jpg" alt="ブログの写真2" />
          </div>
          <div class="blog-card__container">
            <div class="blog-card__meta">
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <div class="blog-card__title">ウミガメと泳ぐ</div>
            </div>
            <p class="blog-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </a>
        <a href="#" class="blog-cards__item blog-card">
          <div class="blog-card__img">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-3.jpg" alt="ブログの写真3" />
          </div>
          <div class="blog-card__container">
            <div class="blog-card__meta">
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <div class="blog-card__title">カクレクマノミ</div>
            </div>
            <p class="blog-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </a>
      </div>
      <div class="blog__button">
        <a href="home.html" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </div>
  </section>

  <section class="voice top-voice">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <h2 class="section-title__en">Voice</h2>
        <p class="section-title__ja">お客様の声</p>
      </div>
      <div class="voice__items voice-cards">
        <a class="voice-cards__item voice-card">
          <div class="voice-card__upper">
            <div class="voice-card__title-box">
              <div class="voice-card__meta">
                <div class="voice-card__age">20代(女性)</div>
                <div class="voice-card__category">ライセンス講習</div>
              </div>
              <div class="voice-card__title">
                ここにタイトルが入ります。ここにタイトル
              </div>
            </div>
            <div class="voice-card__img animate-img js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-1.jpg" alt="女の人の写真" />
            </div>
          </div>
          <div class="voice-card__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。
          </div>
        </a>
        <a class="voice-cards__item voice-card">
          <div class="voice-card__upper">
            <div class="voice-card__title-box">
              <div class="voice-card__meta">
                <div class="voice-card__age">20代(男性)</div>
                <div class="voice-card__category">ファンダイビング</div>
              </div>
              <div class="voice-card__title">
                ここにタイトルが入ります。ここにタイトル
              </div>
            </div>
            <div class="voice-card__img animate-img js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-2.jpg" alt="男の人の写真" />
            </div>
          </div>
          <div class="voice-card__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。
          </div>
        </a>
      </div>
      <div class="voice__button">
        <a href="archive-voice.html" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </div>
  </section>

  <section class="price top-price">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <h2 class="section-title__en">Price</h2>
        <p class="section-title__ja">料金一覧</p>
      </div>
      <div class="price__sp-img u-mobile animate-img js-colorbox">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_sp.jpg" alt="サンゴ礁の写真" />
      </div>
      <div class="price__container">
        <div class="price__contents">
          <div class="price__content price-table">
            <h3 class="price-table__heading">ライセンス講習</h3>
            <dl class="price-table__content">
              <dt class="price-table__course">
                オープンウォーターダイバーコース
              </dt>
              <dd class="price-table__price">¥50,000</dd>
              <dt class="price-table__course">
                アドバンスドオープンウォーターコース
              </dt>
              <dd class="price-table__price">¥60,000</dd>
              <dt class="price-table__course">レスキュー＋EFRコース</dt>
              <dd class="price-table__price">¥70,000</dd>
            </dl>
          </div>
          <div class="price__content price-table">
            <h3 class="price-table__heading">体験ダイビング</h3>
            <dl class="price-table__content">
              <dt class="price-table__course">
                ビーチ体験ダイビング(半日)
              </dt>
              <dd class="price-table__price">¥7,000</dd>
              <dt class="price-table__course">ビーチ体験ダイビング(1日)</dt>
              <dd class="price-table__price">¥14,000</dd>
              <dt class="price-table__course">
                ボート体験ダイビング(半日)
              </dt>
              <dd class="price-table__price">¥10,000</dd>
              <dt class="price-table__course">ボート体験ダイビング(1日)</dt>
              <dd class="price-table__price">¥18,000</dd>
            </dl>
          </div>
          <div class="price__content price-table">
            <h3 class="price-table__heading">ファンダイビング</h3>
            <dl class="price-table__content">
              <dt class="price-table__course">ビーチダイビング(2ダイブ)</dt>
              <dd class="price-table__price">¥14,000</dd>
              <dt class="price-table__course">ボートダイビング(2ダイブ)</dt>
              <dd class="price-table__price">¥18,000</dd>
              <dt class="price-table__course">
                スペシャルダイビング(2ダイブ)
              </dt>
              <dd class="price-table__price">¥24,000</dd>
              <dt class="price-table__course">ナイトダイビング(1ダイブ)</dt>
              <dd class="price-table__price">¥10,000</dd>
            </dl>
          </div>
          <div class="price__content price-table">
            <h3 class="price-table__heading">スペシャルダイビング</h3>
            <dl class="price-table__content">
              <dt class="price-table__course">貸切ダイビング(2ダイブ)</dt>
              <dd class="price-table__price">¥24,000</dd>
              <dt class="price-table__course">1日ダイビング(3ダイブ)</dt>
              <dd class="price-table__price">¥32,000</dd>
            </dl>
          </div>
        </div>
        <div class="price__pc-img u-desktop animate-img js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_pc.jpg" alt="" />
        </div>
      </div>
      <div class="price__button">
        <a href="page-price.html" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>