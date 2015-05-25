<?php get_header();?>
<div id="headline">
<div class="container">

<div id="toggle"><a href="#">MENU</a></div>
<div id="menu">
<ul class="nl clearFix">
<li><p><span class="font3"><a href="#product" class="font3">PRODUCT</a></span><br />
    <span class="font1">イタザルについて</span></p>
</li>
<li><p><span class="font3"><a href="#buy">BUY</a></span><br />
    <span class="font1">購入方法</span></p></li>
<li><p><span class="font3"><a href="#aboutus" class="font3">ABOUT US</a></span><br />
    <span class="font1">リボウスキについて</span></p></li>
<li><p><span class="font3"><a href="http://itazaru.sblo.jp/" target="blank">BLOG</a></span><br />
  <span class="font1">イタザルブログ</span></p></li>
</ul>
</div>
<br />
</div></div>
<a name="product" id="product"></a>

<?php
/*
Template Name: 固定ページの新規テンプレート１
*/
?>

<?php
if(have_posts()) :
while(have_posts()) :
the_post(); ?>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p>
	<?php the_content(); ?>
	</p>



<?php endwhile; else: ?>
	<p>
	記事がない場合に表示させる文章など。

	<br clear="all" />
	</p>



<?php
endif;
?>

<?php get_footer(); ?>