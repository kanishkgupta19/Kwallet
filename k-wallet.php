
<!DOCTYPE html>
<html lang="en">
<head><title>K-Wallet</title>
<script src="https://71a693ad112392fbb2b6-ece02171884dce8c4b3a1e6d28a03a59.ssl.cf1.rackcdn.com/assets/lib/plugins/scroll-reveal/scrollReveal-b9399162805fa346d1b28d2fd62eab7b.js"></script><script type="text/javascript">window.sr = ScrollReveal();
// Add class to <html> if ScrollReveal is supported
// Note: this method is deprecated, and only works in version 3
if (sr.isSupported()) {
  document.documentElement.classList.add('sr');
}</script>
<script type="text/javascript">
var site = {};
site.colors = {};

var loadFonts = function(colors){

  var fontsNotLoad = ["Arial", "ClearSansThin", 'Helvetica', 'Monaco', "TitilliumLight"];
  var isNotGoogleFont = function(font){
    for (var i = 0; i < fontsNotLoad.length; i++) {
      if(fontsNotLoad[i] == font) return true
    }
    return false
  }

  var setSpaceForFontName = function(s){
    return s.replace(/([a-z])([A-Z])/g, '$1 $2');
  }

  var getGoogleFont = function(type, font){
    if (isNotGoogleFont(font)) return;
    if (type == 'mainFont') {
      css.innerHTML += "body { font-family: '"+ colors.mainFont+"' };";
    }else{
      css.innerHTML += " h1,h2,h3,h4,h5,h6 {'"+ colors.secondFont +"' }";
    }
    font = setSpaceForFontName(font);
    var fontsWeight = ':400,700';
    if (font === 'Roboto' || font === 'Open Sans') fontsWeight = ':300,400';
    fontsToLoad.push(font + fontsWeight);
  }

  var fontsToLoad = [];
  var css = document.createElement("style");
  css.type = "text/css";

  //getGoogleFont('mainFont', colors.mainFont);
  //getGoogleFont('secondFont', colors.secondFont);

  document.getElementsByTagName("head")[0].appendChild(css);

  WebFontConfig = {
    google: { families: fontsToLoad }
  };

  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
}

loadFonts(site.colors);</script>
<style type="text/css">#bodyBackgroundOverlay{
  background: white;
  position: fixed;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  height: 100%;
  z-index: 999;
}</style>
</head>
<body>
<div class="bodyBackground">
<div class="bodyBackgroundContainer">
<div class="mainContent">
<!----------------!st Section logo, name, etc. ------------------------------------------------>
<section class="bgSection pi-custom-color pi-text-light spacing-top-60 parallax spacing-bottom-40" data-img-height="1080" data-img-width="1920" style="background-position: top center;background-repeat: no-repeat;-webkit-background-size: cover;-o-background-size: cover;moz-background-size: cover;background-size: cover;background-image: url(imgs/Indian-rupee.jpg)">
<div class="bgSectionBackgroundColor" style="background-color: #000000; opacity: 0.45"></div>
<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="widgetContainer"><div class="textContainer"><center>
<font face="Sofia" size=19><b>K-Wallet</b></font><br><p class="ql-align-center"><h3>Where</></p>
<h2><strong>Payments Made Easy</strong></h2><br>Transfer, Recharge, Shop, and Pay easily anywhere on your fingertips with K-wallet.<br>Transact and pay from your Smartphones, Tabs, and Computers.&nbsp;&nbsp;</div></div>

</div></div></div></section>

<!----------------Section 2------------------------------------------->
<section class="bgSection pi-custom-color pi-text-dark spacing-top-3  spacing-bottom-3" style=""><div class="bgSectionBackgroundColor" style=";"></div><div class="container"><div class="row-fluid"><div class="span12"><div class="widgetContainer"><div class="textContainer"><h2 class="ql-align-center">Why K-Wallet?</h2></div></div><div class="widgetContainer"><div class="spaceContainer m"></div></div><div><div class="row-fluid"><div class="span4"><div class="widgetContainer"><div class="iconContainer text-center"><span class="ti-shopping-cart 2  icon-black or-icon-2x"></span></div></div><div class="widgetContainer"><div class="spaceContainer s"></div></div><div class="widgetContainer"><div class="textContainer"><h4 class="ql-align-center">Shopping with K-Wallet</h4><p class="ql-align-center">K-wallet gives you a whole new and large collection of electronic products, mobile phones and Accessories&nbsp; from famous brand at cheapest and at fine rates all over INDIA.</p></div></div></div><div class="span4"><div class="widgetContainer"><div class="iconContainer text-center"><span class="ti-lock 2  icon-black or-icon-2x"></span></div></div><div class="widgetContainer"><div class="spaceContainer s"></div></div><div class="widgetContainer"><div class="textContainer"><h4 class="ql-align-center">K-Wallet Security</h4><p class="ql-align-center">We promise all our wallet holders to give you the world class security on all our services. All transactions made through K-Wallet will be safe and easy. Our customer Security is our topmost priority.&nbsp;</p></div></div></div><div class="span4"><div class="widgetContainer"><div class="iconContainer text-center"><span class="fa fa-gears 2  icon-black or-icon-2x"></span></div></div><div class="widgetContainer"><div class="spaceContainer s"></div></div><div class="widgetContainer"><div class="textContainer"><h4 class="ql-align-center">Services</h4><p class="ql-align-center">We gives you a wide range of service.&nbsp;</p><p class="ql-align-center">K-wallet allows you to Recharge mobile, Pay Bills, Send or Receive money, transfer money to bank and many more with only few clicks.</p></div></div></div></div></div></div></div></div></section>


<!---------------------------------------Section-4 ----------------------------------------------------------------->
<section>
<div class="container">
<div class="row-fluid">
<h2 class="ql-align-center"><strong>Features of K-wallet&nbsp;</strong></h2><div class="widgetContainer"><div class="spaceContainer s"></div></div><div><div class="row-fluid"><div class="span4"><div class="widgetContainer"><div class="iconContainer text-center"><span class="fa fa-bank 2  icon-black or-icon-2x"></span></div></div><div class="widgetContainer"><div class="textContainer"><h4 class="ql-align-center"><strong>Easy and Safe</strong></h4><p class="ql-align-center">Recharge, Pay, Book and Shop easily with K-Wallet at amazing offers and discounted prices along with full security.&nbsp;</p></div></div></div><div class="span4"><div class="widgetContainer"><div class="iconContainer text-center"><span class="ion-ios-people 2  icon-black or-icon-2x"></span></div></div><div class="widgetContainer"><div class="textContainer"><h4 class="ql-align-center"><strong>24/7 Customer Support</strong></h4><p class="ql-align-center">The Support center of K-Wallet is open 24 X 7 to take your queries and to resolve your issues to insure safe and easy working.</p></div></div></div><div class="span4"><div class="widgetContainer"><div class="iconContainer text-center"><span class="ti-medall-alt 2  icon-black or-icon-2x"></span></div></div><div class="widgetContainer"><div class="textContainer"><h4 class="ql-align-center"><strong>Certified Company</strong></h4><p class="ql-align-center">An ISO certified and awarded company. It is India's most trusted e-wallet company now spreading world-wide.</p></div></div></div></div></div></div></div></section>


<!------------------Section 5 features ------------------------------------------>
<section class="bgSection pi-custom-color pi-text-light spacing-top-3  spacing-bottom-3" style="background-position: top center;background-repeat: no-repeat;-webkit-background-size: cover;-o-background-size: cover;moz-background-size: cover;background-size: cover;background-image: url(https://lh3.googleusercontent.com/wcgeTvCw4zyEP_CV6zQDcRVgVpZ9ZmSRqR5znOBnKW7ITyoXKvMYIHAg-LsVv6ftT9QjQgjvkx_HM7FT_LrFH9wVrx9nXYZrwp181jHmR5efnQ=s620)"><div class="bgSectionBackgroundColor" style="background-color: #222222; opacity: 0.68"></div><div class="container"><div class="row-fluid"><div class="span12"><div class="widgetContainer"><div class="textContainer"><h1 class="ql-align-center"><strong class="ql-size-large">K-WALLET</strong></h1></div></div><div class="widgetContainer"><div class="spaceContainer xl"></div></div><div><div class="row-fluid"><div class="span2"><div class="widgetContainer"><div class="iconContainer text-center"><span class="fa fa-university 3  icon-white or-icon-3x"></span></div></div><div class="widgetContainer"><div class="textContainer"><p class="ql-align-center"><strong class="ql-size-large">Banking</strong></p></div></div></div><div class="span2"><div class="widgetContainer"><div class="iconContainer text-center"><span class="ion-android-cart 3  icon-white or-icon-3x"></span></div></div><div class="widgetContainer"><div class="textContainer"><p class="ql-align-center"><strong class="ql-size-large">Shop</strong></p></div></div></div><div class="span2"><div class="widgetContainer"><div class="iconContainer text-center"><span class="ti-wallet 3  icon-white or-icon-3x"></span></div></div><div class="widgetContainer"><div class="textContainer"><p class="ql-align-center"><strong class="ql-size-large">Pay Bills</strong></p></div></div></div><div class="span2"><div class="widgetContainer"><div class="iconContainer text-center"><span class="ion-iphone 3  icon-white or-icon-3x"></span></div></div><div class="widgetContainer"><div class="textContainer"><p class="ql-align-center"><strong class="ql-size-large">Recharge</strong></p></div></div><div class="widgetContainer"><div class="textContainer"><p><br></p></div></div></div><div class="span2"><div class="widgetContainer"><div class="iconContainer text-center"><span class="fa fa-inr 3  icon-white or-icon-3x"></span></div></div><div class="widgetContainer"><div class="textContainer"><p class="ql-align-center"><strong class="ql-size-large">Transfer Money</strong></p></div></div></div><div class="span2"><div class="widgetContainer"><div class="iconContainer text-center"><span class="fa fa-calendar 3  icon-white or-icon-3x"></span></div></div><div class="widgetContainer"><div class="textContainer"><p class="ql-align-center"><strong class="ql-size-large">Bookings</strong></p></div></div></div></div></div></div></div></div></section>


</div><div class="bodyBackgroundOverlay"></div></div></div><noscript id="deferred-styles"><link rel="stylesheet" media="all" href="https://71a693ad112392fbb2b6-ece02171884dce8c4b3a1e6d28a03a59.ssl.cf1.rackcdn.com/assets/themes/classic/application-5d7a80b1b210d39c90023f4682fbf98a.css" id="application-style" /><link rel="stylesheet" media="all" href="https://e05f433bf807fec52f1b-8b78f4a1c3cecae8e875354bda80d3db.ssl.cf1.rackcdn.com/5a5df219e487d56e9464decc/custom_5a5df219e487d56e9464decc.css" id="custom-style" /></noscript><script src="https://71a693ad112392fbb2b6-ece02171884dce8c4b3a1e6d28a03a59.ssl.cf1.rackcdn.com/assets/themes/classic/application-eb2b153db271ed8a4a6ffca73d3304fc.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJsdrGsWfNveJwKWj393p8sToIEwyLR9U"></script><script src="https://71a693ad112392fbb2b6-ece02171884dce8c4b3a1e6d28a03a59.ssl.cf1.rackcdn.com/assets/plugins-eee3ea2ec150d89bbf154adea2cd42ba.js"></script><script src="https://71a693ad112392fbb2b6-ece02171884dce8c4b3a1e6d28a03a59.ssl.cf1.rackcdn.com/assets/widgets_init-8c6ac8efc72bd48800955427fe88230f.js"></script>

<script type="text/javascript">var afterRenderPage = [];
var sitePlugins = {"plugins":{"scrollReveal":true}};
var loadDeferredStyles = function() {
  var addStylesNode = document.getElementById("deferred-styles");
  var replacement = document.createElement("div");
  replacement.innerHTML = addStylesNode.textContent;
  document.head.appendChild(replacement)
  addStylesNode.parentElement.removeChild(addStylesNode);

  var bodyBackgroundOverlay = document.getElementById("bodyBackgroundOverlay");

  document.getElementById("application-style").onload = function () {
    bodyBackgroundOverlay.parentNode.removeChild(bodyBackgroundOverlay);
    initPlugins()
    alignMobileButton()
  };   
};
var raf = requestAnimationFrame || mozRequestAnimationFrame ||
    webkitRequestAnimationFrame || msRequestAnimationFrame;
if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
else window.addEventListener('load', loadDeferredStyles);</script><script type="text/javascript">for (var i = 0; i < afterRenderPage.length; i++) {afterRenderPage[i].apply();};</script></body></html>