<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <title>Overview</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta name="description" content="Ultimate Multipurpose HTML Dashboard Kit">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@ui8">
  <meta name="twitter:title" content="Unity">
  <meta name="twitter:description" content="Ultimate Multipurpose HTML Dashboard Kit">
  <meta name="twitter:creator" content="@ui8">
  <meta name="twitter:image" content="img/twitter-card.jpg">
  <meta property="og:title" content="Unity">
  <meta property="og:type" content="Article">
  <meta property="og:url" content="index.html">
  <meta property="og:image" content="img/fb-og-image.jpg">
  <meta property="og:description" content="Ultimate Multipurpose HTML Dashboard Kit">
  <meta property="og:site_name" content="Unity">
  <meta property="fb:admins" content="132951670226590">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,500;1,500&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" media="all" href="css/app.css">
  <link rel="stylesheet" href="styles/left.css">
  <link rel="stylesheet" href="styles/content.css">
  <link rel="stylesheet" href="styles/list.css">
  <link rel="stylesheet" href="css/toast.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- <script src="https://kit.fontawesome.com/db2d8b65e2.js" crossorigin="anonymous"></script> -->
  <script>
    var viewportmeta = document.querySelector('meta[name="viewport"]');
    if (viewportmeta) {
      if (screen.width < 375) {
        var newScale = screen.width / 375;
        viewportmeta.content = 'width=375, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
      } else {
        viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
      }
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>
  <div id="toast"></div>
  <script>
    console.log(localStorage.getItem('darkMode'));
    if (localStorage.getItem('darkMode') === "on") {
      document.body.classList.add("dark");
      document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('.js-switch-theme input').checked = true;
      });
    }
  </script>
  <div class="page">
    <div class="sidebar">
      <div class="sidebar__top"><button class="sidebar__close"><svg class="icon icon-close">
            <use xlink:href="img/sprite.svg#icon-close"></use>
          </svg></button><a class="sidebar__logo" href="index.html"><img class="sidebar__pic sidebar__pic_black" src="img/logo.png" alt="" /><img class="sidebar__pic sidebar__pic_white" src="img/logo-white.png" alt="" /></a><button class="sidebar__burger"></button></div>
      <div class="sidebar__wrapper">
        <div class="sidebar__inner"><a class="sidebar__logo" href="index.html"><img class="sidebar__pic" src="img/logo-sm.png" alt="" /></a>
          <div class="sidebar__list">
            <div class="sidebar__group">
              <div class="sidebar__caption caption-sm">Admin<span> tools</span></div>
              <div class="sidebar__menu"><a class="sidebar__item active" href="index.html" style="">
                  <div class="sidebar__icon"><svg class="icon icon-overview">
                      <use xlink:href="img/sprite.svg#icon-overview"></use>
                    </svg></div>
                  <div class="sidebar__text">Overview</div>
                </a><a class="sidebar__item" href="products.html">
                  <div class="sidebar__icon"><svg class="icon icon-bag">
                      <use xlink:href="img/sprite.svg#icon-bag"></use>
                    </svg></div>
                  <div class="sidebar__text">Products</div>
                </a><a class="sidebar__item" href="campaigns.html">
                  <div class="sidebar__icon"><svg class="icon icon-chart">
                      <use xlink:href="img/sprite.svg#icon-chart"></use>
                    </svg></div>
                  <div class="sidebar__text">Campaigns</div>
                </a><a class="sidebar__item" href="index.php?act=list_user">
                  <div class="sidebar__icon"><svg class="icon icon-discovery">
                      <use xlink:href="img/sprite.svg#icon-discovery"></use>
                    </svg></div>
                  <div class="sidebar__text"> Khach hang</div>
                </a><a class="sidebar__item" href="index.php?act=list_com">
                  <div class="sidebar__icon"><svg class="icon icon-wallet">
                      <use xlink:href="img/sprite.svg#icon-wallet"></use>
                    </svg></div>
                  <div class="sidebar__text">Binh Luan</div>
                </a><a class="sidebar__item" href="?act=bill">
                  <div class="sidebar__icon"><svg class="icon icon-document">
                      <use xlink:href="img/sprite.svg#icon-document"></use>
                    </svg></div>
                  <div class="sidebar__text">Hoá đơn</div>
                </a><a class="sidebar__item js-popup-open" href="#popup-settings" data-effect="mfp-zoom-in">
                  <div class="sidebar__icon"><svg class="icon icon-settings">
                      <use xlink:href="img/sprite.svg#icon-settings"></use>
                    </svg></div>
                  <div class="sidebar__text">Settings </div>
                </a></div>
            </div>
            <div class="sidebar__group">
              <div class="sidebar__caption caption-sm">Insights</div>
              <div class="sidebar__menu"><a class="sidebar__item" href="inbox.html">
                  <div class="sidebar__icon"><svg class="icon icon-message">
                      <use xlink:href="img/sprite.svg#icon-message"></use>
                    </svg></div>
                  <div class="sidebar__text">Inbox</div>
                  <div class="sidebar__counter">18</div>
                </a><a class="sidebar__item" href="notifications.html">
                  <div class="sidebar__icon"><svg class="icon icon-notification">
                      <use xlink:href="img/sprite.svg#icon-notification"></use>
                    </svg></div>
                  <div class="sidebar__text">Notifications</div>
                  <div class="sidebar__counter">2 </div>
                </a><a class="sidebar__item" href="comments.html">
                  <div class="sidebar__icon"><svg class="icon icon-chat">
                      <use xlink:href="img/sprite.svg#icon-chat"></use>
                    </svg></div>
                  <div class="sidebar__text">Comments</div>
                  <div class="sidebar__counter">20</div>
                </a></div>
            </div>
          </div>
          <div class="sidebar__profile">
            <div class="sidebar__details"><a class="sidebar__link" href="#">
                <div class="sidebar__icon"><svg class="icon icon-profile">
                    <use xlink:href="img/sprite.svg#icon-profile"></use>
                  </svg></div>
                <div class="sidebar__text">Profile</div>
              </a><a class="sidebar__link" href="?act=logout_admin">
                <div class="sidebar__icon"><svg class="icon icon-logout">
                    <use xlink:href="img/sprite.svg#icon-logout"></use>
                  </svg></div>
                <div class="sidebar__text">Log out</div>
              </a></div><a class="sidebar__user">
              <div class="sidebar__ava"><img class="sidebar__pic" src="img/ava.png" alt="" /></div>
              <div class="sidebar__desc">
                <div class="sidebar__man">Tam Tran</div>
                <div class="sidebar__status caption">Free account</div>
              </div>
              <div class="sidebar__arrow"><svg class="icon icon-arrows">
                  <use xlink:href="img/sprite.svg#icon-arrows"></use>
                </svg></div>
            </a>
          </div>
        </div>
      </div>
      <div class="sidebar__bottom"><label class="switch switch_theme js-switch-theme"><input class="switch__input" type="checkbox" /><span class="switch__in"><span class="switch__box"></span><span class="switch__icon"><svg class="icon icon-moon">
                <use xlink:href="img/sprite.svg#icon-moon"></use>
              </svg><svg class="icon icon-sun">
                <use xlink:href="img/sprite.svg#icon-sun"></use>
              </svg></span></span></label></div>
    </div>