<?php

/**
 * 留言
 * 
 * @package custom 
 * 
 **/

?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <?php $this->need('public/include.php'); ?>
  <script src="<?php _getAssets('assets/lib/draggabilly@3.0.0/draggabilly.min.js'); ?>"></script>
  <script src="<?php _getAssets('assets/js/joe.leaving.min.js'); ?>"></script>
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
    <link href="<?php _getAssets('assets/css/Two-Index.css'); ?>" rel="stylesheet" />
    <!--版本二输出-->
    <?php $this->need('CL-Post/Two-Post/Post-header.php'); ?>
    <?php endif; ?>
    
    
    <?php if ($this->options->Aframe === 'three') : ?>
    <!--风格三输出头部部分-->
    <!--引入相关链接-->
        <link href="<?php _getAssets('assets/css/Three-Index.css'); ?>" rel="stylesheet" />
    <!--风格三搜索信息-->
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
        <div class="joe_detail" data-cid="<?php echo $this->cid ?>">
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
          
          
           <!--如果是风格四输出-->
          <?php if ($this->options->Aframe === 'four') : ?>
          <!--引入链接-->
            <link href="<?php _getAssets('assets/css/Four-Index.css'); ?>" rel="stylesheet" />
            <!--版本四输出-->
            <?php $this->need('CL-Post/Four-Post/Post-batten.php'); ?>
          <?php endif; ?>
          <div class="joe_detail__leaving">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()) : ?>
              <ul class="joe_detail__leaving-list">
                <?php while ($comments->next()) : ?>
                  <li class="item">
                    <div class="user">
                      <img class="avatar lazyload" src="<?php _getAvatarLazyload(); ?>" data-src="<?php _getAvatarByMail($comments->mail) ?>" alt="用户头像" />
                      <div class="nickname"><?php $comments->author(); ?></div>
                      <div class="date"><?php $comments->date('Y/m/d'); ?></div>
                    </div>
                    <div class="wrapper">
                      <div class="content"><?php _parseLeavingReply($comments->content); ?></div>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php else : ?>
              <div class="joe_detail__leaving-none">暂无留言，期待第一个脚印。</div>
            <?php endif; ?>
          </div>
        </div>
        <?php $this->need('public/comment.php'); ?>
      </div>
      <?php $this->need('public/aside.php'); ?>
    </div>
    <?php $this->need('public/footer.php'); ?>
  </div>
</body>

</html>