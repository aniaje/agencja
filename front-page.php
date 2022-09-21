<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="anaweb" />

  <!-- Stylesheets
	============================================= -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&display=swap" rel="stylesheet" type="text/css" />

  <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Document Title
	============================================= -->
  <title>Digital Agency</title>
</head>

<body class="stretched ">



  <!-- Document Wrapper
	============================================= -->
  <div id="wrapper" class="clearfix">
    <!-- Header
		============================================= -->
    <header id="header" class="full-header transparent-header header-size-custom" data-sticky-shrink="false">
      <div id="header-wrap">
        <div class="container">
          <div class="header-row">
            <!-- Logo
						============================================= -->
            <div id="logo">
              <a href="index.html" class="standard-logo" data-dark-logo="<?php echo get_template_directory_uri() . "/images/logo-placeholder-300x120.png"; ?>"><img src="<?php echo get_template_directory_uri() . "/images/logo-placeholder-300x120.png"; ?>" alt=" Logo" /></a>
              <a href="index.html" class="retina-logo" data-dark-logo="<?php echo get_template_directory_uri() . "/images/logo-placeholder-300x120.png"; ?>"><img src="<?php echo get_template_directory_uri() . "/images/logo-placeholder-300x120.png"; ?>" alt=" Logo" /></a>
            </div>
            <!-- #logo end -->

            <div class="header-misc">
              <div class="header-misc-icon ">

                <a href="#"><i class="icon-mail"></i></a>
              </div>
            </div>

            <div id="primary-menu-trigger">
              <svg class="svg-trigger" viewBox="0 0 100 100">
                <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                <path d="m 30,50 h 40"></path>
                <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
              </svg>
            </div>

            <!-- Primary Navigation
						============================================= -->
            <nav class="primary-menu">
              <ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
                <li class="menu-item">
                  <a href="#" class="menu-link" data-href="#wrapper">
                    <div>Home</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#about" class="menu-link" data-href="#about">
                    <div>About</div>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="#services" class="menu-link" data-href="#services">
                    <div>Services</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#team" class="menu-link" data-href="#team">
                    <div>Team</div>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="#contact" class="menu-link" data-href="#contact">
                    <div>Contact</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#clients" class="menu-link" data-href="#clients">
                    <div>Clients</div>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- #primary-menu end -->
          </div>
        </div>
      </div>
      <div class="header-wrap-clone"></div>
    </header>
    <!-- #header end -->

    <!-- Slider
		============================================= -->
    <section id="slider" class="slider-element slider-parallax min-vh-75 include-header">
      <div class="slider-inner" style="background-image: url('<?php echo get_template_directory_uri() . "/images/6.png"; ?>')">
        <div class="vertical-middle slider-element-fade">
          <div class="container">
            <div class="emphasis-title">
              <span class="before-heading opm-medium fw-light text-uppercase font-primary">We are</span>
              <h1>
                <span class="text-rotater nocolor" data-separator="|" data-rotate="fadeIn" data-speed="1500">
                  <span class="t-rotate fw-bold font-body opm-medium-word" id="mainTitle">InTheMaking |digital agency.
                    |creators.|different.|strategy experts.</span>
                </span>
              </h1>
              <p> <span class="text-rotater nocolor" data-separator="|" data-rotate="fadeIn" data-speed="1500">
                  <span class="t-rotate  font-body opm-medium-word" id="mainTitle" style="font-size: 1.25rem;
    font-weight: 300;">...Your web3 Brand |
                    | | | </span>
                </span></p>
            </div>

            <a href="#" class="button button-border button-circle" data-scrollto="#contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Get in Touch</a>
          </div>
        </div>

        <div class="video-wrap">
          <div class="video-overlay" style="background: rgba(255, 255, 255, 0.7)"></div>
        </div>
      </div>
    </section>
    <!-- #slider end -->

    <!-- Content
		============================================= -->
    <section id="content">
      <div class="content-wrap py-0">
        <div class="container" id="about">
          <div class="row justify-content-center mt-5">
            <div class="col-md-7 text-center">
              <h3 class="display-4 color fw-normal font-display mb-5">
                Want to work with us?
              </h3>
            </div>
          </div>

          <div class="row feature-box-border-horizontal col-mb-50">
            <div class="col-lg-3 col-md-4">
              <div class="feature-box">
                <div class="fbox-content">
                  <h2 class="display-2 fw-bolder mb-3 text-warning">1</h2>
                  <h3 class="nott text-larger mb-4">Discovery call</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi, quae rerum dolores aperiam amet enim consequuntur
                    maiores totam odit molestiae vel ut earum deleniti.
                  </p>
                </div>
              </div>
            </div>

            <div class="col d-none d-lg-flex text-center align-self-center flex-column">
              <a href="#" class="d-block h-translate-x-n all-ts"><i class="icon-double-angle-right icon-stacked rounded-pill text-warning ps-1 h5 border border-default icon-2x"></i></a>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="feature-box flex-column">
                <div class="fbox-content">
                  <h2 class="display-2 fw-bolder mb-3 text-warning op-06">
                    2
                  </h2>
                  <h3 class="nott text-larger mb-4">
                    Social media marketing strategy
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi, quae rerum dolores aperiam amet enim consequuntur
                    maiores totam odit molestiae vel ut earum deleniti.
                  </p>
                </div>
              </div>
            </div>

            <div class="col d-none d-lg-flex text-center align-self-center flex-column">
              <a href="#" class="d-block h-translate-x-n all-ts"><i class="icon-double-angle-right icon-stacked rounded-pill text-warning ps-1 h5 border border-default icon-2x"></i></a>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="feature-box flex-column noborder">
                <div class="fbox-content">
                  <h2 class="display-2 fw-bolder mb-3 text-warning op-03">
                    3
                  </h2>
                  <h3 class="nott text-larger mb-4">Let's go!</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi, quae rerum dolores aperiam amet enim consequuntur
                    maiores totam odit molestiae vel ut earum deleniti.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-between align-items-center my-6 col-mb-50 mt-5 pt-5">
            <h3 class="display-4 color fw-normal font-display mb-5" id="about">
              We know what you <i>need</i> to know...
            </h3>
            <div class="col-lg-5">
              <div class="feature-box fbox-sm mb-4 anim-delay-1" data-animate="fadeInLeft">
                <div class="fbox-icon">
                  <i class="bg-color-50 color"></i>
                </div>
                <div class="fbox-content">
                  <h3 class="nott text-larger fw-normal mb-2">
                    How to build your reputation in the crypto vs. web3 space?
                  </h3>
                </div>
              </div>

              <div class="feature-box fbox-sm mb-4 anim-delay-2" data-animate="fadeInLeft">
                <div class="fbox-icon">
                  <i class="bg-color-50 color"></i>
                </div>
                <div class="fbox-content">
                  <h3 class="nott text-larger fw-normal mb-2">
                    What should be the mint price of your NFT Collection?
                  </h3>
                </div>
              </div>

              <div class="feature-box fbox-sm mb-4 anim-delay-3" data-animate="fadeInLeft">
                <div class="fbox-icon">
                  <i class="bg-color-50 color"></i>
                </div>
                <div class="fbox-content">
                  <h3 class="nott text-larger fw-normal mb-2">
                    Which wallets represent your target audience?
                  </h3>
                </div>
              </div>

              <div class="feature-box fbox-sm mb-4 anim-delay-4" data-animate="fadeInLeft">
                <div class="fbox-icon">
                  <i class="bg-color-50 color"></i>
                </div>
                <div class="fbox-content">
                  <h3 class="nott text-larger fw-normal mb-2">
                    Through which wallets should you promote your project?
                  </h3>
                </div>
              </div>

              <div class="feature-box fbox-sm mb-4 anim-delay-5" data-animate="fadeInLeft">
                <div class="fbox-icon">
                  <i class="bg-color-50 color"></i>
                </div>
                <div class="fbox-content">
                  <h3 class="nott text-larger fw-normal mb-2">
                    Which influencers' content does not reflectyour
                    brand's values?
                  </h3>
                </div>
              </div>
              <div class="feature-box fbox-sm mb-4 anim-delay-6" data-animate="fadeInLeft">
                <div class="fbox-icon">
                  <i class="bg-color-50 color"></i>
                </div>
                <div class="fbox-content">
                  <h3 class="nott text-larger fw-normal mb-2">
                    How to gamify your customer experiences?
                  </h3>
                </div>
              </div>
              <div class="feature-box fbox-sm mb-4 anim-delay-7" data-animate="fadeInLeft">
                <div class="fbox-icon">
                  <i class="bg-color-50 color"></i>
                </div>
                <div class="fbox-content">
                  <h3 class="nott text-larger fw-normal mb-2">
                    Why should you (not) expand into web3?
                  </h3>
                </div>
              </div>

              <div class="topmargin center">
                <a href="#" class="button button-border button-circle fw-semibold">ask us anything!</a>
              </div>
            </div>
            <div class="col-lg-5">
              <img src="<?php echo get_template_directory_uri() . "/images/social-media.png"; ?>" alt="social media" class="rounded" />
            </div>
          </div>
          <div id="services" class="page-section pt-0 pb-2">
            <div class="m-0 pt-1">
              <div class="container clearfix">
                <div class="mx-auto center">
                  <h2 class="display-4 color fw-normal font-display mb-5">
                    What we do?
                  </h2>
                </div>
              </div>
            </div>

            <div class="row align-items-stretch">
              <div class="col-lg-4 d-none d-md-block" style="
                    background: url('<?php echo get_template_directory_uri() . "/images/social-media-offer 2.jpg"; ?>') center
                      center no-repeat;
                    background-size: cover;
                  "></div>
              <div class="col-lg-7">
                <div class="row align-items-stretch grid-border clearfix">
                  <div class="col-lg-4 col-md-6 col-padding">
                    <div class="feature-box fbox-center fbox-dark fbox-plain">
                      <div class="fbox-icon">
                        <i class="icon-et-hotairballoon op-gradient-icon"></i>
                      </div>
                      <div class="fbox-content fbox-content-m">
                        <h2>BRANDING</h2>

                        <ul class="list-unstyled mb-0 text-left">
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            consulting
                          </li>

                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            target audience
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            market research
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            conceptualization
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            design
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            story-telling
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-padding">
                    <div class="feature-box fbox-center fbox-dark fbox-plain">
                      <div class="fbox-icon">
                        <a href="#"><i class="icon-et-presentation op-gradient-icon"></i></a>
                      </div>
                      <div class="fbox-content fbox-content-sm">
                        <h2>STRATEGY</h2>
                        <ul class="list-unstyled mb-0 text-left">
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            SoMe profile & server setup
                          </li>

                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            campaign
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            collaborations
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            connecting & networking
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            goals setup
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            (AI) tools selection
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            gamification
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            Growth Hacking
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-padding">
                    <div class="feature-box fbox-center fbox-dark fbox-plain">
                      <div class="fbox-icon">
                        <a href="#"><i class="icon-et-puzzle op-gradient-icon"></i></a>
                      </div>
                      <div class="fbox-content fbox-content-sm">
                        <h2>EXECUTION</h2>
                        <ul class="list-unstyled mb-0">
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            SoMe management
                          </li>

                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            content creation
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            community management
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            bots adjustment
                          </li>
                          <li class="mb-2 fw-light">
                            <i class=" "></i>
                            data analysis
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Barber Teams
				============================================= -->
            <div class="section bg-transparent mb-0 topmargin-sm clearfix">
              <div class="container clearfix">
                <div class="mx-auto center" id="team" style="max-width: 900px">
                  <h2 class="display-4 color fw-normal font-display mb-5 fadeInRightSmall">
                    Who are <i>we</i>?
                  </h2>
                </div>

                <div class="row">
                  <!-- Team 1
							============================================= -->
                  <div class="col-md-4 col-sm-6 p-5 bottommargin">
                    <div class="team">
                      <div class="team-image">
                        <img src="<?php echo get_template_directory_uri() . "/images/social-media-offer 2.jpg"; ?>" alt="Szymon Reich" />
                        <div class="bg-overlay">
                          <div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
                            <div class="d-flex mb-3" data-hover-animate="fadeInUp" data-hover-animate-out="fadeOutDown" data-hover-speed="400" data-hover-parent=".team">
                              <a href="#" class="social-icon si-rounded si-colored si-small si-facebook" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-gplus" title="tiktok">
                                <i class="icon-tiktok"></i>
                                <i class="icon-tiktok"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-instagram" title="instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                              </a>
                            </div>
                            <div class="w-75 text-center text-white text-wrap p-3 m-3" data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp" data-hover-speed="400" data-hover-parent=".team">
                              lorem ipsm lorem ipsml ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm
                            </div>
                          </div>
                          <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
                        </div>
                      </div>
                      <div class="team-desc">
                        <div class="team-title">
                          <h4>Szymon Reich</h4>
                          <span>Expert</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 p-5 bottommargin">
                    <div class="team">
                      <div class="team-image">
                        <img src="<?php echo get_template_directory_uri() . "/images/social-media-offer 2.jpg"; ?>" alt="Szymon Reich" />
                        <div class="bg-overlay">
                          <div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
                            <div class="d-flex mb-3" data-hover-animate="fadeInUp" data-hover-animate-out="fadeOutDown" data-hover-speed="400" data-hover-parent=".team">
                              <a href="#" class="social-icon si-rounded si-colored si-small si-facebook" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-gplus" title="tiktok">
                                <i class="icon-tiktok"></i>
                                <i class="icon-tiktok"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-instagram" title="instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                              </a>
                            </div>
                            <div class="w-75 text-center text-white text-wrap p-3 m-3" data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp" data-hover-speed="400" data-hover-parent=".team">
                              lorem ipsm lorem ipsml ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm
                            </div>
                          </div>
                          <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
                        </div>
                      </div>
                      <div class="team-desc">
                        <div class="team-title">
                          <h4>Szymon Reich</h4>
                          <span>Expert</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-6 p-5 bottommargin">
                    <div class="team">
                      <div class="team-image">
                        <img src="<?php echo get_template_directory_uri() . "/images/social-media-offer 2.jpg"; ?>" alt="Szymon Reich" />
                        <div class="bg-overlay">
                          <div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
                            <div class="d-flex mb-3" data-hover-animate="fadeInUp" data-hover-animate-out="fadeOutDown" data-hover-speed="400" data-hover-parent=".team">
                              <a href="#" class="social-icon si-rounded si-colored si-small si-facebook" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-gplus" title="tiktok">
                                <i class="icon-tiktok"></i>
                                <i class="icon-tiktok"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-instagram" title="instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                              </a>
                            </div>
                            <div class="w-75 text-center text-white text-wrap p-3 m-3" data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp" data-hover-speed="400" data-hover-parent=".team">
                              lorem ipsm lorem ipsml ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm
                            </div>
                          </div>
                          <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
                        </div>
                      </div>
                      <div class="team-desc">
                        <div class="team-title">
                          <h4>Szymon Reich</h4>
                          <span>Expert</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-6 p-5 bottommargin">
                    <div class="team">
                      <div class="team-image">
                        <img src="<?php echo get_template_directory_uri() . "/images/social-media-offer 2.jpg"; ?>" alt="Szymon Reich" />
                        <div class="bg-overlay">
                          <div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
                            <div class="d-flex mb-3" data-hover-animate="fadeInUp" data-hover-animate-out="fadeOutDown" data-hover-speed="400" data-hover-parent=".team">
                              <a href="#" class="social-icon si-rounded si-colored si-small si-facebook" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-gplus" title="tiktok">
                                <i class="icon-tiktok"></i>
                                <i class="icon-tiktok"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-instagram" title="instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                              </a>
                            </div>
                            <div class="w-75 text-center text-white text-wrap p-3 m-3" data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp" data-hover-speed="400" data-hover-parent=".team">
                              lorem ipsm lorem ipsml ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm
                            </div>
                          </div>
                          <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
                        </div>
                      </div>
                      <div class="team-desc">
                        <div class="team-title">
                          <h4>Szymon Reich</h4>
                          <span>Expert</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-6 p-5 bottommargin">
                    <div class="team">
                      <div class="team-image">
                        <img src="<?php echo get_template_directory_uri() . "/images/social-media-offer 2.jpg"; ?>" alt="Szymon Reich" />
                        <div class="bg-overlay">
                          <div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
                            <div class="d-flex mb-3" data-hover-animate="fadeInUp" data-hover-animate-out="fadeOutDown" data-hover-speed="400" data-hover-parent=".team">
                              <a href="#" class="social-icon si-rounded si-colored si-small si-facebook" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-gplus" title="tiktok">
                                <i class="icon-tiktok"></i>
                                <i class="icon-tiktok"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-instagram" title="instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                              </a>
                            </div>
                            <div class="w-75 text-center text-white text-wrap p-3 m-3" data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp" data-hover-speed="400" data-hover-parent=".team">
                              lorem ipsm lorem ipsml ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem ipsm
                            </div>
                          </div>
                          <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
                        </div>
                      </div>
                      <div class="team-desc">
                        <div class="team-title">
                          <h4>Szymon Reich</h4>
                          <span>Expert</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-6 p-5 bottommargin">
                    <div class="team">
                      <div class="team-image">
                        <img src="<?php echo get_template_directory_uri() . "/images/social-media-offer 2.jpg"; ?>" alt="Szymon Reich" />
                        <div class="bg-overlay">
                          <div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
                            <div class="d-flex mb-3" data-hover-animate="fadeInUp" data-hover-animate-out="fadeOutDown" data-hover-speed="400" data-hover-parent=".team">
                              <a href="#" class="social-icon si-rounded si-colored si-small si-facebook" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-gplus" title="tiktok">
                                <i class="icon-tiktok"></i>
                                <i class="icon-tiktok"></i>
                              </a>
                              <a href="#" class="social-icon si-rounded si-colored si-small si-instagram" title="instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                              </a>
                            </div>
                            <div class="w-75 text-center text-white text-wrap p-3 m-3" data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp" data-hover-speed="400" data-hover-parent=".team">
                              lorem ipsm lorem ipsml ipsmlorem ipsmlorem
                              ipsmlorem ipsmlorem ipsmlorem ipsmlorem
                            </div>
                          </div>
                          <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
                        </div>
                      </div>
                      <div class="team-desc">
                        <div class="team-title">
                          <h4>Szymon Reich</h4>
                          <span>Expert</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="section bg-transparent m-0 pb-1">
              <div class="mx-auto center" id="contact" style="max-width: 900px">
                <h2 class="display-4 color fw-bold font-display">Tell us about your project
                </h2>
              </div>
            </div>
          </div>
          <!-- How We Care
				============================================= -->

          <!-- Get 24/7 Care
				============================================= -->
        </div>

        <div class="page-section pt-0">
          <div class="container clearfix">
            <div class="mx-auto" style="max-width: 850px">
              <div class="form-widget">
                <div class="form-result"></div>
                <form class="row mb-0" id="template-contactform">
                  <div class="form-process">
                    <div class="css3-spinner">
                      <div class="css3-spinner-scale-ripple">
                        <div></div>
                        <div></div>
                        <div></div>
                      </div>
                    </div>
                  </div>



                  <?php echo do_shortcode('[contact-form-7 id="10" title="Formularz 1"]'); ?>

                  <div class="w-100"></div>
                  <br />
                  <small class="text-center" style="
                          display: block;
                          font-size: 13px;
                          margin-top: 15px;
                        ">We'll do our best to get back to you within 24 working
                    hours.</small>
              </div>


              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  <!-- #content end -->
  <section id="clients">
    <div class="content-wrap pt-0">
      <div class="section footer-stick">
        <h3 class="center display-6 color fw-normal font-display">
          What kind of <i>projects</i> we work on
        </h3>

        <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="false" data-autoplay="5000" data-items-xs="3" data-items-sm="3" data-items-md="5" data-items-lg="6" data-items-xl="7">
          <div class="oc-item">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/marka.png"; ?>" alt="Brands" /></a>
          </div>
          <div class="oc-item">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/marka.png"; ?>" alt="Brands" /></a>
          </div>
          <div class="oc-item">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/marka.png"; ?>" alt="Brands" /></a>
          </div>
          <div class="oc-item">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/marka.png"; ?>" alt="Brands" /></a>
          </div>
          <div class="oc-item">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/marka.png"; ?>" alt="Brands" /></a>
          </div>
          <div class="oc-item">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/marka.png"; ?>" alt="Brands" /></a>
          </div>
          <div class="oc-item">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/marka.png"; ?>" alt="Brands" /></a>
          </div>
          <div class="oc-item">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/marka.png"; ?>" alt="Brands" /></a>
          </div>
          <div class="oc-item">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/marka.png"; ?>" alt="Brands" /></a>
          </div>
          <div class="oc-item">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/marka.png"; ?>" alt="Brands" /></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- #content end -->

  <!-- Footer
		============================================= -->
  <footer id="footer" class="dark">
    <!-- Copyrights
			============================================= -->
    <div id="copyrights">
      <div class="container">
        <div class="row justify-content-between col-mb-30">
          <div class="col-12 col-lg-auto text-center text-lg-start order-last order-lg-first">
            <img src="#" alt="Image" class="mb-4" /><br />
            Copyrights &copy; 2022 All Rights Reserved by Kwiatek Inc.
          </div>

          <div class="col-12 col-lg-auto text-center text-lg-end">
            <div class="copyrights-menu copyright-links">
              <a href="#">Home</a>/<a href="#about">About</a>/<a href="#projects">Projects</a>/<a href="#services">Services</a>/<a href="#contact">Contact</a>
            </div>
            <a href="#" class="social-icon inline-block si-small si-borderless mb-0 si-facebook">
              <i class="icon-facebook"></i>
              <i class="icon-facebook"></i>
            </a>

            <a href="#" class="social-icon inline-block si-small si-borderless mb-0 si-twitter">
              <i class="icon-twitter"></i>
              <i class="icon-twitter"></i>
            </a>

            <a href="#" class="social-icon inline-block si-small si-borderless mb-0 si-linkedin">
              <i class="icon-linkedin"></i>
              <i class="icon-linkedin"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- #copyrights end -->
  </footer>
  <!-- #footer end -->
  </div>
  <!-- #wrapper end -->

  <!-- Go To Top
	============================================= -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- JavaScripts
	============================================= -->

  <?php wp_footer(); ?>
</body>

</html>