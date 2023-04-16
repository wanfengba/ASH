<script>
  localStorage.getItem("data-night") && document.querySelector("html").setAttribute("data-night", "night");
  window.Joe = {
    THEME_URL: `<?php Helper::options()->themeUrl() ?>`,
    BASE_API: `<?php echo $this->options->rewrite == 0 ? Helper::options()->rootUrl . '/index.php/joe/api' : Helper::options()->rootUrl . '/joe/api' ?>`,
    DYNAMIC_BACKGROUND: `<?php $this->options->ADynamic_Background() ?>`,
    WALLPAPER_BACKGROUND_PC: `<?php $this->options->AWallpaper_Background_PC() ?>`,
    IS_MOBILE: /windows phone|iphone|android/gi.test(window.navigator.userAgent),
    BAIDU_PUSH: <?php echo $this->options->ABaiduToken ? 'true' : 'false' ?>,
    DOCUMENT_TITLE: `<?php $this->options->ADocumentTitle() ?>`,
    LAZY_LOAD: `<?php _getLazyload() ?>`,
    BIRTHDAY: `<?php $this->options->ABirthDay() ?>`,
    MOTTO: `<?php _getAsideAuthorMotto() ?>`,
    PAGE_SIZE: `<?php $this->parameter->pageSize() ?>`
  }
</script>
<?php
$fontUrl = $this->options->ACustomFont;
if (strpos($fontUrl, 'woff2') !== false) $fontFormat = 'woff2';
elseif (strpos($fontUrl, 'woff') !== false) $fontFormat = 'woff';
elseif (strpos($fontUrl, 'ttf') !== false) $fontFormat = 'truetype';
elseif (strpos($fontUrl, 'eot') !== false) $fontFormat = 'embedded-opentype';
elseif (strpos($fontUrl, 'svg') !== false) $fontFormat = 'svg';
?>
<style>
  @font-face {
    font-family: 'Joe Font';
    font-weight: 400;
    font-style: normal;
    font-display: swap;
    src: url('<?php echo $fontUrl ?>');
    <?php if ($fontFormat) : ?>src: url('<?php echo $fontUrl ?>') format('<?php echo $fontFormat ?>');
    <?php endif; ?>
  }

  body {
    <?php if ($fontUrl) : ?>font-family: 'Joe Font';
    <?php else : ?>font-family: 'Helvetica Neue', Helvetica, 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', '微软雅黑', Arial, sans-serif;
    <?php endif; ?>
  }
  
  /*侧栏显示位置*/
  <?php if ($this->options->menu_Aside === 'left') : ?>
  .ASH_container.joe_container{
      flex-direction: row-reverse !important;
  }
  .joe_aside {
    padding: 15px 0 !important;
    margin-left: 0px !important;
    margin-right: 15px !important;
  }
  <?php elseif ($this->options->menu_Aside === 'on') : ?>
  .joe_aside {
    display: none;
  }
  <?php endif; ?>
  <?php if ($this->options->menu_Aside === 'on') : ?>
  /*判断关闭单栏显示宽度*/
      <?php if ($this->options->Aside_wide) : ?>
      .ASH_container.joe_container {
        max-width:<?php $this->options->Aside_wide() ?>  !important;
      }
      <?php endif; ?>
  <?php endif; ?>
  <?php $this->options->ACustomCSS() ?>
</style>
<canvas id="universe"></canvas>
<style>
[data-night="night"] #universe {
    display: block;
    position: fixed;
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 9;
    -webkit-animation: to_show 4s;
    -moz-animation: to_show 4s;
    -o-animation: to_show 4s;
    -ms-animation: to_show 4s;
    animation: to_show 4s;
}
#universe {
    display: none;
}
</style>