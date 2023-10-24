<div class="aside__items">
  <div class="aside__item">
    <div class="aside__article aside-article">
      <div class="aside-article__title aside-title">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aside-icon.png" class="aside-title__icon" alt=""></img>
        <h2 class="aside-title__text">人気記事</h2>
      </div>
      <div class="aside-article__items">
        <?php
        // 必須 ここから
        setPostViews(get_the_ID());
        // 必須 ここまで

        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,

          // 必須 ここから
          'orderby' => 'meta_value_num',
          'meta_key' => 'post_views_count'
          // 必須 ここまで

        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="single.html" class="aside-article__item">
              <figure class="aside-article__img">
                <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                <?php endif; ?>
              </figure>
              <div class="aside-article__body">
                <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                <h3 class="aside-article__title"><?php the_title(); ?></h3>
              </div>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  <div class="aside__item">
    <div class="aside__voice aside-voice">
      <div class="aside-voice__title aside-title">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aside-icon.png" class="aside-title__icon" alt=""></img>
        <h2 class="aside-title__text">口コミ</h2>
      </div>
      <div class="aside-voice__items">
        <?php $recent_query = new WP_Query(
          array(
            'post_type' => 'voice',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
          )
        );
        ?>
        <?php if ($recent_query->have_posts()) : ?>
          <?php while ($recent_query->have_posts()) : ?>
            <?php $recent_query->the_post(); ?>
            <div class="aside-voice__item">
              <?php if (get_the_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
              <?php endif; ?>
              <p class="aside-voice__age">
                <?php $text = get_field('age');
                if ($text) {
                  echo $text;
                } ?></p>
              <h3 class="aside-voice__title"><?php the_title(); ?></h3>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="aside-voice__button">
        <a href="#" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </div>
  </div>
  <div class="aside__item">
    <div class="aside__campaign aside-campaign">
      <div class="aside-campaign__title aside-title">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aside-icon.png" class="aside-title__icon" alt=""></img>
        <h2 class="aside-title__text">キャンペーン</h2>
      </div>
      <div class="aside-campaign__items">
        <?php $recent_query = new WP_Query(
          array(
            'post_type' => 'campaign',
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC',
          )
        );
        ?>
        <?php if ($recent_query->have_posts()) : ?>
          <?php while ($recent_query->have_posts()) : ?>
            <?php $recent_query->the_post(); ?>
            <div class="aside-campaign__item price-card">
              <div class="price-card__img price-card__img--blog">
                <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                <?php endif; ?>
              </div>
              <div class="price-card__container price-card__container--blog">
                <h3 class="price-card__heading ">
                  <?php the_title(); ?>
                </h3>
              </div>
              <div class="price-card__prices price-card__prices--blog">
                <p class="price-card__text price-card__text--blog">全部コミコミ(お一人様)</p>
                <div class="price-card__price-box price-card__price-box--blog">
                  <div class="price-card__price price-card__price--blog">
                    <span class="price-card__price--redline"><?php $text = get_field('redline');
                                                              if ($text) {
                                                                echo $text;
                                                              } ?></span>
                  </div>
                  <div class="price-card__discount price-card__discount--blog"><?php $text = get_field('discount');
                                                                                if ($text) {
                                                                                  echo $text;
                                                                                } ?></div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>


      </div>
      <div class="aside-campaign__button">
        <a href="#" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </div>
  </div>
  <div class="aside__item">
    <div class="aside__archive aside-archive">
      <div class="aside-archive__title aside-title">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aside-icon.png" class="aside-title__icon" alt=""></img>
        <h2 class="aside-title__text">アーカイブ</h2>
      </div>
      <ul class="aside__archive--container">
        <?php
        /*== 解説（1） 参照 ==*/
        // 月別アーカイブリストを取得する
        $monthly_archives = wp_get_archives(
          $args = array(
            'type' => 'monthly',
            'show_post_count' => true,
            'before' => '',
            'after' => ',',
            'echo' => 0,
          )
        );
        $monthly_archives = explode(',', $monthly_archives); //配列化
        array_pop($monthly_archives); //末尾の空白要素を削除

        // 年別アーカイブリストを取得する
        $yearly_archives = wp_get_archives(
          $args = array(
            'type' => 'yearly',
            'format' => 'custom',
            'before' => '',
            'after' => ',',
            'echo' => 0,
          )
        );
        $yearly_archives = explode(',', $yearly_archives); //配列化
        array_pop($yearly_archives); //末尾の空白要素を削除

        /*== 解説（2） 参照 ==*/
        $this_year = (string)idate('Y'); //現在の年を、4桁の文字列で取得

        // HTMLとして出力するコードの記述部分
        // ここから
        $out = '<ul class="aside__archive--container">';

        foreach ($yearly_archives as $year) {
          $the_year = substr($year, -8, 4); // 「年」を表す部分のみ抽出する

          if ($the_year === $this_year) : // 今年だったら
            $out .= '<li class="toggle-list__year js-toggle open">' . $the_year;
            $out .= '<ul class="month-archive-list toggle__content">';
          else : // それ以外の年の場合
            $out .= '<li class="toggle-list__year js-toggle ">' . $the_year;
            $out .= '<ul class="month-archive-list toggle__content">';
          endif;

          /*== 解説（3） 参照 ==*/
          foreach ($monthly_archives as $month) {
            //月毎アーカイブの文字列中に、ターゲットとなる年が含まれているか
            $pos = strpos($month, $the_year);

            // 含まれている限り、li要素を出力
            if ($pos !== false) : // 該当する文字列が含まれているときは、その位置が返ってくるので、!==falseという判定文を使用
              $out .= $month;
            endif;
          }
          $out .= '</ul>'; // 閉じる <ul class="month-archive-list">
        }
        $out .= '</li>'; // 閉じる <li class="year"> （ここ落としてしまっていたので追記しました！: 2020/03/01）
        $out .= '</ul>'; // 閉じる <ul class="archive-list">
        // ここまで

        // HTMLの出力
        echo $out;
        ?>
        <!-- <details class="toggle-list" open>
          <summary class="toggle-list__summary">
            <ul>
            <?php
            wp_get_archives(array(
              'type' => 'monthly',
              'format' => 'html',
              'before' => '<span class="toggle-list__content">',
              'after' => '</span>',
            ));
            ?> 
          </ul> 
          </summary>
          <ul>
            <?php
            wp_get_archives(array(
              'type' => 'monthly',
              'format' => 'html',
              'before' => '<span class="toggle-list__content">',
              'after' => '</span>',
            ));
            ?>
          </ul>
        </details>  -->
        <!-- <details class="toggle-list">
          <summary class="toggle-list__summary">2022</summary>
          <a href="#" class="toggle-list__content">3月</a>
          <a href="#" class="toggle-list__content">2月</a>
          <a href="#" class="toggle-list__content">1月</a>
        </details> -->

        <!-- <li class="toggle-list__year open">2018
          <ul class="month-archive-list">
            <li><a href="https://cosybench.local/2018/02/" class="toggle-list__month">2018年2月</a> (1)</li>
            <li><a href="https://cosybench.local/2018/01/" class="toggle-list__month">2018年1月</a> (2)</li>
          </ul>
        </li> -->
        <!-- 以下、年ごとに同様 -->
      </ul>
    </div>
  </div>
</div>
</div>