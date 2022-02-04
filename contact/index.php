<?php
  use PHPMailer\PHPMailer\PHPMailer;

  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  // Include autoload.php file
  require 'vendor/autoload.php';

  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

  if(isset($_POST['url']) && $_POST['url'] == ''){

    if($_POST["message"] == "" || $_POST["firstname"] == ""){
        echo "<p>Please press the back button and fill in all fields</p>";
    } else {

  if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $jobtitle = $_POST['jobtitle'];
    $companyname = $_POST['companyname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'mail.codeolsolutions.co.ke';
      $mail->SMTPAuth = true;
      $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ));
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'info@codeolsolutions.co.ke';
      // Gmail Password
      $mail->Password = 'Code2022??';
      $mail->SMTPSecure = 'PHPMailer::ENCRYPTION_STARTTLS';
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom($email);
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('info@codeolsolutions.co.ke');

      $mail->isHTML(true);
      $mail->Subject = 'Codeol Solution Website Form Submission';
      $mail->Body = "<h3>First Name : $firstname <br>Last Name : $lastname <br>Job Title : $jobtitle <br>Company Name : $companyname <br>Email : $email <br>Phone Number : $number <br>Message : $message</h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thank you! for contacting us, Well get back to you soon!</h5></div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }
}
}

?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script>(function (html) { html.className = html.className.replace(/\bno-js\b/, 'js') })(document.documentElement);</script>
    <title>Contact &#8211; Codeol Business Solutions</title>
    <style type="text/css">
        label[for="password"],
        .password-input,
        .lost_password {
            display: none !important;
        }
    </style>
    <link rel="alternate" type="application/rss+xml" title="Codeol Business Solutions &raquo; Feed"
        href="https://www.codeolsolutions.co.ke/feed/" />
    <script>
        var pagelayer_ajaxurl = "https://www.codeolsolutions.co.ke/site-admin/admin-ajax.php?";
        var pagelayer_global_nonce = "b5f41649e7";
        var pagelayer_server_time = 1643216506;
        var pagelayer_is_live = "";
        var pagelayer_facebook_id = "";
        var pagelayer_settings = { "post_types": ["post", "page"], "enable_giver": "1", "max_width": 1170, "tablet_breakpoint": 768, "mobile_breakpoint": 500, "sidebar": false, "body_font": false, "color": false };
        var pagelayer_recaptch_lang = "";
    </script>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Ubuntu%3A400%7CFira%20Sans%3A400" as="fetch"
        crossorigin="anonymous">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <style id="pagelayer-global-styles" type="text/css">
        .pagelayer-row-stretch-auto>.pagelayer-row-holder,
        .pagelayer-row-stretch-full>.pagelayer-row-holder.pagelayer-width-auto {
            max-width: 1170px;
            margin-left: auto;
            margin-right: auto;
        }

        @media (min-width: 769px) {
            .pagelayer-hide-desktop {
                display: none !important;
            }
        }

        @media (max-width: 768px) and (min-width: 501px) {
            .pagelayer-hide-tablet {
                display: none !important;
            }

            .pagelayer-wp-menu-holder[data-drop_breakpoint="tablet"] .pagelayer-wp_menu-ul {
                display: none;
            }
            
        }

        @media (max-width: 500px) {
            .pagelayer-hide-mobile {
                display: none !important;
            }

            .pagelayer-wp-menu-holder[data-drop_breakpoint="mobile"] .pagelayer-wp_menu-ul {
                display: none;
            }
        }

        body.pagelayer-body {
            font-family: Ubuntu;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.6;
            color: #000000ff;
            padding-top: 0px;
            padding-bottom: 0px;
        }

        body.pagelayer-body p {
            font-family: Ubuntu;
            font-size: 16px;
            font-weight: 400;
            color: #767778ff
        }

        body.pagelayer-body a {
            text-decoration-line: none
        }

        body.pagelayer-body h1 {
            font-family: Fira Sans;
            font-size: 60px;
            font-weight: 400;
            line-height: 1.2;
            color: #000000ff
        }

        body.pagelayer-body h2 {
            font-family: Fira Sans;
            font-size: 45px;
            font-weight: 400;
            color: #111111ff
        }

        body.pagelayer-body h3 {
            font-family: Fira Sans;
            font-size: 40px;
            font-weight: 400;
            color: #000000ff
        }

        body.pagelayer-body h4 {
            font-family: Fira Sans;
            font-size: 35px;
            font-weight: 400;
            color: #111111ff
        }

        body.pagelayer-body h5 {
            font-family: Fira Sans;
            font-size: 30px;
            font-weight: 400;
            color: #111111ff
        }

        body.pagelayer-body h6 {
            font-family: Fira Sans;
            font-size: 22px;
            font-weight: 400;
            color: #f59019ff
        }

        @media (max-width: 768px) {

            [class^="pagelayer-offset-"],
            [class*=" pagelayer-offset-"] {
                margin-left: 0;
            }

            .pagelayer-row .pagelayer-col {
                margin-left: 0;
                width: 100%;
            }

            .pagelayer-row.pagelayer-gutters .pagelayer-col {
                margin-bottom: 16px;
            }

            .pagelayer-first-sm {
                order: -1;
            }

            .pagelayer-last-sm {
                order: 1;
            }

            body.pagelayer-body {
                font-size: 15px
            }

            body.pagelayer-body p {
                font-size: 15px
            }

            body.pagelayer-body h1 {
                font-size: 50px
            }

            body.pagelayer-body h2 {
                font-size: 40px
            }

            body.pagelayer-body h3 {
                font-size: 35px
            }

            body.pagelayer-body h4 {
                font-size: 30px
            }

            body.pagelayer-body h5 {
                font-size: 25px
            }

            body.pagelayer-body h6 {
                font-size: 20px
            }

        }

        @media (max-width: 500px) {
            body.pagelayer-body {
                font-size: 15px
            }

            body.pagelayer-body p {
                font-size: 15px
            }

            body.pagelayer-body h1 {
                font-size: 45px
            }

            body.pagelayer-body h2 {
                font-size: 37px
            }

            body.pagelayer-body h3 {
                font-size: 32px
            }

            body.pagelayer-body h4 {
                font-size: 27px
            }

            body.pagelayer-body h5 {
                font-size: 22px
            }

            body.pagelayer-body h6 {
                font-size: 18px
            }
        }
    </style>
    <link rel='stylesheet' id='pagelayer-frontend-css'
        href='https://codeolsolutions.co.ke/site-data/plugins/pagelayer-pro/css/givecss.php?give=pagelayer-frontend.css%2Cnivo-lightbox.css%2Canimate.min.css%2Cowl.carousel.min.css%2Cowl.theme.default.min.css%2Cfont-awesome5.min.css&#038;premium=%2Cpremium-frontend.css&#038;ver=1.6.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='sitepad-style-css'
        href='https://codeolsolutions.co.ke/sitepad-data/themes/avocation/style.css?ver=5.1.6' type='text/css'
        media='all' />
    <link rel='stylesheet' id='sitepad-style-css' href='https://codeolsolutions.co.ke/code/style.css' type='text/css' />
    <link rel='stylesheet' id='sitepad-style-css' href='https://codeolsolutions.co.ke/code/bootstrap.min.css'
        type='text/css' />
    <link rel='stylesheet' id='pagelayer-google-font-header-css'
        href='https://fonts.googleapis.com/css?family=Ubuntu%3A400%7CFira+Sans%3A400&#038;ver=1.6.0' type='text/css'
        media='all' />
    <script type='text/javascript' src='https://codeolsolutions.co.ke/code/site-inc/js/popper.js'></script>

    <script type='text/javascript' src='https://codeolsolutions.co.ke/site-inc/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript'
        src='https://codeolsolutions.co.ke/site-inc/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript'
        src='https://codeolsolutions.co.ke/site-data/plugins/pagelayer-pro/js/givejs.php?give=pagelayer-frontend.js%2Cnivo-lightbox.min.js%2Cwow.min.js%2Cjquery-numerator.js%2CsimpleParallax.min.js%2Cowl.carousel.min.js&#038;premium=%2Cchart.min.js%2Cpremium-frontend.js%2Cshuffle.min.js&#038;ver=1.6.0'></script>
    <script type='text/javascript' src='https://codeolsolutions.co.ke/code/bootstrap.bundle.min.js'></script>

    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://codeolsolutions.co.ke/xmlrpc.php?rsd" />
    <meta name="generator" content="SitePad 5.1.6" />
    <link rel="canonical" href="https://codeolsolutions.co.ke/about/" />
    <link rel='shortlink' href='https://codeolsolutions.co.ke/?p=34' />
    <link rel="alternate" type="application/json+oembed"
        href="https://codeolsolutions.co.ke/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcodeolsolutions.co.ke%2Fabout%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://codeolsolutions.co.ke/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcodeolsolutions.co.ke%2Fabout%2F&#038;format=xml" />
    <style id="setting-button-design">
        .button-design .pagelayer-btn-holder :before {
            position: absolute;
            padding-top: 10px;
            margin-top: -16px;
            margin-bottom: 10px;
            content: '';
            left: 80%;
            top: 0;
            width: 45%;
            height: 280%;
            z-index: -1;
            opacity: 1;
            transform: skewX(-30deg);
            transition: all .4s;

            background: #F59019;
        }

        .button-design .pagelayer-btn-holder {
            border-radius: 0px
        }
    </style>
    <script type="text/javascript">

        // Make $ is jQuery
        $ = jQuery;

    </script>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body class="page-template-default page page-id-35 wp-embed-responsive pagelayer-body">

    <header class="pagelayer-header">
        <div pagelayer-id="lv95919" class="p-lv95919 pagelayer-post_props">
        </div>
        <div pagelayer-id="9ub4377"
            class="p-9ub4377 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default pagelayer-hide-tablet pagelayer-hide-mobile">
            <style pagelayer-style-id="9ub4377">
                .p-9ub4377 .pagelayer-col-holder {
                    padding: 5px
                }

                .p-9ub4377>.pagelayer-background-overlay {
                    -webkit-transition: all 400ms !important;
                    transition: all 400ms !important
                }

                .p-9ub4377 .pagelayer-svg-top .pagelayer-shape-fill {
                    fill: #227bc3
                }

                .p-9ub4377 .pagelayer-row-svg .pagelayer-svg-top {
                    width: 100%;
                    height: 100px
                }

                .p-9ub4377 .pagelayer-svg-bottom .pagelayer-shape-fill {
                    fill: #e44993
                }

                .p-9ub4377 .pagelayer-row-svg .pagelayer-svg-bottom {
                    width: 100%;
                    height: 100px
                }

                .p-9ub4377 {
                    background: #000000
                }
            </style>




            <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
                <div pagelayer-id="u718289" class="p-u718289 pagelayer-col pagelayer-col-3">
                    <style pagelayer-style-id="u718289">
                        .p-u718289 {
                            align-content: center !important
                        }

                        .p-u718289 .pagelayer-col-holder>div:not(:last-child) {
                            margin-bottom: 1px
                        }

                        .p-u718289>.pagelayer-background-overlay {
                            -webkit-transition: all 400ms !important;
                            transition: all 400ms !important
                        }
                    </style>



                    <div class="pagelayer-col-holder">
                        <div pagelayer-id="mfb4896" class="p-mfb4896 pagelayer-email">
                            <style pagelayer-style-id="mfb4896">
                                .p-mfb4896 .pagelayer-email *,
                                .p-mfb4896 .pagelayer-email {
                                    color: #e87d17
                                }

                                .p-mfb4896 .pagelayer-email-holder {
                                    justify-content: flex-start
                                }

                                body:not(.rtl) .p-mfb4896 .pagelayer-email-icon {
                                    margin-right: 10px
                                }

                                body.rtl .p-mfb4896 .pagelayer-email-icon {
                                    margin-left: 10px
                                }

                                .p-mfb4896 .pagelayer-email-icon i {
                                    color: #f59019;
                                    font-size: 20px
                                }
                            </style>
                            <div class="pagelayer-email-holder">
                                <span class="pagelayer-email-icon"><i class="fas fa-envelope"></i></span>
                                <span class="pagelayer-email">info@codeolsolutions.co.ke</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div pagelayer-id="cb82267" class="p-cb82267 pagelayer-col pagelayer-col-7">
                    <style pagelayer-style-id="cb82267">
                        .p-cb82267 {
                            align-content: center !important
                        }

                        .p-cb82267 .pagelayer-col-holder>div:not(:last-child) {
                            margin-bottom: 1px
                        }

                        .p-cb82267>.pagelayer-background-overlay {
                            -webkit-transition: all 400ms !important;
                            transition: all 400ms !important
                        }
                    </style>



                    <div class="pagelayer-col-holder">
                        <div pagelayer-id="abs3346" class="p-abs3346 pagelayer-address">
                            <style pagelayer-style-id="abs3346">
                                .p-abs3346 .pagelayer-address *,
                                .p-abs3346 .pagelayer-address {
                                    color: #e87d17
                                }

                                .p-abs3346 .pagelayer-address-holder {
                                    justify-content: flex-start
                                }

                                body:not(.rtl) .p-abs3346 .pagelayer-address-icon {
                                    margin-right: 10px
                                }

                                body.rtl .p-abs3346 .pagelayer-address-icon {
                                    margin-left: 10px
                                }

                                .p-abs3346 .pagelayer-address-icon i {
                                    color: #f59019;
                                    font-size: 20px
                                }
                            </style>
                            <div class="pagelayer-address-holder">
                                <span class="pagelayer-address-icon"><i class="fas fa-map-marker-alt"></i></span>
                                <span class="pagelayer-address">
                                    2nd Floor, Repen Complex
                                    Mombasa Road</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div pagelayer-id="gii5492" class="p-gii5492 pagelayer-col pagelayer-col-2">
                    <style pagelayer-style-id="gii5492">
                        .p-gii5492 .pagelayer-col-holder>div:not(:last-child) {
                            margin-bottom: 1px
                        }

                        .p-gii5492>.pagelayer-background-overlay {
                            -webkit-transition: all 400ms !important;
                            transition: all 400ms !important
                        }
                    </style>



                    <div class="pagelayer-col-holder">
                        <div pagelayer-id="ljo2942"
                            class="p-ljo2942 pagelayer-social_grp pagelayer-social-shape-circle">
                            <style pagelayer-style-id="ljo2942">
                                .p-ljo2942 i {
                                    height: 1em;
                                    width: 1em;
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%)
                                }

                                .p-ljo2942 .pagelayer-icon-holder {
                                    position: relative;
                                    min-height: 1em;
                                    min-width: 1em;
                                    padding: calc(0.5em + 6px);
                                    font-size: 18px;
                                    background-color: #010101 !important;
                                    border-style: solid;
                                    border-color: rgba(234, 234, 234, 0.88);
                                    border-top-width: 2px;
                                    border-right-width: 2px;
                                    border-bottom-width: 2px;
                                    border-left-width: 2px;
                                    -webkit-transition: all 400ms;
                                    transition: all 400ms
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-ljo2942 .pagelayer-icon-holder {
                                        padding: calc(0.5em + 5px);
                                        font-size: 18px
                                    }
                                }

                                .p-ljo2942 {
                                    text-align: right
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-ljo2942 {
                                        text-align: left
                                    }
                                }

                                @media (max-width: 500px) {
                                    .p-ljo2942 {
                                        text-align: left
                                    }
                                }

                                .p-ljo2942>div {
                                    display: inline-block
                                }

                                .p-ljo2942 .pagelayer-social {
                                    padding: 6px
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-ljo2942 .pagelayer-social {
                                        padding: 5px
                                    }
                                }

                                .p-ljo2942 .pagelayer-social-fa {
                                    font-size: 18px;
                                    color: #ffffff !important;
                                    -webkit-transition: all 400ms;
                                    transition: all 400ms
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-ljo2942 .pagelayer-social-fa {
                                        font-size: 18px
                                    }
                                }

                                .p-ljo2942 .pagelayer-icon-holder:hover .pagelayer-social-fa {
                                    color: #ffffff !important
                                }

                                .p-ljo2942 .pagelayer-icon-holder:hover {
                                    background-color: #f59019 !important
                                }
                            </style>
                            <div pagelayer-id="l5p2143" class="p-l5p2143 pagelayer-social">
                                <div class="pagelayer-icon-holder pagelayer-twitter" data-icon="fab fa-twitter">
                                    <a class="pagelayer-ele-link" href="https://twitter.com/sitepad">
                                        <i class="pagelayer-social-fa fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                            <div pagelayer-id="8ke7398" class="p-8ke7398 pagelayer-social">
                                <div class="pagelayer-icon-holder pagelayer-pinterest-p" data-icon="fab fa-pinterest-p">
                                    <a class="pagelayer-ele-link" href="https://facebook.com/sitepad">
                                        <i class="pagelayer-social-fa fab fa-pinterest-p"></i>
                                    </a>
                                </div>
                            </div>
                            <div pagelayer-id="nvh894" class="p-nvh894 pagelayer-social">
                                <div class="pagelayer-icon-holder pagelayer-linkedin-in" data-icon="fab fa-linkedin-in">
                                    <a class="pagelayer-ele-link" href="https://linkedin.com/sitepad">
                                        <i class="pagelayer-social-fa fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div pagelayer-id="k044552"
            class="p-k044552 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default pagelayer-sticky-ele"
            data-sticky-position="top" data-sticky-on="desktop">
            <style pagelayer-style-id="k044552">
                .p-k044552 .pagelayer-col-holder {
                    padding: 10px
                }

                .p-k044552>.pagelayer-background-overlay {
                    -webkit-transition: all 400ms !important;
                    transition: all 400ms !important
                }

                .p-k044552 .pagelayer-svg-top .pagelayer-shape-fill {
                    fill: #227bc3
                }

                .p-k044552 .pagelayer-row-svg .pagelayer-svg-top {
                    width: 100%;
                    height: 100px
                }

                .p-k044552 .pagelayer-svg-bottom .pagelayer-shape-fill {
                    fill: #e44993
                }

                .p-k044552 .pagelayer-row-svg .pagelayer-svg-bottom {
                    width: 100%;
                    height: 100px
                }

                .p-k044552 {
                    background: #ffffff
                }
            </style>




            <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
                <div pagelayer-id="xad1860" class="p-xad1860 pagelayer-col">
                    <style pagelayer-style-id="xad1860">
                        .p-xad1860 .pagelayer-col-holder>div:not(:last-child) {
                            margin-bottom: 1px
                        }

                        .pagelayer-row-holder [pagelayer-id="xad1860"] {
                            width: 30%
                        }

                        @media (max-width: 768px) and (min-width: 501px) {
                            .pagelayer-row-holder [pagelayer-id="xad1860"] {
                                width: 80%
                            }
                        }

                        @media (max-width: 500px) {
                            .pagelayer-row-holder [pagelayer-id="xad1860"] {
                                width: 85%
                            }
                        }

                        .p-xad1860>.pagelayer-background-overlay {
                            -webkit-transition: all 400ms !important;
                            transition: all 400ms !important
                        }
                    </style>



                    <div class="pagelayer-col-holder">
                        <div pagelayer-id="j371938" class="p-j371938 pagelayer-wp_title">
                            <style pagelayer-style-id="j371938">
                                .p-j371938 .pagelayer-wp-title-heading {
                                    font-family: ;
                                    font-size: 45px !important;
                                    font-style:  !important;
                                    font-weight:  !important;
                                    font-variant:  !important;
                                    text-decoration-line:  !important;
                                    text-decoration-style: Solid !important;
                                    line-height: em !important;
                                    text-transform: Capitalize !important;
                                    letter-spacing: px !important;
                                    word-spacing: px !important;
                                    color: #000000;
                                    text-align: left;
                                    padding: 0px 0px 0px 20px
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-j371938 .pagelayer-wp-title-heading {
                                        font-family: ;
                                        font-size: 30px !important;
                                        font-style:  !important;
                                        font-weight:  !important;
                                        font-variant:  !important;
                                        text-decoration-line:  !important;
                                        text-decoration-style: Solid !important;
                                        line-height: em !important;
                                        text-transform:  !important;
                                        letter-spacing: px !important;
                                        word-spacing: px !important
                                    }
                                }

                                @media (max-width: 500px) {
                                    .p-j371938 .pagelayer-wp-title-heading {
                                        font-family: ;
                                        font-size: 25px !important;
                                        font-style:  !important;
                                        font-weight:  !important;
                                        font-variant:  !important;
                                        text-decoration-line:  !important;
                                        text-decoration-style: Solid !important;
                                        line-height: em !important;
                                        text-transform:  !important;
                                        letter-spacing: px !important;
                                        word-spacing: px !important
                                    }
                                }

                                .p-j371938 .pagelayer-wp-title-img {
                                    width: 70%;
                                    height: auto
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-j371938 .pagelayer-wp-title-img {
                                        width: 9%;
                                        height: auto
                                    }
                                }

                                @media (max-width: 500px) {
                                    .p-j371938 .pagelayer-wp-title-img {
                                        width: 10%;
                                        height: auto
                                    }
                                }
                            </style>
                            <div class="pagelayer-wp-title-content">
                                <div class="pagelayer-wp-title-section">
                                    <a href="https://www.codeolsolutions.co.ke"
                                        class="pagelayer-wp-title-link pagelayer-ele-link pagelayer-wp-title-align-left pagelayer-wp-title-vertical-middle">
                                        <img class="pagelayer-img pagelayer-wp-title-img"
                                            src="https://www.codeolsolutions.co.ke/code/sitepad-data/uploads/logo01.png" title="logo01" alt="logo01" />
                                        <!-- <div class="pagelayer-wp-title-holder">
											<div class="pagelayer-wp-title-heading">Codeol Business Solutions</div>

										</div> -->
                                    </a>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div pagelayer-id="ayn3307" class="p-ayn3307 pagelayer-col">
                    <style pagelayer-style-id="ayn3307">
                        .p-ayn3307 {
                            align-content: center !important
                        }

                        .p-ayn3307 .pagelayer-col-holder>div:not(:last-child) {
                            margin-bottom: 1px
                        }

                        .pagelayer-row-holder [pagelayer-id="ayn3307"] {
                            width: 55%
                        }

                        @media (max-width: 768px) and (min-width: 501px) {
                            .pagelayer-row-holder [pagelayer-id="ayn3307"] {
                                width: 20%
                            }
                        }

                        @media (max-width: 500px) {
                            .pagelayer-row-holder [pagelayer-id="ayn3307"] {
                                width: 15%
                            }
                        }

                        .p-ayn3307>.pagelayer-background-overlay {
                            -webkit-transition: all 400ms !important;
                            transition: all 400ms !important
                        }
                    </style>



                    <div class="pagelayer-col-holder">
                        <div pagelayer-id="hmq2281" class="p-hmq2281 pagelayer-wp_menu">
                            <style pagelayer-style-id="hmq2281">
                                .p-hmq2281 .pagelayer-wp_menu-ul {
                                    text-align: right
                                }

                                .p-hmq2281 .pagelayer-wp-menu-container li.menu-item {
                                    list-style: none
                                }

                                .p-hmq2281 .pagelayer-wp_menu-ul>li a:first-child {
                                    color: #040404
                                }

                                .p-hmq2281 .pagelayer-wp_menu-ul>li>a:hover {
                                    color: #f59019
                                }

                                .p-hmq2281 .pagelayer-wp_menu-ul>li.pagelayer-active-sub-menu>a:hover {
                                    color: #f59019
                                }

                                .p-hmq2281 .pagelayer-menu-hover-background .pagelayer-wp_menu-ul>li:hover {
                                    background-color: #f59019
                                }

                                .p-hmq2281 .pagelayer-wp_menu-ul>li>a:hover:before {
                                    background-color: #f59019;
                                    border-color: #f59019
                                }

                                .p-hmq2281 .pagelayer-wp_menu-ul>li>a:hover:after {
                                    background-color: #f59019;
                                    border-color: #f59019
                                }

                                .p-hmq2281 .pagelayer-wp_menu-ul>li.pagelayer-active-sub-menu {
                                    background-color: #f59019
                                }

                                .p-hmq2281 .pagelayer-wp_menu-ul>li.current-menu-item>a {
                                    color: #f59019
                                }

                                .p-hmq2281 .pagelayer-wp_menu-ul>li>a {
                                    padding-left: 10px;
                                    padding-right: 10px;
                                    padding-top: 10px;
                                    padding-bottom: 10px
                                }

                                .p-hmq2281 ul.sub-menu li>a {
                                    justify-content: left !important
                                }

                                .p-hmq2281 .pagelayer-menu-type-horizontal .sub-menu {
                                    left: 0px
                                }

                                .p-hmq2281 .pagelayer-menu-type-horizontal .sub-menu .sub-menu {
                                    left: unset;
                                    left: 100% !important;
                                    top: 0px
                                }

                                .p-hmq2281 .pagelayer-wp-menu-container ul.sub-menu>li a {
                                    color: #ffffff
                                }

                                .p-hmq2281 .pagelayer-wp-menu-container ul.sub-menu {
                                    background-color: #0986c0
                                }

                                .p-hmq2281 .pagelayer-wp-menu-container ul.sub-menu li a {
                                    padding-left: 10px;
                                    padding-right: 10px;
                                    padding-top: 10px;
                                    padding-bottom: 10px
                                }

                                .p-hmq2281 .pagelayer-wp-menu-container .sub-menu a {
                                    margin-left: 10px
                                }

                                .p-hmq2281 .pagelayer-wp-menu-container .sub-menu .sub-menu a {
                                    margin-left: calc(2 * 10px)
                                }

                                .p-hmq2281 .pagelayer-primary-menu-bar {
                                    text-align: center
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-hmq2281 .pagelayer-primary-menu-bar {
                                        text-align: right
                                    }
                                }

                                @media (max-width: 500px) {
                                    .p-hmq2281 .pagelayer-primary-menu-bar {
                                        text-align: right
                                    }
                                }

                                .p-hmq2281 .pagelayer-primary-menu-bar i {
                                    color: #ffffff;
                                    background-color: #f59019;
                                    font-size: 30px
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-hmq2281 .pagelayer-primary-menu-bar i {
                                        font-size: 22px;
                                        padding: 8px 8px
                                    }
                                }

                                @media (max-width: 500px) {
                                    .p-hmq2281 .pagelayer-primary-menu-bar i {
                                        font-size: 22px;
                                        padding: 8px 8px
                                    }
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-hmq2281 .pagelayer-menu-type-dropdown .pagelayer-wp_menu-ul>li>a {
                                        justify-content: center
                                    }
                                }

                                @media (max-width: 500px) {
                                    .p-hmq2281 .pagelayer-menu-type-dropdown .pagelayer-wp_menu-ul>li>a {
                                        justify-content: center
                                    }
                                }

                                .p-hmq2281 .pagelayer-menu-type-dropdown {
                                    width: 30%;
                                    background-color: #ffffff
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-hmq2281 .pagelayer-menu-type-dropdown {
                                        width: 70%
                                    }
                                }

                                @media (max-width: 500px) {
                                    .p-hmq2281 .pagelayer-menu-type-dropdown {
                                        width: 80%
                                    }
                                }

                                .p-hmq2281 .pagelayer-menu-type-dropdown .pagelayer-wp_menu-ul {
                                    width: 100%;
                                    top: 8%;
                                    transform: translateY(-8%)
                                }

                                .p-hmq2281 .pagelayer-wp_menu-close i {
                                    font-size: 25px;
                                    padding: 8px;
                                    color: rgba(255, 255, 255, 0.41);
                                    background-color: rgba(0, 0, 0, 0.21);
                                    -webkit-transition: all 600ms !important;
                                    transition: all 600ms !important
                                }

                                .p-hmq2281 .pagelayer-wp_menu-close i:hover {
                                    color: #ffffff;
                                    background-color: #000000
                                }
                            </style>
                            <div class="pagelayer-wp-menu-holder" data-layout="horizontal" data-submenu_ind="caret-down"
                                data-drop_breakpoint="tablet">
                                <div class="pagelayer-primary-menu-bar"><i class="fas fa-bars"
                                        data-icon="fas fa-bars"></i></div>
                                <div class="pagelayer-wp-menu-container pagelayer-menu-type-horizontal pagelayer-menu-hover-underline slide pagelayer-wp_menu-right"
                                    data-align="right">
                                    <div class="pagelayer-wp_menu-close"><i class="fas fa-times"></i></div>
                                    <div class="menu-avocation-header-menu-container">
                                        <ul id="2" class="pagelayer-wp_menu-ul">
                                            <li id="menu-item-39"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-36 current_page_item menu-item-39">
                                                <a href="https://www.codeolsolutions.co.ke/code"
                                                    aria-current="page"><span
                                                        class="pagelayer-nav-menu-title">Home</span></a>
                                                <div class="pagelayer-mega-menu pagelayer-mega-editor-39"></div>
                                            </li>
                                            <li id="menu-item-40"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40">
                                                <a href="https://www.codeolsolutions.co.ke/code/about/"><span
                                                        class="pagelayer-nav-menu-title">About</span></a>
                                                <div class="pagelayer-mega-menu pagelayer-mega-editor-40"></div>
                                            </li>
                                            <li id="menu-item-41"
                                                class="nav-item dropdown menu-item menu-item-type-post_type">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"><span>Services</span></a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item"
                                                            href="https://www.codeolsolutions.co.ke/code/pa">Procurement
                                                            Advisory</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://www.codeolsolutions.co.ke/code/tc">Technology
                                                            Consulting</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="https://www.codeolsolutions.co.ke/code/bpc">Business
                                                            Process Consulting</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-40"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40">
                                                <a href="https://www.codeolsolutions.co.ke/code/solutions/"><span
                                                        class="pagelayer-nav-menu-title">Solutions</span></a>
                                                <div class="pagelayer-mega-menu pagelayer-mega-editor-40"></div>
                                            </li>
                                            <!-- <li id="menu-item-41"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41">
												<a href="https://www.codeolsolutions.co.ke/code/service/"><span
														class="pagelayer-nav-menu-title">Services</span></a>
												<div class="pagelayer-mega-menu pagelayer-mega-editor-41"></div>
											</li> -->
                                            <!-- <li id="menu-item-42"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42">
												<a href="https://www.codeolsolutions.co.ke/code/blog/"><span
														class="pagelayer-nav-menu-title">Blog</span></a>
												<div class="pagelayer-mega-menu pagelayer-mega-editor-42"></div>
											</li> -->
                                            <li id="menu-item-43"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43">
                                                <a href="https://www.codeolsolutions.co.ke/code/contact/"><span
                                                        class="pagelayer-nav-menu-title">Contact</span></a>
                                                <div class="pagelayer-mega-menu pagelayer-mega-editor-43"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div pagelayer-id="zgo112" class="p-zgo112 pagelayer-col pagelayer-hide-tablet pagelayer-hide-mobile">
                    <style pagelayer-style-id="zgo112">
                        .p-zgo112 {
                            align-content: center !important
                        }

                        .p-zgo112 .pagelayer-col-holder>div:not(:last-child) {
                            margin-bottom: 1px
                        }

                        .pagelayer-row-holder [pagelayer-id="zgo112"] {
                            width: 15%
                        }

                        .p-zgo112>.pagelayer-background-overlay {
                            -webkit-transition: all 400ms !important;
                            transition: all 400ms !important
                        }
                    </style>



                    <div class="pagelayer-col-holder">
                        <div pagelayer-id="dez7660" class="p-dez7660 pagelayer-btn button-design">
                            <style pagelayer-style-id="dez7660">
                                .p-dez7660 {
                                    text-align: right
                                }

                                .p-dez7660 .pagelayer-btn-holder {
                                    padding: calc(35px / 2) 35px;
                                    background-color: #06044d;
                                    color: #ffffff;
                                    -webkit-transition: all 400ms !important;
                                    transition: all 400ms !important
                                }

                                .p-dez7660 .pagelayer-btn-anim-thin {
                                    background-color: unset !important
                                }

                                .p-dez7660 .pagelayer-btn-anim-thin::before {
                                    background-color: #2759ab
                                }

                                .p-dez7660 .pagelayer-btn-anim-thin::after {
                                    background-color: #2759ab
                                }

                                .p-dez7660 .pagelayer-btn-custom:hover,
                                .p-dez7660 .pagelayer-btn-anim-slide:after {
                                    background-color: #f59019
                                }
                            </style>
                            <a class="pagelayer-btn-holder pagelayer-ele-link pagelayer-btn-anim pagelayer-btn-custom {{icon_position}} pagelayer-btn-anim-slide pagelayer-btn-anim-right"
                                href="contact/">

                                <span class="pagelayer-btn-text">Get Quote</span>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div pagelayer-id="bdd7314" class="p-bdd7314 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default">
            <style pagelayer-style-id="bdd7314">
                .p-bdd7314 .pagelayer-col-holder {
                    padding: 10px
                }

                .p-bdd7314>.pagelayer-background-overlay {
                    background-color: #000000;
                    opacity: 0.5;
                    -webkit-transition: all 400ms !important;
                    transition: all 400ms !important
                }

                .p-bdd7314 .pagelayer-svg-top .pagelayer-shape-fill {
                    fill: #227bc3
                }

                .p-bdd7314 .pagelayer-row-svg .pagelayer-svg-top {
                    width: 100%;
                    height: 100px
                }

                .p-bdd7314 .pagelayer-svg-bottom .pagelayer-shape-fill {
                    fill: #e44993
                }

                .p-bdd7314 .pagelayer-row-svg .pagelayer-svg-bottom {
                    width: 100%;
                    height: 100px
                }

                .p-bdd7314 {
                    background-image: url("https://www.codeolsolutions.co.ke/code/sitepad-data/uploads/header01.jpg");
                    background-attachment: scroll;
                    background-position-x: center;
                    background-position-y: center;
                    background-repeat: repeat;
                    background-size: cover;
                    padding-top: 100px;
                    padding-right: 0px;
                    padding-bottom: 100px;
                    padding-left: 0px
                }

                @media (max-width: 768px) and (min-width: 501px) {
                    .p-bdd7314 {
                        padding-top: 150px;
                        padding-right: 0px;
                        padding-bottom: 150px;
                        padding-left: 0px
                    }
                }

                @media (max-width: 500px) {
                    .p-bdd7314 {
                        padding-top: 120px;
                        padding-right: 0px;
                        padding-bottom: 120px;
                        padding-left: 0px
                    }
                }
            </style>



            <div class="pagelayer-background-overlay"></div>
            <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
                <div pagelayer-id="lej2934" class="p-lej2934 pagelayer-col">
                    <style pagelayer-style-id="lej2934">
                        .p-lej2934>.pagelayer-background-overlay {
                            -webkit-transition: all 400ms !important;
                            transition: all 400ms !important
                        }
                    </style>



                    <div class="pagelayer-col-holder">
                        <div pagelayer-id="s1t9354" class="p-s1t9354 pagelayer-post_title">
                            <style pagelayer-style-id="s1t9354">
                                .p-s1t9354 .pagelayer-post-title {
                                    color: #ffffff;
                                    font-family: ;
                                    font-size: 50px !important;
                                    font-style:  !important;
                                    font-weight:  !important;
                                    font-variant:  !important;
                                    text-decoration-line:  !important;
                                    text-decoration-style: Solid !important;
                                    line-height: em !important;
                                    text-transform:  !important;
                                    letter-spacing: px !important;
                                    word-spacing: px !important
                                }

                                .p-s1t9354 .pagelayer-post-title * {
                                    color: #ffffff
                                }

                                @media (max-width: 768px) and (min-width: 501px) {
                                    .p-s1t9354 .pagelayer-post-title {
                                        font-family: ;
                                        font-size: 45px !important;
                                        font-style:  !important;
                                        font-weight:  !important;
                                        font-variant:  !important;
                                        text-decoration-line:  !important;
                                        text-decoration-style: Solid !important;
                                        line-height: em !important;
                                        text-transform:  !important;
                                        letter-spacing: px !important;
                                        word-spacing: px !important
                                    }
                                }

                                @media (max-width: 500px) {
                                    .p-s1t9354 .pagelayer-post-title {
                                        font-family: ;
                                        font-size: 40px !important;
                                        font-style:  !important;
                                        font-weight:  !important;
                                        font-variant:  !important;
                                        text-decoration-line:  !important;
                                        text-decoration-style: Solid !important;
                                        line-height: em !important;
                                        text-transform:  !important;
                                        letter-spacing: px !important;
                                        word-spacing: px !important
                                    }
                                }

                                .p-s1t9354 {
                                    text-align: center
                                }
                            </style>
                            <div class="pagelayer-post-title">

                                Contact

                            </div>
                        </div>
                        <div pagelayer-id="lwm4148" class="p-lwm4148 pagelayer-breadcrumb">
                            <style pagelayer-style-id="lwm4148">
                                .p-lwm4148 .pagelayer-breadcrumb-section a {
                                    color: #ffffff
                                }

                                .p-lwm4148 .pagelayer-breadcrumb-section a:hover {
                                    color: #ffffff
                                }

                                .p-lwm4148 .pagelayer-breadcrumb-section {
                                    color: #f59019;
                                    font-family: ;
                                    font-size: px !important;
                                    font-style:  !important;
                                    font-weight: bold !important;
                                    font-variant:  !important;
                                    text-decoration-line:  !important;
                                    text-decoration-style: Solid !important;
                                    line-height: em !important;
                                    text-transform:  !important;
                                    letter-spacing: px !important;
                                    word-spacing: px !important
                                }

                                .p-lwm4148 {
                                    text-align: center
                                }

                                .p-lwm4148 .pagelayer-breadcrumb-sep {
                                    color: #f59019
                                }
                            </style>
                            <!-- <span class="pagelayer-breadcrumb-section"><a href="https://www.codeolsolutions.co.ke"
                                    rel="nofollow">Home</a><b
                                    class="pagelayer-breadcrumb-sep">&nbsp;&#187;&nbsp;</b>Contact</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">



            <article id="post-35" class="post-35 page type-page status-publish hentry">

                <div class="entry-content">
                    <div pagelayer-id="ojs7717" class="p-ojs7717 pagelayer-post_props">
                    </div>
                    <!-- <div pagelayer-id="s136765"
                        class="p-s136765 pagelayer-row pagelayer-row-stretch-full pagelayer-height-default">
                        <style pagelayer-style-id="s136765">
                            .p-s136765>.pagelayer-background-overlay {
                                -webkit-transition: all 400ms !important;
                                transition: all 400ms !important
                            }

                            .p-s136765 .pagelayer-svg-top .pagelayer-shape-fill {
                                fill: #227bc3
                            }

                            .p-s136765 .pagelayer-row-svg .pagelayer-svg-top {
                                width: 100%;
                                height: 100px
                            }

                            .p-s136765 .pagelayer-svg-bottom .pagelayer-shape-fill {
                                fill: #e44993
                            }

                            .p-s136765 .pagelayer-row-svg .pagelayer-svg-bottom {
                                width: 100%;
                                height: 100px
                            }
                        </style>




                        <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-full">
                            <div pagelayer-id="neh8847" class="p-neh8847 pagelayer-col">
                                <style pagelayer-style-id="neh8847">
                                    .p-neh8847>.pagelayer-background-overlay {
                                        -webkit-transition: all 400ms !important;
                                        transition: all 400ms !important
                                    }
                                </style>



                                <div class="pagelayer-col-holder">
                                    <div pagelayer-id="efa8302" class="p-efa8302 pagelayer-google_maps">
                                        <style pagelayer-style-id="efa8302">
                                            .p-efa8302 iframe {
                                                height: 600px
                                            }
                                        </style>
                                        <div class="pagelayer-google-maps-holder">
                                            <iframe marginheight="0" scrolling="no" marginwidth="0" frameborder="0"
                                                src="https://maps.google.com/maps?q=New York, New York, USA&t=m&z=10&output=embed&iwloc=near"
                                                aria-label="New York, New York, USA"></iframe>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div pagelayer-id="mgj3569"
                        class="p-mgj3569 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default">
                        <style pagelayer-style-id="mgj3569">
                            .p-mgj3569 .pagelayer-col-holder {
                                padding: 10px
                            }

                            .p-mgj3569>.pagelayer-background-overlay {
                                -webkit-transition: all 400ms !important;
                                transition: all 400ms !important
                            }

                            .p-mgj3569 .pagelayer-svg-top .pagelayer-shape-fill {
                                fill: #227bc3
                            }

                            .p-mgj3569 .pagelayer-row-svg .pagelayer-svg-top {
                                width: 100%;
                                height: 100px
                            }

                            .p-mgj3569 .pagelayer-svg-bottom .pagelayer-shape-fill {
                                fill: #e44993
                            }

                            .p-mgj3569 .pagelayer-row-svg .pagelayer-svg-bottom {
                                width: 100%;
                                height: 100px
                            }

                            .p-mgj3569 {
                                padding-top: 0px;
                                padding-right: 0px;
                                padding-bottom: 80px;
                                padding-left: 0px
                            }

                            @media (max-width: 768px) and (min-width: 501px) {
                                .p-mgj3569 {
                                    padding-top: 40px;
                                    padding-right: 10px;
                                    padding-bottom: 70px;
                                    padding-left: 10px
                                }
                            }

                            @media (max-width: 500px) {
                                .p-mgj3569 {
                                    padding-top: 40px;
                                    padding-right: 10px;
                                    padding-bottom: 70px;
                                    padding-left: 10px
                                }
                            }
                        </style>




                        <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
                            <div pagelayer-id="xkz3685" class="p-xkz3685 pagelayer-col pagelayer-col-6">
                                <style pagelayer-style-id="xkz3685">
                                    .p-xkz3685 .pagelayer-col-holder>div:not(:last-child) {
                                        margin-bottom: 1px
                                    }

                                    .p-xkz3685>.pagelayer-background-overlay {
                                        -webkit-transition: all 400ms !important;
                                        transition: all 400ms !important
                                    }

                                    .p-xkz3685 {
                                        margin-top: 0px;
                                        margin-right: 0px;
                                        margin-bottom: 0px;
                                        margin-left: 0px;
                                        padding-top: 0px;
                                        padding-right: 0px;
                                        padding-bottom: 0px;
                                        padding-left: 0px
                                    }

                                    @media (max-width: 768px) and (min-width: 501px) {
                                        .p-xkz3685 {
                                            padding-top: 0px;
                                            padding-right: 0px;
                                            padding-bottom: 20px;
                                            padding-left: 0px
                                        }
                                    }

                                    @media (max-width: 500px) {
                                        .p-xkz3685 {
                                            padding-top: 0px;
                                            padding-right: 0px;
                                            padding-bottom: 20px;
                                            padding-left: 0px
                                        }
                                    }
                                </style>



                                <div class="pagelayer-col-holder">
                                    <div pagelayer-id="0u15332" class="p-0u15332 pagelayer-heading">
                                        <style pagelayer-style-id="0u15332">
                                            .p-0u15332 {
                                                margin-top: 20px;
                                                margin-right: 0px;
                                                margin-bottom: 0px;
                                                margin-left: 0px
                                            }

                                            .p-0u15332 .heading02:before {
                                                content: "";
                                                display: inline-block;
                                                vertical-align: middle;
                                                height: 2px;
                                                width: 40px;
                                                margin-right: 10px;
                                                margin-left: 10px;
                                                margin-bottom: 3px;
                                                background: #F4A046;
                                                position: relative;
                                            }
                                        </style>
                                        <div class="pagelayer-heading-holder">
                                            <h6 class="heading02">CONTACT US</h6>
                                        </div>

                                    </div>
                                    <div pagelayer-id="nlk9471" class="p-nlk9471 pagelayer-heading">
                                        <style pagelayer-style-id="nlk9471">
                                            .p-nlk9471 {
                                                padding-top: 0px;
                                                padding-right: 0px;
                                                padding-bottom: 0px;
                                                padding-left: 0px
                                            }
                                        </style>
                                        <div class="pagelayer-heading-holder">
                                            <h3>Codeol Business Solutions Ltd</h3>
                                        </div>

                                    </div>
                                    <div pagelayer-id="64l7048"
                                        class="p-64l7048 pagelayer-inner_row pagelayer-row-stretch-auto pagelayer-height-default">
                                        <style pagelayer-style-id="64l7048">
                                            .p-64l7048 .pagelayer-col-holder {
                                                padding: 10px
                                            }

                                            .p-64l7048>.pagelayer-background-overlay {
                                                -webkit-transition: all 400ms !important;
                                                transition: all 400ms !important
                                            }

                                            .p-64l7048 .pagelayer-svg-top .pagelayer-shape-fill {
                                                fill: #227bc3
                                            }

                                            .p-64l7048 .pagelayer-row-svg .pagelayer-svg-top {
                                                width: 100%;
                                                height: 100px
                                            }

                                            .p-64l7048 .pagelayer-svg-bottom .pagelayer-shape-fill {
                                                fill: #e44993
                                            }

                                            .p-64l7048 .pagelayer-row-svg .pagelayer-svg-bottom {
                                                width: 100%;
                                                height: 100px
                                            }
                                        </style>




                                        
                                    </div>
                                    <div pagelayer-id="w6w8327"
                                        class="p-w6w8327 pagelayer-inner_row pagelayer-row-stretch-auto pagelayer-height-default">
                                        <style pagelayer-style-id="w6w8327">
                                            .p-w6w8327 .pagelayer-col-holder {
                                                padding: 10px
                                            }

                                            .p-w6w8327>.pagelayer-background-overlay {
                                                -webkit-transition: all 400ms !important;
                                                transition: all 400ms !important
                                            }

                                            .p-w6w8327 .pagelayer-svg-top .pagelayer-shape-fill {
                                                fill: #227bc3
                                            }

                                            .p-w6w8327 .pagelayer-row-svg .pagelayer-svg-top {
                                                width: 100%;
                                                height: 100px
                                            }

                                            .p-w6w8327 .pagelayer-svg-bottom .pagelayer-shape-fill {
                                                fill: #e44993
                                            }

                                            .p-w6w8327 .pagelayer-row-svg .pagelayer-svg-bottom {
                                                width: 100%;
                                                height: 100px
                                            }
                                        </style>




                                        <div
                                            class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
                                            <div pagelayer-id="yxc9123" class="p-yxc9123 pagelayer-col">
                                                <style pagelayer-style-id="yxc9123">
                                                    .p-yxc9123 {
                                                        align-content: center !important
                                                    }

                                                    .pagelayer-row-holder [pagelayer-id="yxc9123"] {
                                                        width: 17.45%
                                                    }

                                                    .p-yxc9123>.pagelayer-background-overlay {
                                                        -webkit-transition: all 400ms !important;
                                                        transition: all 400ms !important
                                                    }
                                                </style>



                                                <div class="pagelayer-col-holder">
                                                    <div pagelayer-id="nbp2538" class="p-nbp2538 pagelayer-icon">
                                                        <style pagelayer-style-id="nbp2538">
                                                            .p-nbp2538 i {
                                                                padding: calc(0.5em + 1px);
                                                                height: 1em;
                                                                width: 1em;
                                                                position: relative;
                                                                color: #f59019;
                                                                -webkit-transition: all 400ms;
                                                                transition: all 400ms
                                                            }

                                                            .p-nbp2538 {
                                                                text-align: center;
                                                                line-height: 1em !important
                                                            }

                                                            .p-nbp2538 i:before {
                                                                position: absolute;
                                                                top: 50%;
                                                                left: 50%;
                                                                transform: translate(-50%, -50%)
                                                            }

                                                            .p-nbp2538 i:hover:before {
                                                                -webkit-transition: all 400ms;
                                                                transition: all 400ms
                                                            }
                                                        </style>
                                                        <div class="pagelayer-icon-holder">

                                                            <i
                                                                class="fas fa-map-marked-alt {{bg_shape}} pagelayer-icon-large pagelayer-animation-{{anim_hover}}"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div pagelayer-id="o3p1134" class="p-o3p1134 pagelayer-col">
                                                <style pagelayer-style-id="o3p1134">
                                                    .p-o3p1134 {
                                                        align-content: center !important
                                                    }

                                                    .pagelayer-row-holder [pagelayer-id="o3p1134"] {
                                                        width: 82.37%
                                                    }

                                                    .p-o3p1134>.pagelayer-background-overlay {
                                                        -webkit-transition: all 400ms !important;
                                                        transition: all 400ms !important
                                                    }
                                                </style>



                                                <div class="pagelayer-col-holder">
                                                    <div pagelayer-id="ct43482" class="p-ct43482 pagelayer-address">
                                                        <style pagelayer-style-id="ct43482">
                                                            .p-ct43482 {
                                                                padding-top: 10px;
                                                                padding-right: 0px;
                                                                padding-bottom: 0px;
                                                                padding-left: 0px
                                                            }
                                                        </style>
                                                        <div class="pagelayer-address-holder">
                                                            <span class="pagelayer-address-icon"><i class=""></i></span>
                                                            <span class="pagelayer-address">2nd Floor, Repen Complex
                                                                Mombasa Road</br>
                                                                P.O BOX 1191 - 00300 Nairobi</br>
                                                                Phone: 020 241 9771, +254 741 197 710, 0716 629 113</br>
                                                                
                                                                Email: info@codeolsolutions.co.ke
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div pagelayer-id="5tw4643"
                                        class="p-5tw4643 pagelayer-inner_row pagelayer-row-stretch-auto pagelayer-height-default">
                                        <style pagelayer-style-id="5tw4643">
                                            .p-5tw4643 .pagelayer-col-holder {
                                                padding: 10px
                                            }

                                            .p-5tw4643>.pagelayer-background-overlay {
                                                -webkit-transition: all 400ms !important;
                                                transition: all 400ms !important
                                            }

                                            .p-5tw4643 .pagelayer-svg-top .pagelayer-shape-fill {
                                                fill: #227bc3
                                            }

                                            .p-5tw4643 .pagelayer-row-svg .pagelayer-svg-top {
                                                width: 100%;
                                                height: 100px
                                            }

                                            .p-5tw4643 .pagelayer-svg-bottom .pagelayer-shape-fill {
                                                fill: #e44993
                                            }

                                            .p-5tw4643 .pagelayer-row-svg .pagelayer-svg-bottom {
                                                width: 100%;
                                                height: 100px
                                            }
                                        </style>




                                        <div
                                            class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
                                            <div pagelayer-id="fbm3645" class="p-fbm3645 pagelayer-col">
                                                <style pagelayer-style-id="fbm3645">
                                                    .p-fbm3645 {
                                                        align-content: center !important
                                                    }

                                                    .pagelayer-row-holder [pagelayer-id="fbm3645"] {
                                                        width: 17.45%
                                                    }

                                                    .p-fbm3645>.pagelayer-background-overlay {
                                                        -webkit-transition: all 400ms !important;
                                                        transition: all 400ms !important
                                                    }
                                                </style>



                                                <div class="pagelayer-col-holder">
                                                    <div pagelayer-id="sn16994" class="p-sn16994 pagelayer-icon">
                                                        <style pagelayer-style-id="sn16994">
                                                            .p-sn16994 i {
                                                                padding: calc(0.5em + 1px);
                                                                height: 1em;
                                                                width: 1em;
                                                                position: relative;
                                                                color: #f59019;
                                                                -webkit-transition: all 400ms;
                                                                transition: all 400ms
                                                            }

                                                            .p-sn16994 {
                                                                text-align: center;
                                                                line-height: 1em !important
                                                            }

                                                            .p-sn16994 i:before {
                                                                position: absolute;
                                                                top: 50%;
                                                                left: 50%;
                                                                transform: translate(-50%, -50%)
                                                            }

                                                            .p-sn16994 i:hover:before {
                                                                -webkit-transition: all 400ms;
                                                                transition: all 400ms
                                                            }
                                                        </style>
                                                        <div class="pagelayer-icon-holder">

                                                            <i
                                                                class="fas fa-clock {{bg_shape}} pagelayer-icon-large pagelayer-animation-{{anim_hover}}"></i>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div pagelayer-id="x3q8780" class="p-x3q8780 pagelayer-col">
                                                <style pagelayer-style-id="x3q8780">
                                                    .p-x3q8780 {
                                                        align-content: center !important
                                                    }

                                                    .pagelayer-row-holder [pagelayer-id="x3q8780"] {
                                                        width: 82.37%
                                                    }

                                                    .p-x3q8780>.pagelayer-background-overlay {
                                                        -webkit-transition: all 400ms !important;
                                                        transition: all 400ms !important
                                                    }
                                                </style>



                                                <div class="pagelayer-col-holder">
                                                    <div pagelayer-id="jpl1538" class="p-jpl1538 pagelayer-heading">
                                                        <style pagelayer-style-id="jpl1538">
                                                            .p-jpl1538 .pagelayer-heading-holder * {
                                                                color: #000000
                                                            }

                                                            .p-jpl1538 .pagelayer-heading-holder {
                                                                color: #000000
                                                            }

                                                            .p-jpl1538 {
                                                                padding-top: 10px;
                                                                padding-right: 0px;
                                                                padding-bottom: 0px;
                                                                padding-left: 0px
                                                            }
                                                        </style>
                                                        <div class="pagelayer-heading-holder">
                                                            <p><b>Mon-Fri </b> : 8am - 9pm</p>
                                                            <p><b> Sunday Closed </b></p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div pagelayer-id="rim477" class="p-rim477 pagelayer-col pagelayer-col-6">
                                <style pagelayer-style-id="rim477">
                                    .p-rim477 {
                                        align-content: center !important;
                                        background: #ffffff;
                                        margin-top: -125px;
                                        margin-right: 0px;
                                        margin-bottom: 0px;
                                        margin-left: 0px;
                                        padding-top: 50px;
                                        padding-right: 50px;
                                        padding-bottom: 50px;
                                        padding-left: 50px;
                                        box-shadow: 0px 0px 20px 0px rgba(173, 170, 170, 0.49) !important;
                                        border-radius: 20px 20px 20px 20px;
                                        -webkit-border-radius: 20px 20px 20px 20px;
                                        -moz-border-radius: 20px 20px 20px 20px
                                    }

                                    .p-rim477>.pagelayer-background-overlay {
                                        -webkit-transition: all 400ms !important;
                                        transition: all 400ms !important
                                    }

                                    @media (max-width: 768px) and (min-width: 501px) {
                                        .p-rim477 {
                                            margin-top: 1px;
                                            margin-right: 1px;
                                            margin-bottom: 1px;
                                            margin-left: 1px;
                                            padding-top: 20px;
                                            padding-right: 1px;
                                            padding-bottom: 20px;
                                            padding-left: 1px
                                        }
                                    }

                                    @media (max-width: 500px) {
                                        .p-rim477 {
                                            margin-top: 1px;
                                            margin-right: 1px;
                                            margin-bottom: 1px;
                                            margin-left: 1px;
                                            padding-top: 30px;
                                            padding-right: 1px;
                                            padding-bottom: 20px;
                                            padding-left: 1px
                                        }
                                    }
                                </style>



                                <div class="pagelayer-col-holder">
                                    <div pagelayer-id="odv4886" class="p-odv4886 pagelayer-heading" align="left">
                                        <style pagelayer-style-id="odv4886">
                                            .p-odv4886 {
                                                text-align: left
                                            }
                                        </style>
                                        <div class="pagelayer-heading-holder">
                                            <h3>REQUEST DEMO</h3>
                                        </div>

                                    </div>
                                    <div pagelayer-id="21t8179" class="p-21t8179 pagelayer-contact button-design">
                                        <style pagelayer-style-id="21t8179">
                                            .p-21t8179 .pagelayer-contact-form {
                                                text-align: default
                                            }

                                            .p-21t8179 label {
                                                padding-top: px;
                                                padding-right: px;
                                                padding-bottom: 10px;
                                                padding-left: px
                                            }

                                            .p-21t8179 textarea,
                                            .p-21t8179 input,
                                            .p-21t8179 select,
                                            .p-21t8179 date {
                                                background-color: #f8f8f8
                                            }

                                            .p-21t8179 input,
                                            .p-21t8179 select,
                                            .p-21t8179 textarea {
                                                padding-top: 15px;
                                                padding-right: 15px;
                                                padding-bottom: 15px;
                                                padding-left: 15px;
                                                border-style: solid;
                                                -webkit-transition: all 400ms;
                                                transition: all 400ms
                                            }

                                            .p-21t8179 input[type="checkbox"]+label:before,
                                            .p-21t8179 input[type="radio"] {
                                                height: 10px;
                                                min-height: 10px;
                                                width: 10px
                                            }

                                            .p-21t8179 input[type="checkbox"]+label:before {
                                                border-style: solid
                                            }

                                            .p-21t8179 input,
                                            .p-21t8179 select,
                                            .p-21t8179 textarea,
                                            .p-21t8179 input[type="checkbox"]+label:before {
                                                border-top-width: 1px;
                                                border-right-width: 1px;
                                                border-bottom-width: 1px;
                                                border-left-width: 1px
                                            }

                                            .p-21t8179 .pagelayer-btn-text {
                                                font-family: ;
                                                font-size: px !important;
                                                font-style:  !important;
                                                font-weight: 500 !important;
                                                font-variant:  !important;
                                                text-decoration-line:  !important;
                                                text-decoration-style: Solid !important;
                                                line-height: em !important;
                                                text-transform: Uppercase !important;
                                                letter-spacing: px !important;
                                                word-spacing: px !important
                                            }

                                            .p-21t8179 .pagelayer-btn-holder {
                                                font-family: ;
                                                font-size: px !important;
                                                font-style:  !important;
                                                font-weight: 500 !important;
                                                font-variant:  !important;
                                                text-decoration-line:  !important;
                                                text-decoration-style: Solid !important;
                                                line-height: em !important;
                                                text-transform: Uppercase !important;
                                                letter-spacing: px !important;
                                                word-spacing: px !important;
                                                padding-top: 17px;
                                                padding-right: 36px;
                                                padding-bottom: 17px;
                                                padding-left: 36px;
                                                background-color: #06044d;
                                                color: #ffffff;
                                                -webkit-transition: all 400ms !important;
                                                transition: all 400ms !important
                                            }

                                            .p-21t8179 .pagelayer-contact-submit-btn {
                                                margin-top: 5px;
                                                margin-right: 5px;
                                                margin-bottom: 5px;
                                                margin-left: 5px
                                            }

                                            .p-21t8179 .pagelayer-btn-holder:hover {
                                                background-color: #f59019
                                            }
                                        </style>
                                        <div class="pagelayer-contact-form-div pagelayer-contact-form-holder">
                                            <div class="pagelayer-message-box pagelayer-message-top"></div>
                                            <section class="page-section" id="contact">
                                            <form action="#contact" class="pagelayer-contact-form" id="contact-form" method="POST">
                                                <div class="form-group">
                        <?= $output; ?>
                    </div>
                                                <div class="pagelayer-contact-holder">
                                                    <div pagelayer-id="roi1633"
                                                        class="p-roi1633 pagelayer-contact_item">
                                                        <style pagelayer-style-id="roi1633">
                                                            [pagelayer-id="roi1633"] {
                                                                width: 50%;
                                                                display: inline-block
                                                            }

                                                            @media (max-width: 768px) and (min-width: 501px) {
                                                                [pagelayer-id="roi1633"] {
                                                                    width: 100%
                                                                }
                                                            }

                                                            @media (max-width: 500px) {
                                                                [pagelayer-id="roi1633"] {
                                                                    width: 100%
                                                                }
                                                            }

                                                            .p-roi1633 {
                                                                padding-top: 20px;
                                                                padding-right: 20px;
                                                                padding-bottom: 10px;
                                                                padding-left: 0px
                                                            }

                                                            @media (max-width: 768px) and (min-width: 501px) {
                                                                .p-roi1633 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }

                                                            @media (max-width: 500px) {
                                                                .p-roi1633 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }
                                                           
                                                        </style><input type="text" required="required"
                                                            placeholder="First Name*" name="firstname" />

                                                            <div style="display: none;
visibility: hidden;">
                            <label for="email">Leave this empty</label>
                            <input type="text" name="url" id="email" class="form-control" />
                        </div>
                                                    </div>
                                                    <div pagelayer-id="npj3319"
                                                        class="p-npj3319 pagelayer-contact_item">
                                                        <style pagelayer-style-id="npj3319">
                                                            [pagelayer-id="npj3319"] {
                                                                width: 50%;
                                                                display: inline-block
                                                            }

                                                            @media (max-width: 768px) and (min-width: 501px) {
                                                                [pagelayer-id="npj3319"] {
                                                                    width: 100%
                                                                }
                                                            }

                                                            @media (max-width: 500px) {
                                                                [pagelayer-id="npj3319"] {
                                                                    width: 100%
                                                                }
                                                            }

                                                            .p-npj3319 {
                                                                padding-top: 20px;
                                                                padding-right: 10px;
                                                                padding-bottom: 10px;
                                                                padding-left: 0px
                                                            }

                                                            @media (max-width: 768px) and (min-width: 501px) {
                                                                .p-npj3319 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }

                                                            @media (max-width: 500px) {
                                                                .p-npj3319 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }
                                                        </style><input type="text" required="required"
                                                            placeholder="Last Name*" name="lastname" />
                                                    </div>
                                                    <div pagelayer-id="2tl6208"
                                                        class="p-2tl6208 pagelayer-contact_item">
                                                        <style pagelayer-style-id="2tl6208">
                                                            [pagelayer-id="2tl6208"] {
                                                                width: 100%;
                                                                display: inline-block
                                                            }

                                                            @media (max-width: 500px) {
                                                                [pagelayer-id="2tl6208"] {
                                                                    width: 100%
                                                                }
                                                            }

                                                            .p-2tl6208 {
                                                                padding-top: 10px;
                                                                padding-right: 10px;
                                                                padding-bottom: 10px;
                                                                padding-left: 0px
                                                            }

                                                            @media (max-width: 768px) and (min-width: 501px) {
                                                                .p-2tl6208 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }

                                                            @media (max-width: 500px) {
                                                                .p-2tl6208 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }
                                                        </style><input type="text" required="required"
                                                            placeholder="Job Title*" name="jobtitle" />
                                                    </div>
                                                    <div pagelayer-id="2tl6208"
                                                        class="p-2tl6208 pagelayer-contact_item">
                                                        <style pagelayer-style-id="2tl6208">
                                                            [pagelayer-id="2tl6208"] {
                                                                width: 100%;
                                                                display: inline-block
                                                            }

                                                            @media (max-width: 500px) {
                                                                [pagelayer-id="2tl6208"] {
                                                                    width: 100%
                                                                }
                                                            }

                                                            .p-2tl6208 {
                                                                padding-top: 10px;
                                                                padding-right: 10px;
                                                                padding-bottom: 10px;
                                                                padding-left: 0px
                                                            }

                                                            @media (max-width: 768px) and (min-width: 501px) {
                                                                .p-2tl6208 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }

                                                            @media (max-width: 500px) {
                                                                .p-2tl6208 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }
                                                        </style><input type="text" required="required"
                                                            placeholder="Company Name*" name="companyname" />
                                                    </div>
                                                    <div pagelayer-id="2tl6208"
                                                        class="p-2tl6208 pagelayer-contact_item">
                                                        <style pagelayer-style-id="2tl6208">
                                                            [pagelayer-id="2tl6208"] {
                                                                width: 100%;
                                                                display: inline-block
                                                            }

                                                            @media (max-width: 500px) {
                                                                [pagelayer-id="2tl6208"] {
                                                                    width: 100%
                                                                }
                                                            }

                                                            .p-2tl6208 {
                                                                padding-top: 10px;
                                                                padding-right: 10px;
                                                                padding-bottom: 10px;
                                                                padding-left: 0px
                                                            }

                                                            @media (max-width: 768px) and (min-width: 501px) {
                                                                .p-2tl6208 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }

                                                            @media (max-width: 500px) {
                                                                .p-2tl6208 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }
                                                        </style><input type="text" required="required"
                                                            placeholder="Email Address*" name="email" />
                                                    </div>
                                                    <div pagelayer-id="2tl6208"
                                                        class="p-2tl6208 pagelayer-contact_item">
                                                        <style pagelayer-style-id="2tl6208">
                                                            [pagelayer-id="2tl6208"] {
                                                                width: 100%;
                                                                display: inline-block
                                                            }

                                                            @media (max-width: 500px) {
                                                                [pagelayer-id="2tl6208"] {
                                                                    width: 100%
                                                                }
                                                            }

                                                            .p-2tl6208 {
                                                                padding-top: 10px;
                                                                padding-right: 10px;
                                                                padding-bottom: 10px;
                                                                padding-left: 0px
                                                            }

                                                            @media (max-width: 768px) and (min-width: 501px) {
                                                                .p-2tl6208 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }

                                                            @media (max-width: 500px) {
                                                                .p-2tl6208 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }
                                                        </style><input type="tel" required="required"
                                                            placeholder="Phone Number*" name="number" />
                                                    </div>
                                                    <div pagelayer-id="iqr8146"
                                                        class="p-iqr8146 pagelayer-contact_item">
                                                        <style pagelayer-style-id="iqr8146">
                                                            [pagelayer-id="iqr8146"] {
                                                                width: 100%;
                                                                display: inline-block
                                                            }

                                                            .p-iqr8146 {
                                                                padding-top: 10px;
                                                                padding-right: 10px;
                                                                padding-bottom: 10px;
                                                                padding-left: 0px
                                                            }

                                                            @media (max-width: 768px) and (min-width: 501px) {
                                                                .p-iqr8146 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 5px;
                                                                    padding-left: 5px
                                                                }
                                                            }

                                                            @media (max-width: 500px) {
                                                                .p-iqr8146 {
                                                                    padding-top: 5px;
                                                                    padding-right: 5px;
                                                                    padding-bottom: 10px;
                                                                    padding-left: 5px
                                                                }
                                                            }
                                                        </style><textarea name="message" rows="6"
                                                            placeholder="How can we help you?"></textarea>
                                                    </div>
                                                </div>
                                                <!-- <input type="hidden" name="cfa-pagelayer-id" />
                                                <input type="hidden" name="cfa-post-id" value="159594" />
                                                <input type="hidden" name="cfa-custom-template" value="true" /> -->

                                                <div class="g-recaptcha pagelayer-recaptcha" data-sitekey=""></div>
                                                <div class="pagelayer-contact-submit-holder">
                                                    <!-- <button type="submit" form="contact-form"
                                                        class="pagelayer-contact-submit-btn pagelayer-btn-holder pagelayer-ele-link pagelayer-btn-custom pagelayer-btn-custom {{icon_position}}">
                                                        <i class="fa fa-circle-o-notch fa-spin"
                                                            style="display:none;margin-right:5px;"></i>

                                                        <span class="pagelayer-btn-text">Submit</span>

                                                    </button> -->
                                                    <input class="pagelayer-contact-submit-btn pagelayer-btn-holder pagelayer-ele-link pagelayer-btn-custom pagelayer-btn-custom {{icon_position}}" type="submit" name="submit" value="Send"
                            class="btn btn-danger btn-block" style="width: 120px; id="sendBtn">
                                                    <div>
                                                    </div>
                                                </div>
                                            </form>
                                                        </section>
                                            <div class="pagelayer-message-box pagelayer-message-bottom"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .entry-content -->

            </article><!-- #post-## -->

        </main><!-- .site-main -->
    </div><!-- .content-area -->


    <footer class="pagelayer-footer">
		<div pagelayer-id="3ho7380" class="p-3ho7380 pagelayer-post_props">
		</div>
		<div pagelayer-id="csk1001" class="p-csk1001 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default">
			<style pagelayer-style-id="csk1001">
				.p-csk1001 .pagelayer-col-holder {
					padding: 10px
				}

				.p-csk1001>.pagelayer-background-overlay {
					-webkit-transition: all 400ms !important;
					transition: all 400ms !important
				}

				.p-csk1001 .pagelayer-svg-top .pagelayer-shape-fill {
					fill: #227bc3
				}

				.p-csk1001 .pagelayer-row-svg .pagelayer-svg-top {
					width: 100%;
					height: 100px
				}

				.p-csk1001 .pagelayer-svg-bottom .pagelayer-shape-fill {
					fill: #e44993
				}

				.p-csk1001 .pagelayer-row-svg .pagelayer-svg-bottom {
					width: 100%;
					height: 100px
				}

				.p-csk1001 {
					background: #06044d;
					padding-right: 0px;
					padding-left: 0px
				}

				@media (max-width: 768px) and (min-width: 501px) {
					.p-csk1001 {
						padding-top: 50px;
						padding-right: 0px;
						padding-bottom: 30px;
						padding-left: 0px
					}
				}

				@media (max-width: 500px) {
					.p-csk1001 {
						padding-top: 50px;
						padding-right: 0px;
						padding-bottom: 20px;
						padding-left: 0px
					}
				}
			</style>




			<div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
				<div pagelayer-id="uhm3229" class="p-uhm3229 pagelayer-col">
					<style pagelayer-style-id="uhm3229">
						.p-uhm3229>.pagelayer-background-overlay {
							-webkit-transition: all 400ms !important;
							transition: all 400ms !important
						}
					</style>



					<div class="pagelayer-col-holder">
						<div pagelayer-id="kqd8388"
							class="p-kqd8388 pagelayer-inner_row pagelayer-row-stretch-auto pagelayer-height-default">
							<style pagelayer-style-id="kqd8388">
								.p-kqd8388 .pagelayer-col-holder {
									padding: 10px
								}

								.p-kqd8388>.pagelayer-background-overlay {
									-webkit-transition: all 400ms !important;
									transition: all 400ms !important
								}

								.p-kqd8388 .pagelayer-svg-top .pagelayer-shape-fill {
									fill: #227bc3
								}

								.p-kqd8388 .pagelayer-row-svg .pagelayer-svg-top {
									width: 100%;
									height: 100px
								}

								.p-kqd8388 .pagelayer-svg-bottom .pagelayer-shape-fill {
									fill: #e44993
								}

								.p-kqd8388 .pagelayer-row-svg .pagelayer-svg-bottom {
									width: 100%;
									height: 100px
								}
							</style>




							<div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
								<div pagelayer-id="za26015" class="p-za26015 pagelayer-col pagelayer-col-3">
									<style pagelayer-style-id="za26015">
										.p-za26015>.pagelayer-background-overlay {
											-webkit-transition: all 400ms !important;
											transition: all 400ms !important
										}
									</style>



									<div class="pagelayer-col-holder">
										<div pagelayer-id="jux9945" class="p-jux9945 pagelayer-heading">
											<style pagelayer-style-id="jux9945">
												.p-jux9945 .pagelayer-heading-holder * {
													color: #e87d17
												}

												.p-jux9945 .pagelayer-heading-holder {
													color: #f59019
												}

												.p-jux9945 {
													padding-top: 0px;
													padding-right: 0px;
													padding-bottom: 20px;
													padding-left: 0px
												}
											</style>
											<div class="pagelayer-heading-holder">
												<h4>Quick Links</h4>
											</div>

										</div>
										<div pagelayer-id="ioc6802" class="p-ioc6802 pagelayer-wp_menu">
											<style pagelayer-style-id="ioc6802">
												.p-ioc6802 .pagelayer-wp_menu-ul {
													text-align: center
												}

												.p-ioc6802 .pagelayer-wp-menu-container li.menu-item {
													list-style: none
												}

												.p-ioc6802 .pagelayer-wp_menu-ul>li a:first-child {
													color: #ffffff
												}

												.p-ioc6802 .pagelayer-menu-hover-background .pagelayer-wp_menu-ul>li:hover {
													background-color: #00ccff
												}

												.p-ioc6802 .pagelayer-wp_menu-ul>li>a:hover:before {
													background-color: #00ccff;
													border-color: #00ccff
												}

												.p-ioc6802 .pagelayer-wp_menu-ul>li>a:hover:after {
													background-color: #00ccff;
													border-color: #00ccff
												}

												.p-ioc6802 .pagelayer-wp_menu-ul>li.pagelayer-active-sub-menu {
													background-color: #00ccff
												}

												.p-ioc6802 .pagelayer-wp_menu-ul>li>a {
													padding-left: 6px;
													padding-right: 6px;
													padding-top: 3px;
													padding-bottom: 3px
												}

												.p-ioc6802 ul.sub-menu li>a {
													justify-content: left !important
												}

												.p-ioc6802 .pagelayer-wp-menu-container ul.sub-menu>li a {
													color: #ffffff
												}

												.p-ioc6802 .pagelayer-wp-menu-container ul.sub-menu {
													background-color: #0986c0
												}

												.p-ioc6802 .pagelayer-wp-menu-container ul.sub-menu li a {
													padding-left: 10px;
													padding-right: 10px;
													padding-top: 10px;
													padding-bottom: 10px
												}

												.p-ioc6802 .pagelayer-wp-menu-container .sub-menu a {
													margin-left: 10px
												}

												.p-ioc6802 .pagelayer-wp-menu-container .sub-menu .sub-menu a {
													margin-left: calc(2 * 10px)
												}

												.p-ioc6802 .pagelayer-primary-menu-bar {
													text-align: center
												}

												.p-ioc6802 .pagelayer-primary-menu-bar i {
													background-color: rgba(9, 134, 192, 0.31);
													font-size: 30px
												}

												.p-ioc6802 .pagelayer-menu-type-dropdown {
													width: 30%;
													background-color: #ffffff
												}

												.p-ioc6802 .pagelayer-menu-type-dropdown .pagelayer-wp_menu-ul {
													width: 100%;
													top: 8%;
													transform: translateY(-8%)
												}

												.p-ioc6802 .pagelayer-wp_menu-close i {
													font-size: 25px;
													padding: 8px;
													color: rgba(255, 255, 255, 0.41);
													background-color: rgba(0, 0, 0, 0.21);
													-webkit-transition: all 600ms !important;
													transition: all 600ms !important
												}

												.p-ioc6802 .pagelayer-wp_menu-close i:hover {
													color: #ffffff;
													background-color: #000000
												}
											</style>
											<div class="pagelayer-wp-menu-holder" data-layout="vertical"
												data-submenu_ind="caret-down"
												data-drop_breakpoint="{{drop_breakpoint}}">
												<div class="pagelayer-primary-menu-bar"><i class="fas fa-bars"
														data-icon="fas fa-bars"></i></div>
												<div class="pagelayer-wp-menu-container pagelayer-menu-type-vertical pagelayer-menu-hover- none pagelayer-wp_menu-right"
													data-align="center">
													<div class="pagelayer-wp_menu-close"><i class="fas fa-times"></i>
													</div>
													<div class="menu-avocation-header-menu-container">
														<ul id="2" class="pagelayer-wp_menu-ul">
															<li
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-36 current_page_item menu-item-39">
																<a href="/" aria-current="page"><span
																		class="pagelayer-nav-menu-title">Home</span></a>
																<div
																	class="pagelayer-mega-menu pagelayer-mega-editor-39">
																</div>
															</li>
															<li
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40">
																<a href="https://www.codeolsolutions.co.ke/code/about/"><span
																		class="pagelayer-nav-menu-title">About</span></a>
																<div
																	class="pagelayer-mega-menu pagelayer-mega-editor-40">
																</div>
															</li>
															
															<!-- <li
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42">
																<a href="https://www.codeolsolutions.co.ke/code/blog/"><span
																		class="pagelayer-nav-menu-title">Blog</span></a>
																<div
																	class="pagelayer-mega-menu pagelayer-mega-editor-42">
																</div>
															</li> -->
															<li
																class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43">
																<a href="contact/"><span
																		class="pagelayer-nav-menu-title">Contact</span></a>
																<div
																	class="pagelayer-mega-menu pagelayer-mega-editor-43">
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div pagelayer-id="leg6659" class="p-leg6659 pagelayer-col pagelayer-col-3">
									<style pagelayer-style-id="leg6659">
										.p-leg6659>.pagelayer-background-overlay {
											-webkit-transition: all 400ms !important;
											transition: all 400ms !important
										}
									</style>



									<div class="pagelayer-col-holder">
										<div pagelayer-id="wqg7987" class="p-wqg7987 pagelayer-heading">
											<style pagelayer-style-id="wqg7987">
												.p-wqg7987 .pagelayer-heading-holder * {
													color: #f59019
												}

												.p-wqg7987 .pagelayer-heading-holder {
													color: #f59019
												}

												.p-wqg7987 {
													padding-top: 0px;
													padding-right: 0px;
													padding-bottom: 20px;
													padding-left: 0px
												}
											</style>
											<div class="pagelayer-heading-holder">
												<h4>Services</h4>
											</div>

										</div>
										<div pagelayer-id="dhv3089" class="p-dhv3089 pagelayer-list">
											<style pagelayer-style-id="dhv3089">
												.p-dhv3089 li {
													list-style-type: none
												}

												.p-dhv3089 .pagelayer-list-icon-holder {
													padding-bottom: calc(12px/2);
													padding-top: calc(12px/2)
												}

												.p-dhv3089 .pagelayer-list-item {
													color: #ffffff
												}

												.p-dhv3089 .pagelayer-list-item,
												.p-dhv3089 .pagelayer-list-ul>div {
													transition: all 800ms
												}

												.p-dhv3089 .pagelayer-list-ul>div:hover .pagelayer-list-item {
													color: #f59019
												}

												.p-dhv3089 .pagelayer-list-icon {
													color: #0986c0
												}

												.p-dhv3089 {
													padding-top: 0px;
													padding-right: 0px;
													padding-bottom: 0px;
													padding-left: 0px
												}
											</style>
											<ul class="pagelayer-list-ul pagelayer-list-type-none">
												<div pagelayer-id="qwj9030" class="p-qwj9030 pagelayer-list_item">
													<li	class="pagelayer-list-li" style="color: #ffffff;">
																<a
																	href="https://www.codeolsolutions.co.ke/code/pa/"><span
																		class="pagelayer-nav-menu-title" style="color: #ffffff;">Procurement Advisory</span></a>
																<div
																	class="pagelayer-mega-menu pagelayer-mega-editor-41">
																</div>
															</li>
												</div>
												<div pagelayer-id="dtj7524" class="p-dtj7524 pagelayer-list_item">
													<li	class="pagelayer-list-li" style="color: #ffffff;">
														<a
															href="https://www.codeolsolutions.co.ke/code/tc/"><span
																class="pagelayer-nav-menu-title" style="color: #ffffff;">Technology Consulting</span></a>
														<div
															class="pagelayer-mega-menu pagelayer-mega-editor-41">
														</div>
													</li>
												</div>
												<div pagelayer-id="vwm6569" class="p-vwm6569 pagelayer-list_item">
													<li	class="pagelayer-list-li" style="color: #ffffff;">
														<a
															href="https://www.codeolsolutions.co.ke/code/bpc/"><span
																class="pagelayer-nav-menu-title" style="color: #ffffff;">Business Process Consulting</span></a>
														<div
															class="pagelayer-mega-menu pagelayer-mega-editor-41">
														</div>
													</li>
												</div>
												
											</ul>
										</div>
									</div>
								</div>
								<div pagelayer-id="sjj2659" class="p-sjj2659 pagelayer-col pagelayer-col-3">
									<style pagelayer-style-id="sjj2659">
										.p-sjj2659>.pagelayer-background-overlay {
											-webkit-transition: all 400ms !important;
											transition: all 400ms !important
										}

										.p-sjj2659 .pagelayer-col-holder {
											clip-path: polygon(0 0, 100% 0%, 84% 100%, 0% 100%);
										}
									</style>



									<div class="pagelayer-col-holder">
										<div pagelayer-id="flk5607" class="p-flk5607 pagelayer-heading">
											<style pagelayer-style-id="flk5607">
												.p-flk5607 .pagelayer-heading-holder * {
													color: #f59019
												}

												.p-flk5607 .pagelayer-heading-holder {
													color: #f59019
												}

												.p-flk5607 {
													padding-top: 0px;
													padding-right: 0px;
													padding-bottom: 20px;
													padding-left: 0px
												}
											</style>
											<div class="pagelayer-heading-holder">
												<h4>Get In Touch</h4>
											</div>

										</div>
										<div pagelayer-id="jlq1082" class="p-jlq1082 pagelayer-list">
											<style pagelayer-style-id="jlq1082">
												.p-jlq1082 li {
													list-style-type: none
												}

												.p-jlq1082 .pagelayer-list-icon-holder {
													padding-bottom: calc(12px/2);
													padding-top: calc(12px/2)
												}

												.p-jlq1082 .pagelayer-list-item {
													color: #ffffff
												}

												.p-jlq1082 .pagelayer-list-item,
												.p-jlq1082 .pagelayer-list-ul>div {
													transition: all 800ms
												}

												.p-jlq1082 .pagelayer-list-ul>div:hover .pagelayer-list-item {
													color: #f59019
												}

												.p-jlq1082 .pagelayer-list-icon {
													color: #0986c0
												}

												.p-jlq1082 {
													padding-top: 0px;
													padding-right: 0px;
													padding-bottom: 0px;
													padding-left: 0px
												}
											</style>
											<ul class="pagelayer-list-ul pagelayer-list-type-none">
												<div pagelayer-id="0qz2650" class="p-0qz2650 pagelayer-list_item">
													<li class="pagelayer-list-li">
														<span class="pagelayer-phone-icon"><i
															class="fas fa-phone-alt"></i></span>
	
													<span class="pagelayer-phone" style="color: #ffffff;">+254 741 197 710</span>
													</li>
												</div>
												<div pagelayer-id="nmw8706" class="p-nmw8706 pagelayer-list_item">
													<li class="pagelayer-list-li">
														<span class="pagelayer-email-icon"><i
															class="fas fa-envelope"></i></span>
													<span class="pagelayer-email" style="color: #ffffff;">info@codeolsolutions.co.ke</span>
													</li>
												</div>
												
											</ul>
										</div>
									</div>
								</div>
								<div pagelayer-id="fdv4892" class="p-fdv4892 pagelayer-col pagelayer-col-4">
									<style pagelayer-style-id="fdv4892">
										.p-fdv4892>.pagelayer-background-overlay {
											-webkit-transition: all 400ms !important;
											transition: all 400ms !important
										}
									</style>



									<!-- <div class="pagelayer-col-holder">
										<div pagelayer-id="uby7945" class="p-uby7945 pagelayer-heading">
											<style pagelayer-style-id="uby7945">
												.p-uby7945 .pagelayer-heading-holder * {
													color: #e87d17
												}

												.p-uby7945 .pagelayer-heading-holder {
													color: #f59019
												}

												.p-uby7945 {
													padding-top: 0px;
													padding-right: 0px;
													padding-bottom: 20px;
													padding-left: 0px
												}
											</style>
											<div class="pagelayer-heading-holder">
												<h4>Get In Touch</h4>
											</div>

										</div>
										<div pagelayer-id="did3663" class="p-did3663 pagelayer-phone">
											<style pagelayer-style-id="did3663">
												.p-did3663 .pagelayer-phone *,
												.p-did3663 .pagelayer-phone {
													color: #ffffff
												}

												body:not(.rtl) .p-did3663 .pagelayer-phone-icon {
													margin-right: 12px
												}

												body.rtl .p-did3663 .pagelayer-phone-icon {
													margin-left: 12px
												}

												.p-did3663 .pagelayer-phone-icon i {
													color: #f59019;
													font-size: 15px
												}
											</style>
											<div class="pagelayer-phone-holder">
												<span class="pagelayer-phone-icon"><i
														class="fas fa-phone-alt"></i></span>

												<span class="pagelayer-phone">+254 741 197 710</span>

											</div>
										</div>
										<div pagelayer-id="fwj4642" class="p-fwj4642 pagelayer-email">
											<style pagelayer-style-id="fwj4642">
												.p-fwj4642 .pagelayer-email *,
												.p-fwj4642 .pagelayer-email {
													color: #ffffff
												}

												body:not(.rtl) .p-fwj4642 .pagelayer-email-icon {
													margin-right: 15px
												}

												body.rtl .p-fwj4642 .pagelayer-email-icon {
													margin-left: 15px
												}

												.p-fwj4642 .pagelayer-email-icon i {
													color: #f59019;
													font-size: 20px
												}

												.p-fwj4642 {
													padding-top: 20px;
													padding-right: 0px;
													padding-bottom: 0px;
													padding-left: 0px
												}
											</style>
											<div class="pagelayer-email-holder">
												<span class="pagelayer-email-icon"><i
														class="fas fa-envelope"></i></span>
												<span class="pagelayer-email">info@codeolsolutions.co.ke</span>
											</div>

										</div>
										<div pagelayer-id="t3y4147" class="p-t3y4147 pagelayer-social_grp">
											<style pagelayer-style-id="t3y4147">
												.p-t3y4147 {
													text-align: left;
													padding-top: 20px;
													padding-right: 0px;
													padding-bottom: 0px;
													padding-left: 0px
												}

												.p-t3y4147>div {
													display: inline-block
												}

												.p-t3y4147 .pagelayer-social {
													padding: 10px
												}

												.p-t3y4147 .pagelayer-social-fa {
													font-size: 22px;
													color: #ffffff !important;
													-webkit-transition: all 400ms;
													transition: all 400ms
												}

												.p-t3y4147 .pagelayer-icon-holder {
													font-size: 22px;
													-webkit-transition: all 400ms;
													transition: all 400ms
												}

												.p-t3y4147 .pagelayer-icon-holder:hover .pagelayer-social-fa {
													color: #f59019 !important
												}
											</style>
											<div pagelayer-id="mqg1182" class="p-mqg1182 pagelayer-social">
												<div class="pagelayer-icon-holder pagelayer-facebook-f"
													data-icon="fab fa-facebook-f">
													<a class="pagelayer-ele-link" href="https://facebook.com/sitepad">
														<i class="pagelayer-social-fa fab fa-facebook-f"></i>
													</a>
												</div>
											</div>
											<div pagelayer-id="3dg609" class="p-3dg609 pagelayer-social">
												<div class="pagelayer-icon-holder pagelayer-twitter"
													data-icon="fab fa-twitter">
													<a class="pagelayer-ele-link" href="https://twitter.com/sitepad">
														<i class="pagelayer-social-fa fab fa-twitter"></i>
													</a>
												</div>
											</div>
											<div pagelayer-id="rbs3357" class="p-rbs3357 pagelayer-social">
												<div class="pagelayer-icon-holder pagelayer-linkedin-in"
													data-icon="fab fa-linkedin-in">
													<a class="pagelayer-ele-link" href="https://linkedin.com/sitepad">
														<i class="pagelayer-social-fa fab fa-linkedin-in"></i>
													</a>
												</div>
											</div>
											<div pagelayer-id="zle5291" class="p-zle5291 pagelayer-social">
												<div class="pagelayer-icon-holder pagelayer-pinterest-p"
													data-icon="fab fa-pinterest-p">
													<a class="pagelayer-ele-link" href="https://facebook.com/sitepad">
														<i class="pagelayer-social-fa fab fa-pinterest-p"></i>
													</a>
												</div>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						<div pagelayer-id="9is2210" class="">
							<style pagelayer-style-id="9is2210">
								.p-9is2210 .pagelayer-col-holder {
									padding: 10px
								}

								.p-9is2210>.pagelayer-background-overlay {
									-webkit-transition: all 400ms !important;
									transition: all 400ms !important
								}

								.p-9is2210 .pagelayer-svg-top .pagelayer-shape-fill {
									fill: #227bc3
								}

								.p-9is2210 .pagelayer-row-svg .pagelayer-svg-top {
									width: 100%;
									height: 100px
								}

								.p-9is2210 .pagelayer-svg-bottom .pagelayer-shape-fill {
									fill: #e44993
								}

								.p-9is2210 .pagelayer-row-svg .pagelayer-svg-bottom {
									width: 100%;
									height: 100px
								}

								.p-9is2210 {
									margin-right: 0px;
									margin-bottom: 0px;
									margin-left: 0px;
									padding-top: 0px;
									padding-right: 0px;
									padding-bottom: 0px;
									padding-left: 0px;
									border-style: solid;
									border-top-width: 2px;
									border-right-width: 0px;
									border-bottom-width: 0px;
									border-left-width: 0px;
									border-color: #b0abab
								}

								@media (max-width: 768px) and (min-width: 501px) {
									.p-9is2210 {
										margin-top: 30px;
										margin-right: 0px;
										margin-bottom: 0px;
										margin-left: 0px
									}
								}

								@media (max-width: 500px) {
									.p-9is2210 {
										margin-top: 30px;
										margin-right: 0px;
										margin-bottom: 0px;
										margin-left: 0px
									}
								}
							</style>




							<div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
								<div pagelayer-id="ye46265" class="p-ye46265 pagelayer-col">
									<style pagelayer-style-id="ye46265">
										.p-ye46265 {
											align-content: center !important
										}

										.pagelayer-row-holder [pagelayer-id="ye46265"] {
											width: 84.96%
										}

										@media (max-width: 768px) and (min-width: 501px) {
											.pagelayer-row-holder [pagelayer-id="ye46265"] {
												width: 100%
											}
										}

										@media (max-width: 500px) {
											.pagelayer-row-holder [pagelayer-id="ye46265"] {
												width: 100%
											}
										}

										.p-ye46265>.pagelayer-background-overlay {
											-webkit-transition: all 400ms !important;
											transition: all 400ms !important
										}
									</style>



									<div class="pagelayer-col-holder">
										<div pagelayer-id="cuq9647" class="p-cuq9647 pagelayer-copyright">
											<style pagelayer-style-id="cuq9647">
												.p-cuq9647 .pagelayer-copyright *,
												.p-cuq9647 .pagelayer-copyright {
													color: #fbfbfc
												}

												.p-cuq9647 .pagelayer-copyright {
													text-align: left
												}

												@media (max-width: 768px) and (min-width: 501px) {
													.p-cuq9647 .pagelayer-copyright {
														text-align: center
													}
												}

												@media (max-width: 500px) {
													.p-cuq9647 .pagelayer-copyright {
														text-align: center
													}
												}
											</style>
											<div class="pagelayer-copyright">
												<a href="https://www.codeolsolutions.co.ke">
													© 2022 Codeol Business Solutions
												</a>
											</div>
										</div>
									</div>
								</div>
								<div pagelayer-id="gea9372" class="p-gea9372 pagelayer-col">
									<style pagelayer-style-id="gea9372">
										.pagelayer-row-holder [pagelayer-id="gea9372"] {
											width: 15.04%
										}

										.p-gea9372>.pagelayer-background-overlay {
											-webkit-transition: all 400ms !important;
											transition: all 400ms !important
										}
									</style>



									<div class="pagelayer-col-holder">
										<div pagelayer-id="x2l8794"
											class="p-x2l8794 pagelayer-btn pagelayer-scroll-to-element"
											pagelayer_scrollto_type="totop" pagelayer_scrollto_speed="1.2">
											<style pagelayer-style-id="x2l8794">
												.p-x2l8794 {
													text-align: right;
													border-radius: 0px 0px 0px 0px;
													-webkit-border-radius: 0px 0px 0px 0px;
													-moz-border-radius: 0px 0px 0px 0px
												}

												@media (max-width: 768px) and (min-width: 501px) {
													.p-x2l8794 {
														text-align: center
													}
												}

												@media (max-width: 500px) {
													.p-x2l8794 {
														text-align: center
													}
												}

												.p-x2l8794 .pagelayer-btn-holder {
													padding: calc(20px / 2) 20px;
													background-color: #f59019;
													color: #ffffff;
													-webkit-transition: all 400ms !important;
													transition: all 400ms !important
												}

												.p-x2l8794 .pagelayer-btn-anim-thin {
													background-color: unset !important
												}

												.p-x2l8794 .pagelayer-btn-anim-thin::before {
													background-color: #f59019
												}

												.p-x2l8794 .pagelayer-btn-anim-thin::after {
													background-color: #f59019
												}

												.p-x2l8794 .pagelayer-btn-icon {
													padding: 0 1px
												}

												.p-x2l8794 .pagelayer-btn-holder {
													border-radius: 100px
												}
											</style><a
												class="pagelayer-btn-holder pagelayer-ele-link pagelayer-btn-custom pagelayer-btn-custom pagelayer-btn-icon-left">
												<i class="fas fa-arrow-up pagelayer-btn-icon"></i>

												<i class="fas fa-arrow-up pagelayer-btn-icon"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <script type='text/javascript'
        src='https://www.codeolsolutions.co.ke/site-inc/js/wp-embed.min.js?ver=5.1.6'></script>
    <script type='text/javascript'
        src='https://www.google.com/recaptcha/api.js?render=explicit&#038;ver=1.6.0'></script>
</body>

</html>




<!-- Contact-->
<!-- <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">For instant access to a customer service specialist for
                    scheduling a pickup, getting a quote, or getting answers to your queries and concerns faster,
                    COMMUNICATE WITH US..</h3>
            </div>

            <form action="#contact" method="POST" id="contactForm">
                <div class="row align-items-stretch mb-5">
                    <div class="form-group">
                        <?= $output; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail"
                                required>
                        </div>

                        <div class="antispam">
                            <label for="email">Leave this empty</label>
                            <input type="text" name="url" id="email" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control"
                                placeholder="Enter Subject" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group form-group-textarea mb-md-0">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="5" class="form-control"
                                placeholder="Write Your Message" required></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-primary btn-xl text-uppercase" type="submit" name="submit" value="Send"
                            class="btn btn-danger btn-block" id="sendBtn">
                    </div>
                </div>

            </form>
    </section> -->