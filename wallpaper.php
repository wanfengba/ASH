<?php

/**
 * 壁纸
 * 
 * @package custom 
 * 
 **/

?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <?php $this->need('public/include.php'); ?>
  <link href="<?php _getAssets('assets/css/joe.wallpaper.min.css'); ?>" rel="stylesheet">
  <script src="<?php _getAssets('assets/js/joe.wallpaper.min.js') ?>"></script>
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
    <div class="ASH_container joe_container">
      <div class="joe_main">
           <?php if ($this->options->Aframe === 'four') : ?>
            <!--版本四输出-->
            <!--引入链接-->
            <link href="<?php _getAssets('assets/css/Four-Index.css'); ?>" rel="stylesheet" />
            <br></br>
            <?php endif; ?>
        <div class="joe_wallpaper__type">
          <div class="joe_wallpaper__type-title">壁纸分类</div>
          <ul class="joe_wallpaper__type-list">
            <li class="error">正在拼命加载中...</li>
          </ul>
        </div>
        <div class="joe_wallpaper__list"></div>
        <ul class="joe_wallpaper__pagination"></ul>
      </div>
      <?php $this->need('public/aside.php'); ?>
    </div>
    <?php $this->need('public/footer.php'); ?>
  </div>
</body>

</html>