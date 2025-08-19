<?php
/* Template Name: Homepage
*
*/


get_header();
?>
<section class="banner-section">
  <div class="container">
    <div class="banner-content">
      <div class="banner-content-left">
        <h1 class="banner-title">
          <?php
          $hero_section = get_field('hero_section');
          $hero_heading = $hero_section['hero_heading'] ?? 'Value absent';
          echo esc_html($hero_heading);
          ?>
          <sup>™</sup>
        </h1>
        <p class="banner-sub-title">
          <?php
          $hero_subheading = $hero_section['hero_subheading'] ?? 'Value absent';
          $hero_subheadingbold = $hero_section['hero_subheadingbold'] ?? 'Value absent';
          echo esc_html($hero_subheading) . ' <strong>' . esc_html($hero_subheadingbold) . '</strong>';
          ?>
        </p>
        <div class="group-cta">
          <?php
          $cta1copy = $hero_section['cta1copy'] ?? 'Value absent';
          $cta1url = $hero_section['cta_1_url'] ?? '#';
          ?>
          <a class="cta" target="_self" href="<?php echo esc_url($cta1url); ?>"><?php echo esc_html($cta1copy); ?></a>
          <?php
          $cta2copy = $hero_section['cta_2_copy'] ?? 'Value absent';
          $cta2url = $hero_section['cta_2_url'] ?? '#';
          ?>
          <a class="cta" target="_self" href="<?php echo esc_url($cta2url); ?>"><?php echo esc_html($cta2copy); ?></a>
        </div>
      </div>
      <div class="banner-content-right">
        <div class="banner-image-wrapper">
          <button id="openPopup" class="play-button" type="button">
            <svg width="28" height="28" role="img" aria-label="play-fill">
              <use href="/wp-content/themes/clever/assets/images/sprites.svg#play-fill"></use>
            </svg>
          </button>
          <?php
          $hero_image_url = $hero_section['hero_banner_image'] ?? '';
          if (!empty($hero_image_url)) {
            echo '<img fetchpriority="high" class="illustration" src="' . esc_url($hero_image_url) . '" width="752" height="640" loading="lazy" alt="hero banner image" />';
          } else {
            echo '<div>Image not available</div>';
          }
          ?>

        </div>
      </div>
    </div>
  </div>
</section>


<?php echo do_shortcode('[logo_slider speed="20s" gap="50px" width="100px"]'); ?>


<section>
  <div class="container">

    <h2 class="products-section-header">Customers don’t have campaigns, they have conversations.
    </h2>
    <p class="product-section-para">
      A majority of customers want personalized experiences from companies. Absolutely none of them want to be sold to. That’s why the move from totally-siloed campaigns to fully-orchestrated journeys is so darn important. Here’s how we’re helping organizations on their journey.
    </p>
    <!-- Sticky Navigation Menu -->
    <div class="sticky-navbar" id="navbar">
      <ul>
        <li><a href="#section1"><?php echo acf_text('tab_title_1'); ?></a></li>
        <li><a href="#section2"><?php echo acf_text('tab_title_2'); ?></a></li>
        <li><a href="#section3"><?php echo acf_text('tab_title_3'); ?></a></li>
        <li><a href="#section4"><?php echo acf_text('tab_title_4'); ?></a></li>
        <li><a href="#section5"><?php echo acf_text('tab_title_5'); ?></a></li>
        <li><a href="#section6"><?php echo acf_text('tab_title_6'); ?></a></li>
      </ul>
    </div>
    <!-- Content Sections -->
    <div id="section1" class="section">
      <div class="sticky-txtimg-box">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p><svg width="24" height="24" role="img" aria-label="stars-01">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#stars-01"></use>
              </svg> <strong><?php echo acf_text('tab2_subheading'); ?></strong></p>
            <h3><?php echo acf_text('tab2_heading'); ?></h3>
            <p><?php echo acf_text('tab2_excerpt'); ?></p>
            <a class="round-cta" href="<?php echo acf_url('tab2_cta_url'); ?>" title="Braze Data Platform"><?php echo acf_text('tab2_cta_copy'); ?></a>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <?php $tab2_img = acf_img_src('tab2_image', $fallback_img); if ($tab2_img) { echo '<img src="'.$tab2_img.'" alt="Tab 2 Image">'; } ?>
        </div>
      </div>
    </div>
    <div id="section2" class="section">
      <div class="sticky-txtimg-box row-reverse">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p><svg width="24" height="24" role="img" aria-label="stars-01">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#stars-01"></use>
              </svg> <strong><?php echo acf_text('tab3_subheading'); ?></strong></p>
            <h3><?php echo acf_text('tab3_heading'); ?></h3>
            <p><?php echo acf_text('tab3_excerpt'); ?></p>
            <a class="round-cta" href="<?php echo acf_url('tab3_cta_url'); ?>" title="BrazeAI"><?php echo acf_text('tab3_cta_copy'); ?></a>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <?php $tab3_img = acf_img_src('tab3_image', $fallback_img); if ($tab3_img) { echo '<img src="'.$tab3_img.'" alt="Tab 3 Image">'; } ?>
        </div>
      </div>
    </div>
    <div id="section3" class="section">
      <div class="sticky-txtimg-box">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p class="light-purple"><svg width="24" height="24" role="img" aria-label="zap">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#zap"></use>
              </svg> <strong><?php echo acf_text('tab4_subheading'); ?></strong></p>
            <h3><?php echo acf_text('tab4_heading'); ?></h3>
            <p><?php echo acf_text('tab4_excerpt'); ?></p>
            <a class="round-cta" href="<?php echo acf_url('tab4_cta_url'); ?>" title="Journey Orchestration"><?php echo acf_text('tab4_cta_copy'); ?></a>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <?php $tab4_img = acf_img_src('tab4_image', $fallback_img); if ($tab4_img) { echo '<img src="'.$tab4_img.'" alt="Tab 4 Image">'; } ?>
        </div>
      </div>
    </div>
    <div id="section4" class="section">
      <div class="sticky-txtimg-box row-reverse">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p class="txt-red"><svg width="24" height="24" role="img" aria-label="chart-breakout-circle">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#chart-breakout-circle"></use>
              </svg> <strong><?php echo acf_text('tab5_subheading'); ?></strong></p>
            <h3><?php echo acf_text('tab5_heading'); ?></h3>
            <p><?php echo acf_text('tab5_excerpt'); ?></p>
            <a class="round-cta" href="<?php echo acf_url('tab5_cta_url'); ?>" title="Cross-Channel Messaging"><?php echo acf_text('tab5_cta_copy'); ?></a>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <?php $tab5_img = acf_img_src('tab5_image', $fallback_img); if ($tab5_img) { echo '<img src="'.$tab5_img.'" alt="Tab 5 Image">'; } ?>
        </div>
      </div>
    </div>

    <div id="section5" class="section">
      <div class="sticky-txtimg-box">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p class="txt-orange"><svg width="24" height="24" role="img" aria-label="zap">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#zap"></use>
              </svg> <strong><?php echo acf_text('tab6_subheading'); ?></strong></p>
            <h3><?php echo acf_text('tab6_heading'); ?></h3>
            <p><?php echo acf_text('tab6_excerpt'); ?></p>
            <a class="round-cta" href="<?php echo acf_url('tab6_cta_url'); ?>" title="How Braze Works"><?php echo acf_text('tab6_cta_copy'); ?></a>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <?php $tab6_img = acf_img_src('tab6_image', $fallback_img); if ($tab6_img) { echo '<img src="'.$tab6_img.'" alt="Tab 6 Image">'; } ?>
        </div>
      </div>
    </div>

    <div id="section6" class="section">
      <div class="sticky-txtimg-box row-reverse">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p class="txt-gray"><svg width="24" height="24" role="img" aria-label="arrow-narrow-up-right">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#arrow-narrow-up-right"></use>
              </svg> <strong><?php echo acf_text('tab7_subheading'); ?></strong></p>
            <h3><?php echo acf_text('tab7_heading'); ?></h3>
            <p><?php echo acf_text('tab7_excerpt'); ?></p>
            <a class="round-cta" href="<?php echo acf_url('tab7_cta_url'); ?>" title="Scale without Fail"><?php echo acf_text('tab7_cta_copy'); ?></a>
            <div class="cert-block">
              <!-- <img width="150" height="96" src="/wp-content/themes/clever/assets/images/hipaa.svg" alt="HIPAA COMPLIANCE" loading="lazy">
              <img width="95" height="96" src="/wp-content/themes/clever/assets/images/iso.webp" alt="iso" loading="lazy">
              <img width="104" height="96" src="/wp-content/themes/clever/assets/images/aicpa.webp" alt="AICPA" loading="lazy"> -->
              <?php $cert1 = acf_img_src('certification1', $fallback_img); if ($cert1) { echo '<img width="150" height="96" src="'.$cert1.'" alt="Certification 1">'; } ?>
              <?php $cert2 = acf_img_src('certification2', $fallback_img); if ($cert2) { echo '<img width="95" height="96" src="'.$cert2.'" alt="Certification 2">'; } ?>
              <?php $cert3 = acf_img_src('certification3', $fallback_img); if ($cert3) { echo '<img width="104" height="96" src="'.$cert3.'" alt="Certification 3">'; } ?>
            </div>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <img width="592" height="556" class="img-responsive" src="/wp-content/themes/clever/assets/images/braze.webp" alt="Start building stronger first-party relationships" loading="lazy">
        </div>
      </div>
    </div>

  </div>
</section>

<section class="stories">
  <div class="container">
    <div class="head">
      <div class="intro">
        <h2 class="title">
          <?php
          $ss_heading = get_field('ss_heading') ?: 'Empty value';
          echo wp_kses_post($ss_heading);
          ?>
        </h2>
        <p class="sub">
          <?php
          $ss_sub_heading = get_field('ss_sub_heading') ?: 'Empty value';
          echo esc_html($ss_sub_heading);
          ?>
        </p>
      </div>
      <?php
      $ss_cta_copy = get_field('ss_cta_copy') ?: 'Empty value';
      $ss_cta_url  = get_field('ss_cta_url') ?: '#';
      ?>
      <a class="cta" href="<?php echo esc_url($ss_cta_url); ?>"><?php echo esc_html($ss_cta_copy); ?></a>
    </div>

    <div class="tablist">
      <div class="tabs" role="tablist" aria-label="Success stories">
        <button class="tab is-active" role="tab" aria-selected="true" data-panel="ltv">Increase Lifetime Value</button>
        <button class="tab" role="tab" aria-selected="false" data-panel="simplify">Simplify Architecture</button>
        <button class="tab" role="tab" aria-selected="false" data-panel="silos">Break Down Silos</button>
        <button class="tab" role="tab" aria-selected="false" data-panel="love">Grow Brand Love</button>
      </div>
      <!-- Panel 1 -->
      <div class="panel is-active" data-id="ltv" role="tabpanel">
        <div class="grid">
          <a class="story" href="#story1">
            <div class="logo">
              <?php $logo1 = get_field('ss_client_logo1'); ?>
              <?php if ($logo1): ?>
                <img src="<?php echo esc_url($logo1); ?>" alt="Client logo">
              <?php else: ?>
                <div>Empty value</div>
              <?php endif; ?>
            </div>
            <div class="quote">
              <?php echo esc_html(get_field('ss_client_message1') ?: 'Empty value'); ?>
            </div>
            <div class="person">
              <span class="name"><?php echo esc_html(get_field('ss_client_name1') ?: 'Empty value'); ?></span>
              <span class="role"><?php echo esc_html(get_field('ss_client_designation1') ?: 'Empty value'); ?></span>
            </div>
            <div class="photo">
              <?php $img1 = get_field('ss_image1'); ?>
              <?php if ($img1): ?>
                <img src="<?php echo esc_url($img1['url']); ?>" alt="">
              <?php else: ?>
                <div>Empty value</div>
              <?php endif; ?>
            </div>
          </a>
          <div class="metrics">
            <div class="metric">
              <span class="value"><?php echo esc_html(get_field('ss_right_box1_top_copy') ?: 'Empty value'); ?></span>
              <span class="label"><?php echo esc_html(get_field('ss_right_box1_bottom_copy') ?: 'Empty value'); ?></span>
            </div>
            <div class="metric">
              <span class="value"><?php echo esc_html(get_field('ss_right_box2_top_copy') ?: 'Empty value'); ?></span>
              <span class="label"><?php echo esc_html(get_field('ss_right_box2_bottom_copy') ?: 'Empty value'); ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Panel 2 -->
      <div class="panel" data-id="simplify" role="tabpanel" hidden>
        <div class="grid">
          <a class="story" href="#story2">
            <div class="logo">
              <?php $logo2 = get_field('ss_client_logo2'); ?>
              <?php if ($logo2): ?>
                <img src="<?php echo esc_url($logo2); ?>" alt="Client logo">
              <?php else: ?>
                <div>Empty value</div>
              <?php endif; ?>
            </div>
            <div class="quote">
              <?php echo esc_html(get_field('ss_client_message2') ?: 'Empty value'); ?>
            </div>
            <div class="person">
              <span class="name"><?php echo esc_html(get_field('ss_client_name2') ?: 'Empty value'); ?></span>
              <span class="role"><?php echo esc_html(get_field('ss_client_designation2') ?: 'Empty value'); ?></span>
            </div>
            <div class="photo">
              <?php $img2 = get_field('ss_image2'); ?>
              <?php if ($img2): ?>
                <img src="<?php echo esc_url($img2); ?>" alt="">
              <?php else: ?>
                <div>Empty value</div>
              <?php endif; ?>
            </div>
          </a>
          <div class="metrics">
            <div class="metric">
              <span class="value"><?php echo esc_html(get_field('ss_right_box_top_copy2') ?: 'Empty value'); ?></span>
              <span class="label"><?php echo esc_html(get_field('ss_right_box_bottom_copy2') ?: 'Empty value'); ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Panel 3 -->
      <div class="panel" data-id="silos" role="tabpanel" hidden>
        <div class="grid">
          <a class="story" href="#story3">
            <div class="logo">
              <?php $logo3 = get_field('ss_client_logo3'); ?>
              <?php if ($logo3): ?>
                <img src="<?php echo esc_url($logo3); ?>" alt="Client logo">
              <?php else: ?>
                <div>Empty value</div>
              <?php endif; ?>
            </div>
            <div class="quote">
              <?php echo esc_html(get_field('ss_client_message3') ?: 'Empty value'); ?>
            </div>
            <div class="person">
              <span class="name"><?php echo esc_html(get_field('ss_client_name3') ?: 'Empty value'); ?></span>
              <span class="role"><?php echo esc_html(get_field('ss_client_designation3') ?: 'Empty value'); ?></span>
            </div>
            <div class="photo">
              <?php $img3 = get_field('ss_image3'); ?>
              <?php if ($img3): ?>
                <img src="<?php echo esc_url($img3['url']); ?>" alt="">
              <?php else: ?>
                <div>Empty value</div>
              <?php endif; ?>
            </div>
          </a>
          <div class="metrics">
            <div class="metric">
              <span class="value"><?php echo esc_html(get_field('ss_right_box1_top_copy3') ?: 'Empty value'); ?></span>
              <span class="label"><?php echo esc_html(get_field('ss_right_box1_bottom_copy3') ?: 'Empty value'); ?></span>
            </div>
            <div class="metric">
              <span class="value"><?php echo esc_html(get_field('ss_right_box2_top_copy3') ?: 'Empty value'); ?></span>
              <span class="label"><?php echo esc_html(get_field('ss_right_box2_bottom_copy3') ?: 'Empty value'); ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Panel 4 -->
      <div class="panel" data-id="love" role="tabpanel" hidden>
        <div class="grid">
          <a class="story" href="#story4">
            <div class="logo">
              <?php $logo4 = get_field('ss_client_logo4'); ?>
              <?php if ($logo4): ?>
                <img src="<?php echo esc_url($logo4); ?>" alt="Client logo">
              <?php else: ?>
                <div>Empty value</div>
              <?php endif; ?>
            </div>
            <div class="quote">
              <?php echo esc_html(get_field('ss_client_message4') ?: 'Empty value'); ?>
            </div>
            <div class="person">
              <span class="name"><?php echo esc_html(get_field('ss_client_name4') ?: 'Empty value'); ?></span>
              <span class="role"><?php echo esc_html(get_field('ss_client_designation4') ?: 'Empty value'); ?></span>
            </div>
            <div class="photo">
              <?php $img4 = get_field('ss_image4'); ?>
              <?php if ($img4): ?>
                <img src="<?php echo esc_url($img4); ?>" alt="">
              <?php else: ?>
                <div>Empty value</div>
              <?php endif; ?>
            </div>
          </a>
          <div class="metrics">
            <div class="metric">
              <span class="value"><?php echo esc_html(get_field('ss_right_box_top_copy4') ?: 'Empty value'); ?></span>
              <span class="label"><?php echo esc_html(get_field('ss_right_box_bottom_copy4') ?: 'Empty value'); ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>
</section>


<!-- Customer engagement  -->

<section class="scroll-fluid">
  <div class="container">
    <h2 class="scroll-fluid-heading">
  <?php 
    $engagement = get_field('customer_engagement');
    if ($engagement && is_array($engagement) && isset($engagement['ce_heading'])) {
      echo $engagement['ce_heading'];
    } else {
      echo 'Empty value';
    }
  ?>
</h2>

    <p class="scroll-fluidtxt"><?php 
    if ($engagement && is_array($engagement) && isset($engagement['ce_subheading'])) {
      echo $engagement['ce_subheading'];
    } else {
      echo 'Empty value';
    }
  ?></p>

    <div class="scrollsticky-wrap">
      <div class="scrollsticky-grid">


        <div class="scrollsticky-card" id="scrollsticky-card-1">
          <div class="scrollsticky-media">
            <?php 
              $card1_image = get_field('customer_engagement')['card1_image']; 
              if ($card1_image) {
                  echo '<img src="' . esc_url($card1_image) . '" alt="Card1 Image">';
              } else {
                  echo '<img src="' . get_template_directory_uri() . '/assets/images/card1-img.webp" alt="fallback Image">';
              }
            ?>
          </div>
        </div>


        <div class="scrollsticky-card" id="scrollsticky-card-2">
          <div>
            <div class="scrollsticky-eyebrow">
              <?php 
              $peacock_logo = get_field('customer_engagement')['peacock_logo']; 
              if ($peacock_logo) {
                  echo '<img src="' . esc_url($peacock_logo) . '" alt="Peacock Logo">';
              } else {
                  echo '<img src="' . get_template_directory_uri() . '/assets/images/canva.svg" alt="fallback Image">';
              }
            ?>
            </div>
            <p class="scrollsticky-title"><?php 
              if ($engagement && is_array($engagement) && isset($engagement['card2_copy'])) {
                echo $engagement['card2_copy'];
              } else {
                echo 'Empty value';
              }
            ?></p>
          </div>
          <a class="scrollsticky-btn" href="<?php 
            $card2_cta_url = get_field('customer_engagement')['card2_cta_url'];
            echo $card2_cta_url ? $card2_cta_url : '#';
          ?>"> <?php 
            if ($engagement && is_array($engagement) && isset($engagement['card2_cta_copy'])) {
              echo $engagement['card2_cta_copy'];
            } else {
              echo 'Empty value';
            }
          ?></a>
        </div>


        <div class="scrollsticky-card" id="scrollsticky-card-3">
          <h2 class="scrollsticky-title-lg"> <?php 
            if ($engagement && is_array($engagement) && isset($engagement['card3_copy'])) {
              echo $engagement['card3_copy'];
            } else {
              echo 'Empty value';
            }
          ?></h2>
        </div>


        <div class="scrollsticky-card" id="scrollsticky-card-4">
          <div>
            <div class="scrollsticky-eyebrow">
              <?php 
              $card4_logo = get_field('customer_engagement')['card4_logo']; 
              if ($card4_logo) {
                  echo '<img src="' . esc_url($card4_logo) . '" alt="Card4 Image">';
              } else {
                  echo '<img src="' . get_template_directory_uri() . '/assets/images/canva.svg" alt="fallback Image">';
              }
            ?>
            </div>
            <p class="scrollsticky-title"><?php 
              if ($engagement && is_array($engagement) && isset($engagement['card4_copy'])) {
                echo $engagement['card4_copy'];
              } else {
                echo 'Empty value';
              }
            ?></p>
          </div>
          <a class="scrollsticky-btn" href="<?php 
            $card4_cta_url = get_field('customer_engagement')['card4_cta_url'];
            echo $card4_cta_url ? $card4_cta_url : '#';
          ?>"><?php 
            if ($engagement && is_array($engagement) && isset($engagement['card4_cta_copy'])) {
              echo $engagement['card4_cta_copy'];
            } else {
              echo 'Empty value';
            }
          ?></a>
        </div>

        <div class="scrollsticky-card" id="scrollsticky-card-5">
          <h3 class="scrollsticky-title"><?php 
            if ($engagement && is_array($engagement) && isset($engagement['card5_copy'])) {
              echo $engagement['card5_copy'];
            } else {
              echo 'Empty value';
            }
          ?></h3>
        </div>


        <div class="scrollsticky-logo" id="scrollsticky-card-6">
          <div class="scrollsticky-eyebrow">
            <?php 
              $card6_braze_image = get_field('customer_engagement')['card6_braze_image']; 
              if ($card6_braze_image) {
                  echo '<img src="' . esc_url($card6_braze_image) . '" alt="braze Image">';
              } else {
                  echo '<img src="' . get_template_directory_uri() . '/assets/images/braze-trans.png" alt="fallback Image">';
              }
            ?>
          </div>
        </div>


        <div class="scrollsticky-card" id="scrollsticky-card-7">
          <div class="scrollsticky-media">
            <?php 
              $card7_image = get_field('customer_engagement')['card7_image']; 
              if ($card7_image) {
                  echo '<img src="' . esc_url($card7_image) . '" alt="smiling Image">';
              } else {
                  echo '<img src="' . get_template_directory_uri() . '/assets/images/bentobox2.webp" alt="fallback Image">';
              }
            ?>
          </div>
        </div>


        <div class="scrollsticky-card" id="scrollsticky-card-8">
          <p class="scrollsticky-title">
            <?php 
              if ($engagement && is_array($engagement) && isset($engagement['card8_copy'])) {
                echo $engagement['card8_copy'];
              } else {
                echo 'Empty value';
              }
            ?>
          </p>
          <a class="scrollsticky-btn" href="<?php 
            $card8_cta_url = get_field('customer_engagement')['card8_cta_url'];
            echo $card8_cta_url ? $card8_cta_url : '#';
              ?>"><?php 
              if ($engagement && is_array($engagement) && isset($engagement['card8_cta_copy'])) {
                echo $engagement['card8_cta_copy'];
              } else {
                echo 'Empty value';
              }
            ?></a>
        </div>


        <div class="scrollsticky-card" id="scrollsticky-card-9">
          <div>
            <div class="scrollsticky-eyebrow">
              <?php 
              $card9_logo = get_field('customer_engagement')['card9_logo']; 
              if ($card9_logo) {
                  echo '<img src="' . esc_url($card9_logo) . '" alt="Card1 Image">';
              } else {
                  echo '<img src="' . get_template_directory_uri() . '/assets/images/canva.svg" alt="fallback Image">';
              }
            ?>
            </div>
            <p class="scrollsticky-title"><?php 
              if ($engagement && is_array($engagement) && isset($engagement['card9_copy'])) {
                echo $engagement['card9_copy'];
              } else {
                echo 'Empty value';
              }
            ?></p>
          </div>
          <a class="scrollsticky-btn" href="<?php 
            $card9_cta_url = get_field('customer_engagement')['card9_cta_url'];
            echo $card9_cta_url ? $card9_cta_url : '#';
          ?>"><?php 
            if ($engagement && is_array($engagement) && isset($engagement['card9_cta_copy'])) {
              echo $engagement['card9_cta_copy'];
            } else {
              echo 'Empty value';
            }
          ?></a>
        </div>

      </div>
    </div>

  </div>

</section>

<!-- Slider Section  -->

<section class="slider-section">
  <div class="container">
    <div class="slider-container">
      <div class="slider-heading">
        See our industry<br> and customer recognitions.
      </div>
      <div class="slider-content">
        <div class="slides">
          <div class="slide">
            <img class="slider-thumbnail" alt="Braze" loading="lazy" width="200" height="200" src="/wp-content/themes/clever/assets/images/slider-thumbnail-1.png" />
            <div class="slide-content">
              <img alt="Braze" loading="lazy" width="100" height="18" src="/wp-content/themes/clever/assets/images/slider-logo-1.png" />
              <p>Braze has been named a Leader in the October 2024 Gartner® Magic Quadrant for Multichannel Marketing Hubs for the second year in a row!</p>
              <div class="cta-button">Download Report</div>
            </div>
            <a class="slider-overlay" href="" aria-label="Download Report"></a>
          </div>
          <div class="slide">
            <img class="slider-thumbnail" alt="Braze" loading="lazy" width="200" height="200" src="/wp-content/themes/clever/assets/images/slider-thumbnail-2.png" />
            <div class="slide-content">
              <img alt="Braze" loading="lazy" width="100" height="18" src="/wp-content/themes/clever/assets/images/slider-logo-2.svg" />
              <p>Braze named a <strong>Leader in The Forrester Wave™</strong>: Cross-Channel Marketing Hubs, Q1 2023</p>
              <div class="cta-button">Download Report</div>
            </div>
            <a class="slider-overlay" href="" aria-label="Download Report"></a>
          </div>
          <div class="slide">
            <img class="slider-thumbnail" alt="IDC" loading="lazy" width="200" height="200" src="/wp-content/themes/clever/assets/images/slider-thumbnail-3.png" />
            <div class="slide-content">
              <img alt="IDC" loading="lazy" width="100" height="18" src="/wp-content/themes/clever/assets/images/slider-logo-3.png" />
              <p>Braze named a <strong>Leader in the 2023 IDC MarketScape</strong> Worldwide Omni-Channel Marketing Platforms for B2C Enterprises</p>
              <div class="cta-button">Learn More</div>
            </div>
            <a class="slider-overlay" href="" aria-label="Learn More"></a>
          </div>
          <div class="slide">
            <img class="slider-thumbnail" alt="Report" loading="lazy" width="200" height="200" src="/wp-content/themes/clever/assets/images/slider-thumbnail-4.png" />
            <div class="slide-content">
              <img alt="Report" loading="lazy" width="100" height="18" src="/wp-content/themes/clever/assets/images/slider-logo-4.png" />
              <p><strong>Ranked #1 in G2's Push Notification Grid</strong>, ahead of 41 competitors, we maintain our top spot as the category grows.</p>
              <div class="cta-button">View Report</div>
            </div>
            <a class="slider-overlay" href="" aria-label="View Report"></a>
          </div>
          <div class="slide">
            <img class="slider-thumbnail" alt="Braze" loading="lazy" width="200" height="200" src="/wp-content/themes/clever/assets/images/slider-thumbnail-5.png" />
            <div class="slide-content">
              <img alt="Braze" loading="lazy" width="100" height="18" src="/wp-content/themes/clever/assets/images/slider-logo-5.png" />
              <p>Braze earned the <strong>Best of Feature Set</strong>, <strong>Best Relationship</strong>, and <strong>Best Value for Price</strong> awards in the <strong>Trust Radius 2023 Best of Awards</strong></p>
              <div class="cta-button">Learn More</div>
            </div>
            <a class="slider-overlay" href="" aria-label="Learn More"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-nav">
      <button class="nav-btn active" data-index="0"><img alt="company logo" loading="lazy" width="100" height="18" src="/wp-content/themes/clever/assets/images/slider-logo-1.png" /></button>
      <button class="nav-btn" data-index="1"><img alt="company logo" loading="lazy" width="100" height="18" src="/wp-content/themes/clever/assets/images/slider-logo-2.svg" /></button>
      <button class="nav-btn" data-index="2"><img alt="company logo" loading="lazy" width="100" height="18" src="/wp-content/themes/clever/assets/images/slider-logo-3.png" /></button>
      <button class="nav-btn real-color" data-index="3"><img alt="company logo" loading="lazy" width="100" height="18" src="/wp-content/themes/clever/assets/images/slider-logo-4.png" /></button>
      <button class="nav-btn" data-index="4"><img alt="company logo" loading="lazy" width="100" height="18" src="/wp-content/themes/clever/assets/images/slider-logo-5.png" /></button>
    </div>
  </div>
</section>

<!-- Resources -->
<section class="resources">
  <div class="container">
    <div class="resources-head">
      <h2 class="resources-title">
        <?php echo esc_html(get_field('resources_heading') ?: 'Check out the resources.'); ?>
      </h2>
      <?php
      $blog_btn_url  = get_field('resources_blog_url') ?: '#';
      $blog_btn_copy = get_field('resources_blog_copy') ?: 'View the Blog';
      ?>
      <a class="resources-blog-btn" href="<?php echo esc_url($blog_btn_url); ?>">
        <?php echo esc_html($blog_btn_copy); ?>
      </a>
    </div>

    <div class="grid">
      <?php
      $resources = new WP_Query([
        'post_type'      => 'resource',
        'posts_per_page' => 6,
        'tax_query'      => [
          [
            'taxonomy' => 'resource_type',
            'field'    => 'slug',
            'terms'    => 'article',
          ],
        ],
      ]);

      if ($resources->have_posts()):
        while ($resources->have_posts()): $resources->the_post();
          $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
          $rt = get_field('reading_time');
          if ($rt === '' || $rt === null) {
            $reading_time_display = 'Empty value';
          } else {
            $reading_time_display = is_numeric($rt) ? (string) (int) $rt : (string) $rt;
          }
          $featured_raw = get_field('featured');
          $is_featured =
            (is_array($featured_raw) && in_array('Yes', $featured_raw, true)) ||
            (is_string($featured_raw) && strtolower($featured_raw) === 'yes');

          $badge = $is_featured ? 'Featured' : 'Article';
      ?>
          <a class="card" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title() ?: 'Empty value'); ?>">
            <div class="media">
              <?php if ($thumb_url): ?>
                <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr(get_the_title() ?: 'Empty value'); ?>" />
              <?php else: ?>
                <div>Empty value</div>
              <?php endif; ?>
            </div>
            <div class="content">
              <div class="meta">
                <span class="badge"><?php echo esc_html($badge); ?></span>
                <span class="reading-time"><?php echo esc_html($reading_time_display); ?> min read</span>
              </div>
              <h3 class="card-title"><?php echo esc_html(get_the_title() ?: 'Empty value'); ?></h3>
            </div>
          </a>
      <?php
        endwhile;
        wp_reset_postdata();
      else:
        echo '<p>No resources found.</p>';
      endif;
      ?>
    </div>
  </div>
</section>



<!-- Teaser / Footer card -->

<section class="cta-hero">
  <div class="wrap">
    <h1 class="cta-title">
      <?php $cta_title = get_field('fc_heading');
      echo $cta_title ? $cta_title : 'Empty value'; ?>
    </h1>
    <p class="cta-sub">
      <?php $cta_excerpt = get_field('fc_excerpt');
      echo $cta_excerpt ? $cta_excerpt : 'Empty value'; ?>
    </p>
    <div class="cta-actions">
      <a class="btn-primary" href="<?php $cta1_url = get_field('fc_cta1_url');
                                    echo $cta1_url ? $cta1_url : '#contact'; ?>">
        <?php $cta1_copy = get_field('fc_cta1_copy');
        echo $cta1_copy ? $cta1_copy : 'Empty value'; ?>
      </a>
      <a class="btn-link" href="<?php $cta2_url = get_field('fc_cta2_url');
                                echo $cta2_url ? $cta2_url : '#how-it-works'; ?>">
        <?php $cta2_copy = get_field('fc_cta2_copy');
        echo $cta2_copy ? $cta2_copy : 'Empty value'; ?>
      </a>
    </div>
  </div>
</section>


<div class="popup-overlay" id="popupOverlay">
  <div class="popup">
    <span class="popup-close" id="popupClose"><svg width="24" height="24" role="img" aria-label="x-close">
        <use href="/wp-content/themes/clever/assets/images/sprites.svg#x-close"></use>
      </svg></span>
    <script src="https://fast.wistia.com/embed/medias/fjcfsbutc4.jsonp" async></script>
    <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

    <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
      <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
        <div class="wistia_embed wistia_async_fjcfsbutc4 videoFoam=true"
          id="wistia-fjcfsbutc4-1"
          style="height:100%;position:relative;width:100%">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();
?>