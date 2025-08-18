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
        <li><a href="#section1">Braze Data Platform</a></li>
        <li><a href="#section2">BrazeAI™</a></li>
        <li><a href="#section3">Journey Orchestration</a></li>
        <li><a href="#section4">Cross-Channel Messaging</a></li>
        <li><a href="#section5">Real-time Execution</a></li>
        <li><a href="#section6">Scale Without Fail</a></li>
      </ul>
    </div>
    <!-- Content Sections -->
    <div id="section1" class="section">
      <div class="sticky-txtimg-box">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p><svg width="24" height="24" role="img" aria-label="stars-01">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#stars-01"></use>
              </svg> <strong>Data done right.</strong></p>
            <h3>Start building stronger first-party relationships.</h3>
            <p>Customers are giving you their data. What are you giving them in return? How about highly personalized, customized experiences? With Braze, you can.</p>
            <a class="round-cta" href="#" title="Braze Data Platform">Braze Data Platform</a>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <img width="592" height="556" class="img-responsive" src="/wp-content/themes/clever/assets/images/braze.webp" alt="Start building stronger first-party relationships" loading="lazy">
        </div>
      </div>
    </div>
    <div id="section2" class="section">
      <div class="sticky-txtimg-box row-reverse">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p><svg width="24" height="24" role="img" aria-label="stars-01">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#stars-01"></use>
              </svg> <strong>AI for Growth.</strong></p>
            <h3>Employ BrazeAI™, the world’s smartest marketing advisor.</h3>
            <p>As you learn Braze, BrazeAI™ learns your brand, helping you to create on-brand content and creative, personalize journeys, and double down on winning strategies that multiply returns.</p>
            <a class="round-cta" href="#" title="BrazeAI">BrazeAI™</a>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <img width="592" height="556" class="img-responsive" src="/wp-content/themes/clever/assets/images/braze.webp" alt="Start building stronger first-party relationships" loading="lazy">
        </div>
      </div>
    </div>
    <div id="section3" class="section">
      <div class="sticky-txtimg-box">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p class="light-purple"><svg width="24" height="24" role="img" aria-label="zap">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#zap"></use>
              </svg> <strong>Build a Better Path.</strong></p>
            <h3>Manage campaigns. Move to journey orchestration.</h3>
            <p>No matter where you are today, highly-intelligent, always-on journey orchestration is where you’ll want to be tomorrow. See how Braze is helping brands of all sizes modernize their marketing approach.</p>
            <a class="round-cta" href="#" title="Journey Orchestration">Journey Orchestration</a>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <img width="592" height="556" class="img-responsive" src="/wp-content/themes/clever/assets/images/braze.webp" alt="Start building stronger first-party relationships" loading="lazy">
        </div>
      </div>
    </div>
    <div id="section4" class="section">
      <div class="sticky-txtimg-box row-reverse">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p class="txt-red"><svg width="24" height="24" role="img" aria-label="chart-breakout-circle">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#chart-breakout-circle"></use>
              </svg> <strong>Cross-Channel Your Creativity.</strong></p>
            <h3>Never be on fewer channels than your customers.</h3>
            <p>Whether you start with email or another channel, you’ll want to keep expanding to keep up with customers. See how cross-channel marketing on a single platform can drive revenue and steer your team toward the future.</p>
            <a class="round-cta" href="#" title="Cross-Channel Messaging">Cross-Channel Messaging</a>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <img width="592" height="556" class="img-responsive" src="/wp-content/themes/clever/assets/images/braze.webp" alt="Start building stronger first-party relationships" loading="lazy">
        </div>
      </div>
    </div>

    <div id="section5" class="section">
      <div class="sticky-txtimg-box">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p class="txt-orange"><svg width="24" height="24" role="img" aria-label="zap">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#zap"></use>
              </svg> <strong>As Real Time As It Gets.</strong></p>
            <h3>Understand the real price of not operating in real time.</h3>
            <p>It’s a simple fact: Batch-and-blast campaigns leave money on the table. Discover the ROI-generating power of just-in-time, just-for-you messaging. Delivered with sub-second speed.</p>
            <a class="round-cta" href="#" title="How Braze Works">How Braze Works</a>
          </div>
        </div>
        <div class="sticky-txtimg-boxright">
          <img width="592" height="556" class="img-responsive" src="/wp-content/themes/clever/assets/images/braze.webp" alt="Start building stronger first-party relationships" loading="lazy">
        </div>
      </div>
    </div>

    <div id="section6" class="section">
      <div class="sticky-txtimg-box row-reverse">
        <div class="sticky-txtimg-boxleft">
          <div class="sticky-copy-block">
            <p class="txt-gray"><svg width="24" height="24" role="img" aria-label="arrow-narrow-up-right">
                <use href="/wp-content/themes/clever/assets/images/sprites.svg#arrow-narrow-up-right"></use>
              </svg> <strong>Growth. Simply and Securely Delivered.</strong></p>
            <h3>Secure in the now, steeled for what comes next.</h3>
            <p>Whether it’s advancements in global privacy and security regulations, or your own influx of data, we take pride in keeping you safe as you create, test and grow. Learn more about how we keep our customers ahead of the compliance and scalability curves.</p>
            <a class="round-cta" href="#" title="Scale without Fail">Scale without Fail</a>
            <div class="cert-block">
              <img width="150" height="96" src="/wp-content/themes/clever/assets/images/hipaa.svg" alt="HIPAA COMPLIANCE" loading="lazy">
              <img width="95" height="96" src="/wp-content/themes/clever/assets/images/iso.webp" alt="iso" loading="lazy">
              <img width="104" height="96" src="/wp-content/themes/clever/assets/images/aicpa.webp" alt="AICPA" loading="lazy">
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
            <h2 class="scroll-fluid-heading">Dive into the craft of customer engagement.</h2>
            <p class="scroll-fluidtxt">Any skill worth learning requires knowledge, inspiration and of course the right technology. Find it all here and start building your craft.</p>
             
            <div class="scrollsticky-wrap">
                <div class="scrollsticky-grid">
            
                  
                  <div class="scrollsticky-card" id="scrollsticky-card-1">
                    <div class="scrollsticky-media">
                      <img src="/wp-content/themes/clever/assets/images/bentobox2.webp" alt="Concert crowd">
                    </div>
                  </div>
            
                  
                  <div class="scrollsticky-card" id="scrollsticky-card-2">
                    <div>
                      <div class="scrollsticky-eyebrow">peacock</div>
                      <p class="scrollsticky-title">See how Peacock’s creative end of year targeted emails brought viewers back.</p>
                    </div>
                    <a class="scrollsticky-btn" href="#">Read More</a>
                  </div>
            
                  
                  <div class="scrollsticky-card" id="scrollsticky-card-3">
                    <h2 class="scrollsticky-title-lg">Be<br>Absolutely<br>Engaging.™</h2>
                  </div>
            
                  
                  <div class="scrollsticky-card" id="scrollsticky-card-4">
                    <div>
                      <div class="scrollsticky-eyebrow">Canva</div>
                      <p class="scrollsticky-title">Think 400 unique messages is impossible? Not for Canva.</p>
                    </div>
                    <a class="scrollsticky-btn" href="#">Read More</a>
                  </div>
            
                  
                  <div class="scrollsticky-card" id="scrollsticky-card-5">
                    <h3 class="scrollsticky-title">3.9+ trillion messages and other Canvas actions in 2024.</h3>
                  </div>
            
                  
                  <div class="scrollsticky-logo" id="scrollsticky-card-6">braze</div>
            
                  
                  <div class="scrollsticky-card" id="scrollsticky-card-7">
                    <div class="scrollsticky-media">
                      <img src="/wp-content/themes/clever/assets/images/bentobox2.webp" alt="Smiling woman">
                    </div>
                  </div>
            
                  
                  <div class="scrollsticky-card" id="scrollsticky-card-8">
                    <p class="scrollsticky-title"><strong>BrazeAI™</strong> finds winning variants that help you win at marketing.</p>
                    <a class="scrollsticky-btn" href="#">Read More</a>
                  </div>
            
                  
                  <div class="scrollsticky-card" id="scrollsticky-card-9">
                    <div>
                      <div class="scrollsticky-eyebrow">Snoonu</div>
                      <p class="scrollsticky-title">This gamified in-app strategy increased revenue for Snoonu by 40%</p>
                    </div>
                    <a class="scrollsticky-btn" href="#">Read More</a>
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



<!-- CTA Hero -->
<section class="cta-hero">
  <div class="wrap">
    <h1 class="cta-title">Join the movement to<br>journey orchestration.</h1>
    <p class="cta-sub">
      The move to highly-intelligent, always-on journey orchestration is happening.
      And much of it is happening on our platform. Join brands of all sizes who are
      taking the craft of customer engagement to the next level.
    </p>
    <div class="cta-actions">
      <a class="btn-primary" href="#contact">Contact Sales</a>
      <a class="btn-link" href="#how-it-works">See How Braze Works</a>
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