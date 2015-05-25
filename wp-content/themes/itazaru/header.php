<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="板状のザル ITA zaru（イタザル）平らな板のざる （特許商品）クリップでボールやなべに挟み、傾けるだけで湯きり水切りができる 野菜やお米をこぼすことなく水切りでき、更に節水にも 料理に不慣れな人にも使いやすく、収納場所が限られたキッチンでも活躍 ！" />
<meta name="keywords" content="ザル,水切り,湯切り,便利,グッズ,特許,アイデア,商品,台所,キッチン,用品,アウトドア,," />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css' />
<!-- // [start style] -->
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.6.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.page-scroller-308.js"></script>
<script type="text/javascript">
adjSpeed = .5;
</script>
<script type="text/javascript">
$(function() {
	var topBtn = $('#page-top');	
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//スクロールしてトップ
    topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
    });
});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#wrapper').fadeIn("slow");
	});
</script>
<script type="text/javascript">
$(document).ready(
  function(){
    $("#gallery img").hover(function(){
       $(this).fadeTo("normal", 1.0); // マウスオーバー時にmormal速度で、透明度を60%にする
    },function(){
       $(this).fadeTo("normal", 0.6); // マウスアウト時にmormal速度で、透明度を100%に戻す
    });
  });

</script>
<script type="text/javascript">
$(function(){
  $("#toggle").click(function(){
    $("#menu").slideToggle();
    return false;
  });
  $(window).resize(function(){
    var win = $(window).width();
    var p = 480;
    if(win > p){
      $("#menu").show();
    } else {
      $("#menu").hide();
    }
  });
});
</script>
<?php wp_head(); ?>
</head>
<body onload="MM_preloadImages('<?php echo get_template_directory_uri(); ?>/images/ico_top_on.png')">
<header>
<h1>ITA zaru</h1>
<p><span class="font1">イタザル</span> <span class="font2">by LEBOWSKI</span></p>
</header>