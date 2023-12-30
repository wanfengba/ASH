<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <?php $this->need('public/include.php'); ?>
  <script src="<?php _getAssets('assets/lib/wowjs@1.1.3/wow.min.js'); ?>"></script>
  <link href="<?php _getAssets('assets/css/joe.archive.min.css'); ?>" rel="stylesheet">
  <script src="<?php _getAssets('assets/js/joe.archive.min.js'); ?>"></script>
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
    
    <?php if ($this->options->Aframe_main === 'one') : ?>
    <!--版本一输出-->
    <?php $this->need('CL-Post/One-Post/Post-header.php'); ?>
    
    <?php elseif ($this->options->Aframe_main === 'two') : ?>
    <!--引入链接-->
    <link href="<?php _getAssets('assets/css/Two-Index.css'); ?>" rel="stylesheet" />
    <!--版本二输出-->
    <?php $this->need('CL-Post/Two-Post/Post-header.php'); ?>
    
    <?php elseif ($this->options->Aframe_main === 'three') : ?>
    <!--引入链接-->
    <link href="<?php _getAssets('assets/css/Three-Index.css'); ?>" rel="stylesheet" />
    <!--版本二输出-->
    <?php $this->need('CL-Post/Three-Post/Three-header.php'); ?>
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
        <div class="joe_archive">
        
        <?php if ($this->options->Aframe === 'one') : ?>
        <!--原版搜索信息-->
        <?php $this->need('CL-Category/One/One-Head.php'); ?>
        <!--原版搜索到内容-->
        <?php $this->need('CL-Category/One/One-Index.php'); ?>
        <?php elseif ($this->options->Aframe === 'two') : ?>
        <!--引入相关链接-->
        <link href="<?php _getAssets('assets/css/Two-Index.css'); ?>" rel="stylesheet" />
        <!--风格二搜索到内容-->
        <?php $this->need('CL-Category/Two/Two-Index.php'); ?>
        <?php elseif ($this->options->Aframe === 'three') : ?>
        <!--引入相关链接-->
        <link href="<?php _getAssets('assets/css/Three-Index.css'); ?>" rel="stylesheet" />
        <!--风格三搜索到内容-->
        <?php $this->need('CL-Category/Three/Three-Index.php'); ?>
        <?php elseif ($this->options->Aframe === 'four') : ?>
        <!--引入相关链接-->
        <link href="<?php _getAssets('assets/css/Four-Index.css'); ?>" rel="stylesheet" />
        <!--风格四搜索信息-->
        <?php $this->need('CL-Category/Four/Four-Head.php'); ?>
        <!--风格三搜索到内容-->
        <?php $this->need('CL-Category/Four/Four-Index.php'); ?>
        <?php endif; ?>
        
        
        
        </div>
        <!--原版翻页-->
        <?php $this->need('CL-Category/One/One-footer.php'); ?>
        
      </div>
      <!--侧栏-->
      <?php $this->need('public/aside.php'); ?>
    </div>
    <!--底部-->
    <?php $this->need('public/footer.php'); ?>
  </div>
  <!--joe end-->
</body>

</html>
