<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?> 
</head>

<body>
  <header class="header js-header">
    <div class="header__inner">
      <h1 class="header__logo logo">
        <a href="index.html" class="logo__link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="CodeUpsのロゴ" />
        </a>
      </h1>
      <button class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="archive-campaign.html" class="pc-nav__en">Campaign
              <span class="pc-nav__ja">キャンペーン</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-about-us.html" class="pc-nav__en">About us
              <span class="pc-nav__ja">私たちについて</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-information.html" class="pc-nav__en">Information
              <span class="pc-nav__ja">ダイビング情報</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="home.html" class="pc-nav__en">Blog
              <span class="pc-nav__ja">ブログ</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="archive-voice.html" class="pc-nav__en">Voice
              <span class="pc-nav__ja">お客様の声</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-price.html" class="pc-nav__en">Price
              <span class="pc-nav__ja">料金一覧</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-faq.html" class="pc-nav__en">FAQ
              <span class="pc-nav__ja">よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="page-contact.html" class="pc-nav__en">Contact
              <span class="pc-nav__ja">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="header__nav sp-nav js-drawer-menu">
    <div class="sp-nav__inner inner">
      <nav class="sp-nav__items drawer-menu js-drawer-menu">
        <ul class="drawer-menu__items">
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="archive-campaign.html">キャンペーン</a>
          </li>
          <li class="drawer-menu__item">
            <a href="archive-campaign.html">ライセンス取得</a>
          </li>
          <li class="drawer-menu__item">
            <a href="archive-campaign.html">貸切体験ダイビング</a>
          </li>
          <li class="drawer-menu__item">
            <a href="archive-campaign.html">ナイトダイビング</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="page-about-us.html">私たちについて</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="page-information.html">ダイビング情報</a>
          </li>
          <li class="drawer-menu__item">
            <a href="page-information.html?tabId=tab1">ライセンス講習</a>
          </li>
          <li class="drawer-menu__item">
            <a href="page-information.html?tabId=tab3">体験ダイビング</a>
          </li>
          <li class="drawer-menu__item">
            <a href="page-information.html?tabId=tab2">ファンダイビング</a>
          </li>
          <li class="drawer-menu__item site-nav__item--section">
            <a href="home.html">ブログ</a>
          </li>
        </ul>
        <ul class="drawer-menu__items">
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="archive-voice.html">お客様の声</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="page-price.html">料金一覧</a>
          </li>
          <li class="drawer-menu__item">
            <a href="page-price.html">ライセンス講習</a>
          </li>
          <li class="drawer-menu__item">
            <a href="page-price.html">体験ダイビング</a>
          </li>
          <li class="drawer-menu__item">
            <a href="page-price.html">ファンダイビング</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="page-faq.html">よくある質問</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="page-privacypolicy.html">プライバシー<br class="u-mobile" />
              ポリシー</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="page-terms-of-service.html">利用規約</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="page-terms-of-service.html">サイトマップ</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="page-contact.html">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>