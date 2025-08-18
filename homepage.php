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
          <?php
            $hero_image_url = $hero_section['hero_banner_image'] ?? '';
            if (!empty($hero_image_url)) {
              echo '<img fetchpriority="high" class="illustration" src="' . esc_url($hero_image_url) . '" width="752" height="640" loading="lazy" alt="hero banner image" />';
            } else {
              echo '<div>Image not available</div>';
            }
          ?>
          <button id="openPopup" class="play-button" type="button">
            <svg width="28" height="28" role="img" aria-label="play-fill">
              <use href="/wp-content/themes/clever/assets/images/sprites.svg#play-fill"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


    <?php echo do_shortcode('[logo_slider speed="20s" gap="50px" width="100px"]'); ?>

    <section class="stories">
    <div class="container">
      <div class="head">
        <div class="intro">
          <h2 class="title">Your brand has a message,<br>how you deliver it matters.</h2>
          <p class="sub">Hear from brands who are using Braze to find a voice that is now finding its way to customers.</p>
        </div>
        <a class="cta" href="#all">Read All Success Stories</a>
      </div>

      <div class="tabs" role="tablist" aria-label="Success stories">
        <button class="tab is-active" role="tab" aria-selected="true" data-panel="ltv">Increase Lifetime Value</button>
        <button class="tab" role="tab" aria-selected="false" data-panel="simplify">Simplify Architecture</button>
        <button class="tab" role="tab" aria-selected="false" data-panel="silos">Break Down Silos</button>
        <button class="tab" role="tab" aria-selected="false" data-panel="love">Grow Brand Love</button>
      </div>

      <!-- Panels -->
      <div class="panel is-active" data-id="ltv" role="tabpanel">
        <div class="grid">
          <a class="story" href="#pizza-hut">
            <div class="logo"><img src="/wp-content/themes/clever/assets/images/pizza.webp" alt="Pizza Hut logo"></div>
            <div class="quote">“We’ve been really impressed with how Braze has enabled us to advance our customer communication strategies across email, SMS and mobile channels. The cross channel integrations and targeting capabilities continue to be crucial as we look forward to 2021 and beyond. We are honored to be Braze’s Customer of the Year!”</div>
            <div class="person">
              <span class="name">Victoria Mitchell</span>
              <span class="role">Manager of CRM Channel Strategy at Pizza Hut</span>
            </div>
            <div class="photo"><img src="/wp-content/themes/clever/assets/images/pizza-story.webp" alt=""></div>
          </a>
          <div class="metrics">
            <div class="metric"><span class="value">21%</span><span class="label">Increase in revenue</span></div>
            <div class="metric"><span class="value">30%</span><span class="label">Increase in transactions</span></div>
          </div>
        </div>
      </div>

      <div class="panel" data-id="simplify" role="tabpanel" hidden>
        <div class="grid">
          <a class="story" href="#bees">
            <div class="logo"><img src="/wp-content/themes/clever/assets/images/bees.webp" alt="BEES logo"></div>
            <div class="quote">“With Braze, we ensure customers have meaningful access to individually tailored updates on the products they order, creating a better, more personalized brand experience while reducing the burden on our support team.”</div>
            <div class="person"><span class="name">Jason Feldman</span><span class="role">Global Director, Digital Communications, BEES</span></div>
            <div class="photo"><img src="/wp-content/themes/clever/assets/images/bees-story.webp" alt=""></div>
          </a>
          <div class="metrics">
            <div class="metric"><span class="value">15%</span><span class="label">Decrease in support tickets</span></div>
          </div>
        </div>
      </div>

      <div class="panel" data-id="silos" role="tabpanel" hidden>
        <div class="grid">
          <a class="story" href="#virgin">
            <div class="logo"><img src="/wp-content/themes/clever/assets/images/virgin.webp" alt="Virgin Red logo"></div>
            <div class="quote">“We brought in Braze to level up our customer engagement game. Braze helped us leverage the data we already have and drive engagement and acquisition at a speed we could not dream about before.”</div>
            <div class="person"><span class="name">Oksana Kovalenko</span><span class="role">Head of Data Product at Virgin Red</span></div>
            <div class="photo"><img src="/wp-content/themes/clever/assets/images/virgin-story.webp" alt=""></div>
          </a>
          <div class="metrics">
            <div class="metric"><span class="value">+7K</span><span class="label">Click-through during IP warmup</span></div>
            <div class="metric"><span class="value">45%</span><span class="label">Open rate during IP warmup</span></div>
          </div>
        </div>
      </div>

      <div class="panel" data-id="love" role="tabpanel" hidden>
        <div class="grid">
          <a class="story" href="#hugosave">
            <div class="logo"><img src="/wp-content/themes/clever/assets/images/hugosave.webp" alt="Hugosave logo"></div>
            <div class="quote">“Braze is a very important partner in the execution of our engagement and gamification strategies.”</div>
            <div class="person"><span class="name">Braham Djidjelli</span><span class="role">Co-Founder, CPO at Hugosave</span></div>
            <div class="photo"><img src="/wp-content/themes/clever/assets/images/hugosave-story.webp" alt=""></div>
          </a>
          <div class="metrics">
            <div class="metric"><span class="value">300%</span><span class="label">Increase in clients opening full accounts</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- Resources -->
    <section class="resources">
      <div class="container">
        <div class="resources-head">
          <h2 class="resources-title">Check out the resources.</h2>
          <a class="resources-blog-btn" href="#blog">View the Blog</a>
        </div>

        <div class="grid">
          <!-- Card 1 -->
          <a class="card" href="#r1" aria-label="2025 Global Customer Engagement Review">
            <div class="media">
              <img src="/wp-content/themes/clever/assets/images/blog-image.webp" alt="2025 Global Customer Engagement Review" />
            </div>
            <div class="content">
              <div class="meta">
                <span class="badge">Report</span>
              </div>
              <h3 class="card-title">2025 Global Customer Engagement Review</h3>
            </div>
          </a>

          <!-- Card 2 -->
          <a class="card" href="#r2" aria-label="Braze Inspiration Guide">
            <div class="media">
              <img src="/wp-content/themes/clever/assets/images/blog-image2.webp" alt="Braze Inspiration Guide" />
            </div>
            <div class="content">
              <div class="meta">
                <span class="badge">Guide</span>
              </div>
              <h3 class="card-title">Braze Inspiration Guide</h3>
            </div>
          </a>

          <!-- Card 3 -->
          <a class="card" href="#r3" aria-label="Melting Points, Where Creativity Meets Technology">
            <div class="media">
              <img src="/wp-content/themes/clever/assets/images/blog-image3.webp" alt="Melting Points, Where Creativity Meets Technology" />
            </div>
            <div class="content">
              <div class="meta">
                <span class="badge">Guide</span>
              </div>
              <h3 class="card-title">Melting Points, Where Creativity Meets Technology</h3>
            </div>
          </a>

          <!-- Card 4 -->
          <a class="card" href="#r4" aria-label="Building Long Term Loyalty, What Consumers Want">
            <div class="media">
              <img src="/wp-content/themes/clever/assets/images/blog-image4.webp" alt="Building Long Term Loyalty, What Consumers Want" />
            </div>
            <div class="content">
              <div class="meta">
                <span class="badge">Report</span>
              </div>
              <h3 class="card-title">Building Long Term Loyalty, What Consumers Want</h3>
            </div>
          </a>

          <!-- Card 5 with reading time -->
          <a class="card" href="#r5" aria-label="How iOS 18 is shaping engagement">
            <div class="media">
              <img src="/wp-content/themes/clever/assets/images/blog-image5.webp" alt="How iOS 18 is shaping engagement" />
            </div>
            <div class="content">
              <div class="meta">
                <span class="badge">Blog</span>
                <span class="reading-time">5 min read</span>
              </div>
              <h3 class="card-title">How iOS 18 is shaping engagement, and what marketers can do about it</h3>
            </div>
          </a>

          <!-- Card 6 -->
          <a class="card" href="#r6" aria-label="Optimizing SMS and email for holiday campaigns">
            <div class="media">
              <img src="/wp-content/themes/clever/assets/images/blog-image6.webp" alt="Optimizing SMS and email for holiday campaigns" />
            </div>
            <div class="content">
              <div class="meta">
                <span class="badge">Guide</span>
              </div>
              <h3 class="card-title">Optimizing SMS and email for holiday campaigns</h3>
            </div>
          </a>
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