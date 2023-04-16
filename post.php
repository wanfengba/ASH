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
  <link href="<?php _getAssets('assets/css/joe.post.min.css'); ?>" rel="stylesheet">
  <script src="<?php _getAssets('assets/js/joe.post_page.min.js'); ?>"></script>
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
    
    
    <!--文章面包屑-->
    <?php if ($this->options->Aframe === 'one') : ?>
    <!--版本一输出-->
    <?php $this->need('CL-Post/One-Post/Post-header.php'); ?>
    
    <?php elseif ($this->options->Aframe === 'two') : ?>
    <!--引入链接-->
    <link href="<?php _getAssets('assets/css/Two-Index.css'); ?>" rel="stylesheet" />
    <!--版本二输出-->
    <?php $this->need('CL-Post/Two-Post/Post-header.php'); ?>
    
    <?php elseif ($this->options->Aframe === 'three') : ?>
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
      <div class="joe_main joe_post">
        <div class="joe_detail" data-cid="<?php echo $this->cid ?>">
            
            <!--文章信息-->
          <?php if ($this->options->Aframe === 'one') : ?>
          <!--版本一输出-->
          <?php $this->need('CL-Post/One-Post/Post-batten.php'); ?>
          <?php elseif ($this->options->Aframe === 'two') : ?>
          <!--引入链接-->
          <link href="<?php _getAssets('assets/css/Two-Index.css'); ?>" rel="stylesheet" />
          <!--版本二输出-->
          <?php $this->need('CL-Post/Two-Post/Post-batten.php'); ?>
          <?php elseif ($this->options->Aframe === 'three') : ?>
          <!--版本三-->
          <!--引入链接-->
          <link href="<?php _getAssets('assets/css/Three-Index.css'); ?>" rel="stylesheet" />
          <!--版本三输出-->
          <?php $this->need('CL-Post/Three-Post/Post-batten.php'); ?>
          <?php elseif ($this->options->Aframe === 'four') : ?>
          <!--版本三-->
          <!--引入链接-->
          <link href="<?php _getAssets('assets/css/Four-Index.css'); ?>" rel="stylesheet" />
          <!--版本三输出-->
          <?php $this->need('CL-Post/Four-Post/Post-batten.php'); ?>
          <?php endif; ?>
          
          
          <!--过期文章提醒-->
          <?php if ($this->options->AOverdue && $this->options->AOverdue !== 'off' && floor((time() - ($this->modified)) / 86400) > $this->options->AOverdue) : ?>
            <div class="joe_detail__overdue">
              <div class="joe_detail__overdue-wrapper">
                <div class="title">
                  <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                    <path d="M0 512c0 282.778 229.222 512 512 512s512-229.222 512-512S794.778 0 512 0 0 229.222 0 512z" fill="#FF8C00" fill-opacity=".51" />
                    <path d="M462.473 756.326a45.039 45.039 0 0 0 41.762 28.74 45.039 45.039 0 0 0 41.779-28.74h-83.541zm119.09 0c-7.73 35.909-39.372 62.874-77.311 62.874-37.957 0-69.598-26.965-77.33-62.874H292.404a51.2 51.2 0 0 1-42.564-79.65l23.723-35.498V484.88a234.394 234.394 0 0 1 167.492-224.614c3.635-31.95 30.498-56.815 63.18-56.815 31.984 0 58.386 23.808 62.925 54.733A234.394 234.394 0 0 1 742.093 484.88v155.512l24.15 36.454a51.2 51.2 0 0 1-42.668 79.48H581.564zm-47.957-485.922c.069-.904.12-1.809.12-2.73 0-16.657-13.26-30.089-29.491-30.089-16.214 0-29.474 13.432-29.474 30.089 0 1.245.085 2.491.221 3.703l1.81 15.155-14.849 3.499a200.226 200.226 0 0 0-154.265 194.85v166.656l-29.457 44.1a17.067 17.067 0 0 0 14.182 26.556h431.155a17.067 17.067 0 0 0 14.234-26.487l-29.815-45.04V484.882A200.21 200.21 0 0 0 547.26 288.614l-14.985-2.986 1.331-15.224z" fill="#FFF" />
                    <path d="M612.864 322.697c0 30.378 24.303 55.022 54.272 55.022 30.003 0 54.323-24.644 54.323-55.022 0-30.38-24.32-55.023-54.306-55.023s-54.306 24.644-54.306 55.023z" fill="#FA5252" />
                  </svg>
                  <span class="text">温馨提示：</span>
                </div>
                <div class="content">
                  本文最后更新于<?php echo date('Y年m月d日', $this->modified); ?>，已超过<?php echo floor((time() - ($this->modified)) / 86400); ?>天没有更新，若内容或图片失效，请留言反馈。
                </div>
              </div>
            </div>
          <?php endif; ?>
          <!--过期文章提醒 end -->
          
          
          
          <!--文章输出内容-->
          <?php $this->need('public/article.php'); ?>
          
          <!--文章点赞-->
          <?php $this->need('public/handle.php'); ?>
          
          <!--文章分享-->
          <?php $this->need('public/operate.php'); ?>
          
          <!--文章版权-->
          <?php $this->need('public/copyright.php'); ?>
          
          <!--文章相关-->
          <?php $this->need('public/related.php'); ?>
        </div>
        
        <!--文章翻页-->
        <ul class="joe_post__pagination">
          <?php $this->theNext('<li class="joe_post__pagination-item prev">%s</li>', '', ['title' => '上一篇']); ?>
          <?php $this->thePrev('<li class="joe_post__pagination-item next">%s</li>', '', ['title' => '下一篇']); ?>
        </ul>
        
        <!--评论-->
        <?php $this->need('public/comment.php'); ?>
      </div>
      
      <!--侧栏-->
      <?php $this->need('public/aside.php'); ?>
    </div>
    
    <!--底部-->
    <?php $this->need('public/footer.php'); ?>
  </div>
</body>

</html>