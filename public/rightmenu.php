<link href="<?php _getAssets('assets/css/ASH.rightmenu.css'); ?>" rel="stylesheet" />
<link href="<?php _getAssets('assets/iconfont/iconfont.css'); ?>" rel="stylesheet" />
<script src="<?php _getAssets('assets/js/ASH.rightmenu.js'); ?>"></script>

<div id="rightMenu">
    <div class="rightMenu-group rightMenu-small">
        <a href="javascript:window.history.back();" class="rightMenu-item"><i class="fa fa-arrow-left"></i></a>
        <a href="javascript:window.history.forward();" class="rightMenu-item"><i class="fa fa-arrow-right"></i></a>
        <a href="javascript:window.location.reload();" class="rightMenu-item"><i class="fa fa-refresh"></i></a>
        <a href="javascript:void(0);" id="toTop" class="rightMenu-item"><i class="fa fa-arrow-up"></i></a>
        <a href="javascript:void(0);" id="toBottom" class="rightMenu-item"><i class="fa fa-arrow-up"></i></a>
    </div>
    <div class="rightMenu-group rightMenu-line hide" id="menu-text">
        <a href="javascript:rmf.copySelect();" class="rightMenu-item"><i class="fa fa-copy"></i><span>复制</span></a>
        <a href="javascript:void(0);"  onclick="baiduSearch();" class="rightMenu-item"><i class="iconfont icon-baidu"></i><span>百度搜索</span></a>
        <a href="javascript:void(0);"  onclick="googleSearch();" class="rightMenu-item"><i class="fa fa-search"></i><span>谷歌搜索</span></a>
    </div>
    <div class="rightMenu-group rightMenu-line hide" id="menu-too">
        <a href="javascript:window.open(window.getSelection().toString());window.location.reload();" class="rightMenu-item"><i class="fa fa-link"></i><span>转到链接</span></a>
    </div>
    <div class="rightMenu-group rightMenu-line hide" id="menu-paste">
        <a href="javascript:rmf.paste();" class="rightMenu-item"><i class="fa fa-copy"></i><span>粘贴</span></a>
    </div>
    <div class="rightMenu-group rightMenu-line hide" id="menu-post">
        <a href="javascript:rmf.copyWordsLink();" class="rightMenu-item"><i class="fa fa-link"></i><span>复制本文地址</span></a>
    </div>
    <div class="rightMenu-group rightMenu-line hide" id="menu-to">
        <a href="javascript:rmf.openWithNewTab();" class="rightMenu-item"><i class="fa fa-window-restore"></i><span>新窗口打开</span></a>
        <a href="javascript:rmf.open();" class="rightMenu-item" id="menu-too"><i class="fa fa-link"></i><span>转到链接</span></a>
        <a href="javascript:rmf.copyLink();" class="rightMenu-item" ><i class="fa fa-copy"></i><span>复制链接</span></a>
    </div>
    <div class="rightMenu-group rightMenu-line hide" id="menu-img">
        <a href="javascript:rmf.openWithNewTab();" class="rightMenu-item" ><i class="fa fa-window-restore"></i><span>在新窗口打开</span></a>
        <a href="javascript:rmf.click();" class="rightMenu-item" ><i class="fa fa-arrows-alt"></i><span>全屏显示</span></a>
        <a href="javascript:rmf.copyLink();" class="rightMenu-item" ><i class="fa fa-copy"></i><span>复制图片链接</span></a>
    </div>
     <div class="rightMenu-group rightMenu-line">
        <a href="javascript:rmf.switchDarkMode();" class="rightMenu-item joe_action_item mode" ><i class="fa fa-moon"></i><span>昼夜切换</span></a>
        <a class="rightMenu-item" id="menu-translate"><i class="iconfont icon-fanti"></i><span>繁简转换</span></a>
        <a href="javascript:fullScreen();" class="rightMenu-item"><i class="fa fa-expand"></i><span>进入全屏</span></a>
    </div>
</div>


		<script>var GLOBAL_CONFIG = { 
                  translate: {"defaultEncoding":2,"translateDelay":0,"msgToTraditionalChinese":"简","msgToSimplifiedChinese":"繁"}
                }
        </script>

		<script>
	(win=>{
    win.saveToLocal = {
      set: function setWithExpiry(key, value, ttl) {
        if (ttl === 0) return
        const now = new Date()
        const expiryDay = ttl * 86400000
        const item = {
          value: value,
          expiry: now.getTime() + expiryDay,
        }
        localStorage.setItem(key, JSON.stringify(item))
      },

      get: function getWithExpiry(key) {
        const itemStr = localStorage.getItem(key)

        if (!itemStr) {
          return undefined
        }
        const item = JSON.parse(itemStr)
        const now = new Date()

        if (now.getTime() > item.expiry) {
          localStorage.removeItem(key)
          return undefined
        }
        return item.value
      }
    }
  
    })(window)
    </script>
    <script src="<?php _getAssets('assets/js/tw_cn.js'); ?>"></script>
    <!---->
    

		<link rel="stylesheet" href="<?php _getAssets('assets/css/progress_bar.css'); ?>">
		<script src="<?php _getAssets('assets/js/pace.min.js'); ?>"></script>
