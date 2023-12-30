<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <?php $this->need('public/include.php'); ?>
  <?php if ($this->options->APrismTheme) : ?>
    <link href="<?php $this->options->APrismTheme() ?>" rel="stylesheet">
  <?php else : ?>
    <link href="<?php _getAssets('assets/lib/prism/prism.min.css'); ?>" rel="stylesheet">
  <?php endif; ?>
  <script src="<?php _getAssets('assets/lib/clipboard@2.0.11/clipboard.min.js'); ?>"></script>
  <script src="<?php _getAssets('assets/lib/prism/prism.min.js'); ?>"></script>
  <script src="<?php _getAssets('assets/js/joe.post_page.min.js'); ?>"></script>
</head>

<body>
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
        
            
            <!--如果是默认版本输出-->
          <?php if ($this->options->Aframe === 'one') : ?>
          <?php $this->need('CL-Post/One-Post/Post-batten.php'); ?>
          <?php endif; ?>
          
          <!--如果是风格二输出-->
          <?php if ($this->options->Aframe === 'two') : ?>
          <!--引入链接-->
            <link href="<?php _getAssets('assets/css/Two-Index.css'); ?>" rel="stylesheet" />
            <!--版本二输出-->
            <?php $this->need('CL-Post/Two-Post/Post-batten.php'); ?>
          <?php endif; ?>
          
          
        <div class="joe_detail" data-cid="<?php echo $this->cid ?>">
            
            <!--如果是风格四输出-->
          <?php if ($this->options->Aframe === 'four') : ?>
          <!--引入链接-->
            <link href="<?php _getAssets('assets/css/Four-Index.css'); ?>" rel="stylesheet" />
            <!--版本四输出-->
            <?php $this->need('CL-Post/Four-Post/Post-batten.php'); ?>
          <?php endif; ?>
          
          <?php $this->need('public/article.php'); ?>
          <?php $this->need('public/handle.php'); ?>
          <?php $this->need('public/copyright.php'); ?>
        </div>
        <?php $this->need('public/comment.php'); ?>
      </div>
      <?php $this->need('public/aside.php'); ?>
    </div>
    <?php $this->need('public/footer.php'); ?>
  </div>
</body>

</html>
