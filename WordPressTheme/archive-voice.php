<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Voice</h2>
    </div>
  </div>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
  <section class="archive-voice lower-bg archive-voice-layout">
    <div class="archive-voice__inner inner">
      <div class="archive-voice__tab tab">
        <!-- タブ部分 -->
        <div class="tab__buttons">
          <button class="tab__button is-active js-tab">ALL</button>
          <button class="tab__button js-tab">ライセンス講習</button>
          <button class="tab__button js-tab">ファンダイビング</button>
          <button class="tab__button js-tab">体験ダイビング</button>
        </div>
        <!-- 全てのコンテンツ -->
        <div class="tab__wrapper is-active js-content">
          <ul class="voice-cards js-list">
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">20代(女性)</div>
                    <div class="voice-card__category">ライセンス講習</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-1.jpg" alt="女性の写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
            <!-- <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">20代(男性)</div>
                    <div class="voice-card__category">ファンダイビング</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-2.jpg" alt="男性の写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">30代(女性)</div>
                    <div class="voice-card__category">体験ダイビング</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-3.jpg" alt="女性2人の写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">30代(女性)</div>
                    <div class="voice-card__category">体験ダイビング</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-4.jpg" alt="女性の写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">30代(カップル)</div>
                    <div class="voice-card__category">ファンダイビング</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-5.jpg" alt="カップルの写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">20代(女性)</div>
                    <div class="voice-card__category">ライセンス講習</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-6.jpg" alt="女の人の写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li> -->
          </ul>
        </div>
        <!--  ライセンス講習のコンテンツ -->
        <div class="tab__wrapper js-content">
          <ul class="voice-cards js-list">
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">20代(女性)</div>
                    <div class="voice-card__category">ライセンス講習</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-1.jpg" alt="女性の写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">20代(女性)</div>
                    <div class="voice-card__category">ライセンス講習</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-6.jpg" alt="女の人の写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
          </ul>
        </div>
        <!--  ファンダイビングのコンテンツ -->
        <div class="tab__wrapper  js-content">
          <ul class="voice-cards js-list">
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">20代(男性)</div>
                    <div class="voice-card__category">ファンダイビング</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-2.jpg" alt="男性の写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">30代(カップル)</div>
                    <div class="voice-card__category">ファンダイビング</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-5.jpg" alt="カップルの写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
          </ul>
        </div>
        <!--  体験ダイビングのコンテンツ -->
        <div class="tab__wrapper js-content">
          <ul class="voice-cards js-list">
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">30代(女性)</div>
                    <div class="voice-card__category">体験ダイビング</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-3.jpg" alt="女性2人の写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
            <li class="vice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age">30代(女性)</div>
                    <div class="voice-card__category">体験ダイビング</div>
                  </div>
                  <h3 class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </h3>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <img src="./assets/images/common/voice-4.jpg" alt="女性の写真" />
                </div>
              </div>
              <div class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                ここにテキストが入ります。ここにテキストが入ります。
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- page-navi-->
      <div class="archive-voice__pagenavi">
        <div class="wp-pagenavi">
          <a class="previouspostslink" rel="prev" href="#"></a>
          <span class="current">1</span>
          <a class="page smaller" href="#">2</a>
          <a class="page smaller" href="#">3</a>
          <a class="page smaller" href="#">4</a>
          <a class="page smaller u-desktop" href="#">5</a>
          <a class="page smaller u-desktop" href="#">6</a>
          <a class="nextpostslink" rel="next" href="#"></a>
        </div>
      </div>
      <!-- page-navi-->
    </div>
  </section>
  <?php get_footer(); ?>