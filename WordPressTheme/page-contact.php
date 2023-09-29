<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Contact</h2>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
  

  <section class="page-contact lower-bg page-contact-layout">
    <div class="page-contact__inner inner">
      <div class="page-contact__error js-error">
        <p>
          ※必須項目が入力されていません。<br class="u-mobile" />入力してください。
        </p>
      </div>
      <div class="page-contact__content form">
        <form action="page-thanks.html" method="post" id="form">
          <dl class="form__item">
            <dt>お名前 <span>必須</span></dt>
            <dd>
              <input type="text" name="name" placeholder="沖縄 太郎" value="" class="required" />
            </dd>
          </dl>
          <dl class="form__item">
            <dt>メールアドレス <span>必須</span></dt>
            <dd>
              <input type="email" name="mail_address" placeholder="aaa000@ggmail.com" value="" class="required" />
            </dd>
          </dl>
          <dl class="form__item">
            <dt>
              電話番号
              <span>必須</span>
            </dt>
            <dd>
              <input type="tel" name="tel" placeholder="000-0000-0000" value="" class="required" />
            </dd>
          </dl>
          <dl class="form__item" class="form__item">
            <dt>お問い合わせ項目 <span>必須</span></dt>
            <dd class="form__radio form__radio--column">
              <label><input type="radio" name="target" value="ラジオボタン" id="name" checked class="required" /><span>ダイビング講習について</span></label>
              <label><input type="radio" name="target" value="ラジオボタン2" /><span>ファンデイビングについて</span></label>
              <label><input type="radio" name="target" value="ラジオボタン2" /><span>体験ダイビングについて</span></label>
            </dd>
          </dl>
          <dl class="form__item">
            <dt>キャンペーン</dt>
            <dd>
              <select name="campaign">
                <option value="">キャンペーン内容を選択</option>
                <option value="option_1">ライセンス取得</option>
                <option value="option_2">貸切体験ダイビング</option>
                <option value="option_3">ナイトダイビング</option>
                <option value="option_4">貸切ナイトダイビング</option>
              </select>
            </dd>
          </dl>
          <dl class="form__item">
            <dt>お問い合わせ内容 <span>必須</span></dt>
            <dd>
              <textarea name="contents" class="required"></textarea>
            </dd>
          </dl>
          <div class="form__checkbox">
            <label><input type="checkbox" name="check" value="チェックボックス1" class="required js-submit-check" /><span>個人情報の取り扱いについて同意のうえ<br class="u-mobile" />送信します。</span></label>
          </div>
          <div class="form__btn">
            <div class="button">
              <input type="submit" value="Send" disabled />
              <div class="button__arrow"></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>