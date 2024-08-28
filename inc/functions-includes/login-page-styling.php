<?php
// Custom login page
add_action('login_enqueue_scripts', 'custom_login_page');

function custom_login_page()
{ ?>
  <style type="text/css">
    @import url(<?php echo esc_url(get_theme_file_uri('assets/fonts/AkkuratPro-Regular.woff2')); ?>);

    body * {
      font-family: 'Akkurat', sans-serif;
    }

    body.login input {
      border: 1px solid rgba(0, 0, 0, 0.5);
      outline: #000;
      border-radius: 0;
    }

    body.login input:focus {
      border-color: rgba(0, 0, 0, 1);
      box-shadow: none !important;
    }

    body.login div#login form#loginform p.submit input#wp-submit {
      background: #000;
      border-color: #000;
      transition: all 0.3s ease-in-out;
      border-radius: 0;
    }

    body.login div#login form#loginform p.submit input#wp-submit:hover {
      color: #000;
      background-color: #fff;
    }

    body.login div#login form#loginform {
      background-color: rgba(196, 196, 196, 0.1);
      border: 1px solid rgba(196, 196, 196, 0.1);
    }

    body.login #login_error,
    body.login .message {
      border-left: 4px solid #494949;
      box-shadow: none;
    }



    body.login div#login h1 a {
      background-image: url(<?php echo get_template_directory_uri() . '/assets/img/logo-ampersand.svg'; ?>);
      background-repeat: no-repeat;
      background-size: contain;
      width: 250px;
      height: 100px;
    }

    body.login a {
      color: #000 !important;
    }

    body.login a:hover {
      text-decoration: underline !important;
    }

    body.login div#login p#backtoblog {
      display: none;
    }

    body.login {
      background-color: #fff;
    }
  </style>
<?php }



// Custom login header link

add_filter('login_headerurl', 'custom_loginlogo_url');

function custom_loginlogo_url($url)
{
  return home_url();
}
