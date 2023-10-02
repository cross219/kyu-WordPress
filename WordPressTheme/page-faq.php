<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">FAQ</h2>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>


  <section class="page-faq lower-bg page-faq-layout">
    <div class="page-faq__inner inner">
      <ul class="page-faq__items">
        <!-- <li class="page-faq__item faq">

          <div class="faq__summary js-faq">
            ここに質問が入ります。<span class="faq__icon"></span>
          </div>
          <p class="faq__content">
            ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
          </p>
        </li> -->
        <?php
        // ページ内で使用する繰り返しフィールドのキーを指定します
        $faq_q_key = 'faq-q';
        $faq_a_key = 'faq-a';

        // 繰り返しフィールドのデータを取得
        // $faq_data = get_field('faq'); // 'faq_field_group' はFAQ用のカスタムフィールドグループの名前です
        $faq_data =  SCF::get('faq'); // 'faq_field_group' はFAQ用のカスタムフィールドグループの名前です

        if ($faq_data) {
          foreach ($faq_data as $faq) {
            // 質問（faq-q）を取得
            $question = $faq[$faq_q_key];

            // 回答（faq-a）を取得
            $answer = $faq[$faq_a_key];
        ?>

            <li class="page-faq__item faq">
              <div class="faq__summary js-faq">
                <?php echo esc_html($question); ?><span class="faq__icon"></span>
              </div>
              <p class="faq__content">
                <?php echo esc_html($answer); ?>
              </p>
            </li>

        <?php
          }
        }
        ?>

      </ul>
    </div>
  </section>





  <?php get_footer(); ?>