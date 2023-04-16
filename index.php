<?php

/**
 * 
 * 原版 joe 
 * 
 * @package ASH
 * @author 尘落
 */

?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <?php $this->need('public/include.php'); ?>
  <link href="<?php _getAssets('assets/lib/swiper@5.4.5/swiper.min.css'); ?>" rel="stylesheet" />
  <script src="<?php _getAssets('assets/lib/swiper@5.4.5/swiper.min.js'); ?>"></script>
  <script src="<?php _getAssets('assets/lib/wowjs@1.1.3/wow.min.js'); ?>"></script>
  <link href="<?php _getAssets('assets/css/joe.index.min.css'); ?>" rel="stylesheet">
  <script src="<?php _getAssets('assets/js/joe.index.min.js'); ?>"></script>
</head>

<body>
  <div id="Joe">
    <!--导航风格切换-->
    <?php if ($this->options->Anav === 'one') : ?>
    <!--默认导航风格-->
    <?php $this->need('CL-Head/One-Head/One-Head.php'); ?>
    <?php elseif ($this->options->Anav === 'two') : ?>
    <!--风格二链接引用-->
    <link href="<?php _getAssets('assets/css/Two-Head.css'); ?>" rel="stylesheet" />
    <!--风格二导航-->
    <?php $this->need('CL-Head/Two-Head/Two-Head.php'); ?>
    <?php endif; ?>
    
    <?php if ($this->options->Aframe === 'two') : ?>
    <!--如果是风格二 要记得输出全局图片-->
    <?php $this->need('CL-Index/Two-Index/Two-Header.php'); ?>
    <?php endif; ?>
    
    <?php if ($this->options->Aframe === 'three') : ?>
    <!--如果是风格三 要记得输出头部图片-->
    <?php $this->need('CL-Index/Three-Index/Three-Header.php'); ?>
    <?php endif; ?>
    
    <?php if ($this->options->Aframe === 'four') : ?>
    <!--判断是不是风格四-->
        <?php if ($this->options->Aframe_index === 'two') : ?>
        <!--如果是风格四机械化 要记得输出背景图-->
        <div id="web_bg"></div>
        <div id="svg_bg"></div>
        <?php endif; ?>
    <?php endif; ?>
    
    <div class="ASH_container joe_container">
         
      <div class="joe_main">
        <div class="joe_index">
            <!--文章输出-->
            <?php if ($this->options->Aframe === 'one') : ?>
            <!--默认版本-->
            <!--轮播图、广告、热门文章等 -->
            <?php $this->need('CL-Index/One-Index/appendix.php'); ?>
            <!--首页文章输出-->
            <?php $this->need('CL-Index/One-Index/One-Index.php'); ?>
            <?php elseif ($this->options->Aframe === 'two') : ?>
            <!--引入相关链接-->
            <link href="<?php _getAssets('assets/css/Two-Index.css'); ?>" rel="stylesheet" />
            <!--文章输出版本二-->
            <!--轮播图、广告、热门文章等 -->
            <?php $this->need('CL-Index/Two-Index/appendix.php'); ?>
            <!--首页风格二文章输出-->
            <?php $this->need('CL-Index/Two-Index/Two-Index.php'); ?>
            <?php elseif ($this->options->Aframe === 'three') : ?>
            <!--轮播图、广告、热门文章等 -->
            <?php $this->need('CL-Index/Three-Index/appendix.php'); ?>
            <!--引入相关链接-->
            <link href="<?php _getAssets('assets/css/Three-Index.css'); ?>" rel="stylesheet" />
            <!--文章输出版本三-->
            <?php $this->need('CL-Index/Three-Index/Three-Index.php'); ?>
            <?php elseif ($this->options->Aframe === 'four') : ?>
            <!--轮播图、广告、热门文章等 -->
            <?php $this->need('CL-Index/Four-Index/appendix.php'); ?>
            <!--引入相关链接-->
            <link href="<?php _getAssets('assets/css/Four-Index.css'); ?>" rel="stylesheet" />
            <!--文章输出版本四-->
            <?php $this->need('CL-Index/Four-Index/Four-Index.php'); ?>
            <?php endif; ?>
            
          
        </div>
        <div class="joe_load">
            查看更多
        </div>
      </div>
      <!--侧栏-->
      <?php $this->need('public/aside.php'); ?>
    </div>
    <!--底部-->
    <?php $this->need('public/footer.php'); ?>
  </div>
</body>

</html>