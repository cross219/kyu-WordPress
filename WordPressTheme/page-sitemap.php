<?php get_header(); ?>

<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Site MAP</h2>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
  

  <div class="page-sitemap lower-bg page-sitemap-layout">
    <div class="page-sitemap__inner inner">
      <nav class="page-sitemap__container">
        <ul class="page-sitemap__items">
          <li class="page-sitemap__item page-sitemap__item--section">
            <a href="archive-campaign.html">キャンペーン</a>
          </li>
          <li class="page-sitemap__item">
            <a href="archive-campaign.html">ライセンス取得</a>
          </li>
          <li class="page-sitemap__item">
            <a href="archive-campaign.html">貸切体験ダイビング</a>
          </li>
          <li class="page-sitemap__item">
            <a href="archive-campaign.html">ナイトダイビング</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin-sp page-sitemap__item--margin-pc">
            <a href="page-about-us.html">私たちについて</a>
          </li>
        </ul>

        <ul class="page-sitemap__items">
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin-sp">
            <a href="page-information.html">ダイビング情報</a>
          </li>
          <li class="page-sitemap__item">
            <a href="page-information.html">ライセンス講習</a>
          </li>
          <li class="page-sitemap__item">
            <a href="page-information.html">体験ダイビング</a>
          </li>
          <li class="page-sitemap__item">
            <a href="page-information.html">ファンダイビング</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin-sp page-sitemap__item--margin-pc">
            <a href="home.html">ブログ</a>
          </li>
        </ul>

        <ul class="page-sitemap__items page-sitemap__items--right">
          <li class="page-sitemap__item page-sitemap__item--section">
            <a href="archive-voice.html">お客様の声</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin-sp page-sitemap__item--margin-pc">
            <a href="page-price.html">料金一覧</a>
          </li>
          <li class="page-sitemap__item">
            <a href="page-price.html">ライセンス講習</a>
          </li>
          <li class="page-sitemap__item">
            <a href="page-price.html">体験ダイビング</a>
          </li>
          <li class="page-sitemap__item">
            <a href="page-price.html">ファンダイビング</a>
          </li>
        </ul>
        <ul class="page-sitemap__items page-sitemap__items--right">
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin--sp">
            <a href="page-faq.html">よくある質問</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin--sp page-sitemap__item--margin-pc">
            <a href="page-privacypolicy.html">プライバシー<br class="u-mobile" />
              ポリシー</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin--sp page-sitemap__item--margin-pc">
            <a href="page-terms-of-service.html">利用規約</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin--sp page-sitemap__item--margin-pc">
            <a href="page-contact.html">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <?php get_footer(); ?>