<?php
 /* Template Name: trainers
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トレーナー紹介 | ジムテンプレート1</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper animsition">
    <div class="pageBg">
      <span class="lines"> </span>
      <span class="txt">RivRound<br />Fitness</span>
    </div>
    <!-- /.pageBg -->
    <main id="main-contents" class="c-trainers">
      <?php get_template_part('includes/c-header'); ?>     
      <!-- /.header -->
      <section class="c-topview">
        <div class="c-topview__img">
          <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/trainer_2.jpg" alt="">
          <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/trainer_2.jpg" alt="">
        </div>
      </section>
      <!-- /.c-topview -->
      <section class="c-features">
        <div class="c-container">
          <h2 class="c-title">
            <span class="en">trainer</span>
            <span class="ja">トレーナー紹介</span>
          </h2>
          <div class="c-features__desc">
            <h3 class="c-txt-md">知識・技術・経験豊富なトレーナー</h3>
            <p class="c-txt-sm">お客様ひとりひとりのレベルや目的、体質に合わせたパーソナルトレーニングプログラムを、マンツーマン体制で、運動未経験者からトレーニング経験者まで丁寧にサポートします。
            </p>
          </div>
        </div>
      </section>
      <!-- /.c-features -->
      <section class="c-staff">
        <div class="c-container">
          <ul>
            <li class="c-staff__item">
              <h3 class="tit">
                <p class="ja">代表</p>
                <p class="en">Owner</p>
              </h3>
              <div class="c-staff__flex">
                <div class="c-staff__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/trainer.jpg" alt="">
                </div>
                <div class="c-staff__desc">
                  <h3 class="c-staff__name">
                    <p class="ja">利部 翔太</p>
                    <p class="en">SHOTA RIBU</p>
                  </h3>
                  <div class="c-staff__text">
                    <p class="c-txt-sm">
                      幼少の頃から水泳を始め、ジュニアからシニアまで指導していく中で身体のことについて関心を持ち、より詳しく知りたいと強く思ったことをきっかけにフィットネス業界へ。前職ではパーソナルトレーナーとして、幅広い世代の方に対してトレーニング指導経験を積む。RivRoundでは今までの経験を活かし、より多くの方に運動の楽しさや身体が変わる喜びを提供出来るよう努めます。
                    </p>
                  </div>
                  <div class="c-staff__ls">
                    <h4>資格</h4>
                    <p class="c-txt-sm">NSCA</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="more-btn item">
            <a href=" <?php echo esc_url( home_url('/faq')); ?>" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">よくあるご質問</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </section>
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>
    <!-- /.footer -->
    <!-- /.mobile-menu -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <!-- <script src="/scripts/main.js"></script> -->
</body>

</html>