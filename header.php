<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/x-icon" href="/wp-content/themes/clever/assets/images/favicon.ico">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<header class="site-header">
            <div class="container header-content">
                <a href="/" aria-label="Homepage" data-event-name="Header" data-event-label="Logo">
                    <img src="/wp-content/themes/clever/assets/images/logo.png" alt="Braze logo" width="80" height="38" class="brand-logo" />
                </a>

                <nav class="site-nav" aria-label="Main navigation">
                    <ul class="site-nav-list">
                        <li><a class="site-nav-menu" href="#">Why Braze?</a></li>

                        <li class="has-dropdown">
                            <button class="site-nav-menu" id="product-button" aria-haspopup="true" aria-expanded="false"
                                aria-controls="product-menu">
                                Product <svg width="20" height="20" role="img" aria-label="chevron-down">
                                    <use href="/wp-content/themes/clever/assets/images/sprites.svg#chevron-down"></use>
                                </svg>
                            </button>
                            <div id="product-menu" class="dropdown-menu" role="menu" aria-labelledby="product-button"
                                hidden>
                                <div class="container flex space-between">
                                    <div class="dropdown-left-view pt-1 pr-2 pb-2">
                                        <div class="cols flex">
                                            <div class="col col-33">
                                                <div class="col-title">Data</div>
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="lightning-02"><use href="/wp-content/themes/clever/assets/images/sprites.svg#lightning-02"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Braze Data Platform</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="presentation-chart-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#presentation-chart-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Reporting & Analytics</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col col-33">
                                                <div class="col-title">Orchestration</div>
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="dataflow-04"><use href="/wp-content/themes/clever/assets/images/sprites.svg#dataflow-04"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Journey Orchestration</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="horizontal-bar-chart-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#horizontal-bar-chart-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Experimentation</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col col-33">
                                                <div class="col-title">Channels</div>
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="cross-channels"><use href="/wp-content/themes/clever/assets/images/sprites.svg#cross-channels"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Cross-Channel</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="mail-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#mail-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Email</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="message-text-square-02"><use href="/wp-content/themes/clever/assets/images/sprites.svg#message-text-square-02"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>SMS/RCS</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="whatsapp"><use href="/wp-content/themes/clever/assets/images/sprites.svg#whatsapp"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>WhatsApp</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="phone-02"><use href="/wp-content/themes/clever/assets/images/sprites.svg#phone-02"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Mobile App Messaging</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="server-05"><use href="/wp-content/themes/clever/assets/images/sprites.svg#server-05"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Web Messaging</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="sliders-02"><use href="/wp-content/themes/clever/assets/images/sprites.svg#sliders-02"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Media Audience Sync</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="message-circle-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#message-circle-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>LINE</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown-alert">
                                            <div class="dropdown-alert-left">
                                                <div class="dropdown-alert-icon">
                                                    <svg width="16" height="16" role="img" aria-label="magic-wand-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#magic-wand-01"></use></svg>
                                                </div>
                                                <div class="dropdown-alert-content">
                                                    <div class="dropdown-alert-title">BrazeAI™</div>
                                                    <div class="dropdown-alert-sub-title">Learn how BrazeAI™ is built into features across our platform.</div>
                                                </div>
                                            </div>
                                            <div class="dropdown-alert-right">
                                                <a class="dropdown-alert-cta" href="/product/brazeai">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-right-view pt-2 pb-2 pl-2">
                                        <div class="cols pt-1">
                                            <div class="col">
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="atom-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#atom-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Braze Platform Overview</span>
                                                                <small>All your data, channels, and orchestration needs in one platform.</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="settings-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#settings-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>How it Works</span>
                                                                <small>A breakdown of our vertically-integrated tech stack.</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="has-dropdown">
                            <button class="site-nav-menu" id="solutions-button" aria-haspopup="true"
                                aria-expanded="false" aria-controls="solutions-menu">
                                Solutions <svg width="20" height="20" role="img" aria-label="chevron-down">
                                    <use href="/wp-content/themes/clever/assets/images/sprites.svg#chevron-down"></use>
                                </svg>
                            </button>
                            <div id="solutions-menu" class="dropdown-menu" role="menu"
                                aria-labelledby="solutions-button" hidden>
                                <div class="container flex space-between">
                                    <div class="dropdown-left-view pt-1 pr-2 pb-2">
                                        <div class="cols flex">
                                            <div class="col col-33">
                                                <div class="col-title">Industries</div>
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="globe-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#globe-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Retail & eCommerce</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="currency-dollar"><use href="/wp-content/themes/clever/assets/images/sprites.svg#currency-dollar"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Financial Services</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="map-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#map-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Travel & Hospitality</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="video-recorder"><use href="/wp-content/themes/clever/assets/images/sprites.svg#video-recorder"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Media & Entertainment</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="gaming-pad-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#gaming-pad-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Gaming</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="play"><use href="/wp-content/themes/clever/assets/images/sprites.svg#play"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>On Demand</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="heart-rounded"><use href="/wp-content/themes/clever/assets/images/sprites.svg#heart-rounded"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>QSR</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col col-33">
                                                <div class="col-title">Use Cases</div>
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="trend-up-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#trend-up-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Optimize Onboarding</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="pencil-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#pencil-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Boost Productivity</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="pie-chart-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#pie-chart-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Improve Acquisitions</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="trend-down-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#trend-down-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Reduce Churn</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="message-notification-square"><use href="/wp-content/themes/clever/assets/images/sprites.svg#message-notification-square"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Increase Engagement</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col col-33">
                                                <div class="col-title">Braze For</div>
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="code-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#code-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Engineering</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-right-view pt-2 pb-2 pl-2">
                                        <div class="cols pt-1">
                                            <div class="col">
                                                <ul class="col-list">
                                                    <li>
                                                        <a class="flex-column" href="/">
                                                            <img class="dropdown-card-image" width="353" height="199" loading="lazy" src="/wp-content/themes/clever/assets/images/banner-card.png" alt="Banner card">
                                                            <div class="col-list-content">
                                                                <span>2025 Global Customer Engagement Review</span>
                                                                <small>In our fifth Global Customer Engagement Review, we’re examining key emerging trends for marketers in 2025.</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="has-dropdown">
                            <button class="site-nav-menu" id="partners-button" aria-haspopup="true"
                                aria-expanded="false" aria-controls="partners-menu">
                                Partners <svg width="20" height="20" role="img" aria-label="chevron-down">
                                    <use href="/wp-content/themes/clever/assets/images/sprites.svg#chevron-down"></use>
                                </svg>
                            </button>
                            <div id="partners-menu" class="dropdown-menu" role="menu" aria-labelledby="partners-button"
                                hidden>
                                <div class="container flex space-between">
                                  <div class="dropdown-right-view dropdown-right-view-100 pt-1 pb-2 pr-2">
                                        <div class="cols flex pt-1">
                                            <div class="col col-33">
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="arrow-circle-broken-right"><use href="/wp-content/themes/clever/assets/images/sprites.svg#arrow-circle-broken-right"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Braze Alloys</span>
                                                                <small>Explore and connect with our trusted Technology or Solutions partners</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="announcement-02"><use href="/wp-content/themes/clever/assets/images/sprites.svg#announcement-02"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Braze Amplifiers</span>
                                                                <small>Supercharge the power of Braze with pre-built partner solutions designed to accelerate success.</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col col-33">
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="users-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#users-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Solutions Partners</span>
                                                                <small>Discover our partnerships with the world's leading agencies, consultancies, and system integrators</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col col-33">
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="code-02"><use href="/wp-content/themes/clever/assets/images/sprites.svg#code-02"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Technology Partners</span>
                                                                <small>Explore our 140+ technology partnership integrations.</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="has-dropdown">
                            <button class="site-nav-menu" id="resources-button" aria-haspopup="true"
                                aria-expanded="false" aria-controls="resources-menu">
                                Resources <svg width="20" height="20" role="img" aria-label="chevron-down">
                                    <use href="/wp-content/themes/clever/assets/images/sprites.svg#chevron-down"></use>
                                </svg>
                            </button>
                            <div id="resources-menu" class="dropdown-menu" role="menu"
                                aria-labelledby="resources-button" hidden>
                                <div class="container flex space-between">
                                    <div class="dropdown-left-view dropdown-left-view-50 pt-1 pr-2 pb-2">
                                        <div class="cols flex">
                                            <div class="col col-33">
                                                <div class="col-title">Grow</div>
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="database-02"><use href="/wp-content/themes/clever/assets/images/sprites.svg#database-02"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Resources Hub</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="bookmark"><use href="/wp-content/themes/clever/assets/images/sprites.svg#bookmark"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Blog</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="video-recorder"><use href="/wp-content/themes/clever/assets/images/sprites.svg#video-recorder"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Videos</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col col-33">
                                                <ul class="col-list pt-2-5">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="thumbs-up"><use href="/wp-content/themes/clever/assets/images/sprites.svg#thumbs-up"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Case Studies</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="line-chart-up-04"><use href="/wp-content/themes/clever/assets/images/sprites.svg#line-chart-up-04"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Reports & Guides</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="ticket-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#ticket-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Webinars & Events</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dropdown-alert">
                                            <div class="dropdown-alert-left">
                                                <div class="color-primary">
                                                    <svg width="20" height="20" role="img" aria-label="file-question-02"><use href="/wp-content/themes/clever/assets/images/sprites.svg#file-question-02"></use></svg>
                                                </div>
                                                <div class="dropdown-alert-content">
                                                    <div class="dropdown-alert-title">User Documentation</div>
                                                </div>
                                            </div>
                                            <div class="dropdown-alert-right">
                                                <a class="color-black" href="https://www.braze.com/docs"><svg width="24" height="24" role="img" aria-label="arrow-right"><use href="/wp-content/themes/clever/assets/images/sprites.svg#arrow-right"></use></svg></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-right-view dropdown-right-view-50 pt-2 pb-2 pl-2">
                                        <div class="cols pt-1 flex">
                                            <div class="col">
                                                <div class="col-title text-small">Grow</div>
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="lightning-02"><use href="/wp-content/themes/clever/assets/images/sprites.svg#lightning-02"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Bonfire Customer Community</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="presentation-chart-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#presentation-chart-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Braze Learning</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="award-04"><use href="/wp-content/themes/clever/assets/images/sprites.svg#award-04"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Customer Champion</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="award-03"><use href="/wp-content/themes/clever/assets/images/sprites.svg#award-03"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Certification</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="search-refraction"><use href="/wp-content/themes/clever/assets/images/sprites.svg#search-refraction"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Glossary</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <div class="col-title text-small">Support</div>
                                                <ul class="col-list">
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="help-circle"><use href="/wp-content/themes/clever/assets/images/sprites.svg#help-circle"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Support Overview</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="trend-up-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#trend-up-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Professional Services</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="headphones-02"><use href="/wp-content/themes/clever/assets/images/sprites.svg#headphones-02"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Customer Success</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="has-dropdown">
                            <button class="site-nav-menu" id="company-button" aria-haspopup="true" aria-expanded="false"
                                aria-controls="company-menu">
                                Company <svg width="20" height="20" role="img" aria-label="chevron-down">
                                    <use href="/wp-content/themes/clever/assets/images/sprites.svg#chevron-down"></use>
                                </svg>
                            </button>
                            <div id="company-menu" class="dropdown-menu" role="menu" aria-labelledby="company-button"
                                hidden>
                                <div class="container flex space-between">
                                    <div class="dropdown-right-view dropdown-right-view-100 pt-1 pb-2 pr-2">
                                          <div class="cols flex pt-1">
                                              <div class="col col-33">
                                                  <ul class="col-list">
                                                      <li>
                                                          <a href="/">
                                                              <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="users-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#users-01"></use></svg>
                                                              </div>
                                                              <div class="col-list-content">
                                                                  <span>About Us</span>
                                                                  <small>Learn how Braze became the leading customer engagement platform.</small>
                                                              </div>
                                                          </a>
                                                      </li>
                                                      <li>
                                                          <a href="/">
                                                              <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="trend-up-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#trend-up-01"></use></svg>
                                                              </div>
                                                              <div class="col-list-content">
                                                                  <span>ESG</span>
                                                                  <small>Explore our Environmental, Social, and Corporate Governance data.</small>
                                                              </div>
                                                          </a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col col-33">
                                                  <ul class="col-list">
                                                      <li>
                                                          <a href="/">
                                                              <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="switch-horizontal-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#switch-horizontal-01"></use></svg>
                                                              </div>
                                                              <div class="col-list-content">
                                                                  <span>Investor Relations</span>
                                                                  <small>Get the latest news, numbers, and financial results.</small>
                                                              </div>
                                                          </a>
                                                      </li>
                                                      <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="announcement-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#announcement-01"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>News</span>
                                                                <small>Find out about the latest happenings at Braze.</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                  </ul>
                                              </div>
                                              <div class="col col-33">
                                                  <ul class="col-list">
                                                      <li>
                                                          <a href="/">
                                                              <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="stars-01"><use href="/wp-content/themes/clever/assets/images/sprites.svg#stars-01"></use></svg>
                                                              </div>
                                                              <div class="col-list-content">
                                                                  <span>Careers</span>
                                                                  <small>Discover job openings & why people love working at Braze.</small>
                                                              </div>
                                                          </a>
                                                      </li>
                                                      <li>
                                                        <a href="/">
                                                            <div class="col-list-icon">
                                                                <svg width="20" height="20" role="img" aria-label="building-08"><use href="/wp-content/themes/clever/assets/images/sprites.svg#building-08"></use></svg>
                                                            </div>
                                                            <div class="col-list-content">
                                                                <span>Legal</span>
                                                                <small>Get information on our legal terms, policies, compliance, and more.</small>
                                                            </div>
                                                        </a>
                                                    </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                </div>
                                <div class="contact-us-bar">
                                    Looking for something else? <a href="/company/contact"><svg width="20" height="20" role="img" aria-label="mail-02" color="#4411D6"><use href="/wp-content/themes/clever/assets/images/sprites.svg#mail-02"></use></svg>Contact Us</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>


                <div class="site-header__actions">
                    <a class="site-header__search" href="/search"><svg width="16" height="16" role="img"
                            aria-label="search">
                            <use href="/wp-content/themes/clever/assets/images/sprites.svg#search-sm"></use>
                        </svg></a>
                    <div class="site-header__lang">
                        <div class="site-header__lang-btn"><svg width="18" height="18" role="img" aria-label="globe-01">
                                <use href="/wp-content/themes/clever/assets/images/sprites.svg#globe-01"></use>
                            </svg> <svg width="12" height="12" role="img" aria-label="chevron-down">
                                <use href="/wp-content/themes/clever/assets/images/sprites.svg#chevron-down"></use>
                            </svg></div>
                        <div class="site-header__lang-menu">
                            <div class="site-header__lang-option site-header__lang-option--selected" data-lang="EN">
                                <span>EN</span> <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 512 512" color="#6826E1" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg" style="color: rgb(104, 38, 225);">
                                    <path
                                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                    </path>
                                </svg>
                            </div>
                            <div class="site-header__lang-option" data-lang="JA"><span>JA</span> <svg
                                    stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    color="#6826E1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgb(104, 38, 225);">
                                    <path
                                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                    </path>
                                </svg></div>
                            <div class="site-header__lang-option" data-lang="KO"><span>KO</span> <svg
                                    stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    color="#6826E1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgb(104, 38, 225);">
                                    <path
                                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                    </path>
                                </svg></div>
                            <div class="site-header__lang-option" data-lang="PT-BR"><span>PT-BR</span> <svg
                                    stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    color="#6826E1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgb(104, 38, 225);">
                                    <path
                                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                    </path>
                                </svg></div>
                        </div>
                    </div>
                    <a class="site-header__login" href="https://dashboard.braze.com/developers/sign_in">Log In</a>
                    <a class="site-header__get-started" href="/get-started">Get Started</a>
                    
                    <button class="toggle-sidebar" data-collapse-toggle="toggle-sidebar" type="button" aria-controls="toggle-sidebar" aria-expanded="false">
                        <svg width="34" height="34" viewBox="0 0 100 100">
                            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>
                            <path class="line line2" d="M 20,50 H 80"></path>
                            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>
                          </svg>
                      </button>
                      
                </div>
            </div>
        </header>