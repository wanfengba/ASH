<div style="justify-content: center; display: flex;">
    <div class="joe_detail__agree">
      <div class="agree">
        <div class="icon">
          <svg class="icon-1" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="28" height="28">
            <path d="M736 128c-65.952 0-128.576 25.024-176.384 70.464-4.576 4.32-28.672 28.736-47.328 47.68L464.96 199.04C417.12 153.216 354.272 128 288 128 146.848 128 32 242.848 32 384c0 82.432 41.184 144.288 76.48 182.496l316.896 320.128C450.464 911.68 478.304 928 512 928s61.568-16.32 86.752-41.504l316.736-320 2.208-2.464C955.904 516.384 992 471.392 992 384c0-141.152-114.848-256-256-256z" fill="#fff" />
          </svg>
          <svg class="icon-2" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="28" height="28">
            <path d="M512 928c-28.928 0-57.92-12.672-86.624-41.376L106.272 564C68.064 516.352 32 471.328 32 384c0-141.152 114.848-256 256-256 53.088 0 104 16.096 147.296 46.592 14.432 10.176 17.92 30.144 7.712 44.608-10.176 14.432-30.08 17.92-44.608 7.712C366.016 204.064 327.808 192 288 192c-105.888 0-192 86.112-192 192 0 61.408 20.288 90.112 59.168 138.688l315.584 318.816C486.72 857.472 499.616 863.808 512 864c12.704.192 24.928-6.176 41.376-22.624l316.672-319.904C896.064 493.28 928 445.696 928 384c0-105.888-86.112-192-192-192-48.064 0-94.08 17.856-129.536 50.272l-134.08 134.112c-12.512 12.512-32.736 12.512-45.248 0s-12.512-32.736 0-45.248L562.24 196c48.32-44.192 109.664-68 173.76-68 141.152 0 256 114.848 256 256 0 82.368-41.152 144.288-75.68 181.696l-317.568 320.8C569.952 915.328 540.96 928 512 928z" fill="#fff" />
          </svg>
        </div>
        <span class="text"><?php _getAgree($this) ?></span>
      </div>
    </div>
    <div style="margin-left:20px;" id="dorzs" class="anniu reward item">
          <div class="dorzs">
          <div class="icon">
           <svg class="icon" style="font-size: 12px;width:3.7em;height:3.7em;margin-bottom: 5px;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4783"><path d="M509.9008 513.1264m-450.816 0a450.816 450.816 0 1 0 901.632 0 450.816 450.816 0 1 0-901.632 0Z" fill="#FF9552" p-id="4784"></path><path d="M738.5088 254.1056H264.0896c-14.08 0-27.1872 7.6288-34.0992 19.9168a39.28576 39.28576 0 0 0 0.5632 39.4752l30.5664 50.688-36.352 56.6272a39.15264 39.15264 0 0 0 0.512 43.0592l33.3312 49.3568-34.1504 54.784a39.17824 39.17824 0 0 0 1.024 43.008l34.048 49.3568-28.4672 45.9264c-7.4752 12.0832-7.8336 27.2896-0.9216 39.7312s20.0192 20.1216 34.2528 20.1216h474.1632c46.6432 0 84.6336-37.9392 84.6336-84.6336V338.688c-0.0512-46.6432-37.9904-84.5824-84.6848-84.5824z m-333.2096 418.816c0 18.3808-13.1072 33.28-29.2864 33.28s-29.2864-14.8992-29.2864-33.28V347.3408c0-18.3808 13.1072-33.28 29.2864-33.28s29.2864 14.8992 29.2864 33.28v325.5808z m288-164.8128h-61.8496v28.8256h50.6368a33.28 33.28 0 1 1 0 66.56h-50.6368v23.1936a33.28 33.28 0 1 1-66.56 0v-23.1936h-52.48a33.28 33.28 0 1 1 0-66.56h52.48v-28.8256H501.248a33.28 33.28 0 1 1 0-66.56h35.072l-26.1632-22.9888c-13.824-12.1344-15.2064-33.1264-3.072-46.9504s33.1776-15.2064 46.9504-3.072l43.4176 38.0928 39.936-37.376c13.4144-12.544 34.4576-11.8784 47.0528 1.536s11.8784 34.4576-1.536 47.0528l-25.2928 23.7056h35.6864a33.28 33.28 0 1 1 0 66.56z" fill="#FFFFFF" p-id="4785"></path></svg>
          </div>
          <span class="text">打赏</span>
        </div>
    </div>
</div>

<!-- 打赏弹窗 -->
<div class="ASH_tanchuang_out ASH_dashang_out">
    <div class="ASH_tanchuang ASH_dashang">
        <?php if(Helper::options()->dashang_logo): ?>
        <img class="dashang_image avatar lazyload" src="<?php $this->options->dashang_logo() ?>" alt="打赏图" style="width:100%;height:15rem;">
        <?php else: ?>
        <img class="dashang_image avatar lazyload" src="<?php $this->options->themeUrl('assets/img/logo.png'); ?>" alt="打赏图" style="width:100%;height:15rem;">
        <?php endif; ?>
        <div class="title">打赏博主</div>
        <?php if(Helper::options()->Azfb): ?>
        <button onclick="$('.dashang_image').attr('src','<?php $this->options->Azfb() ?>');" style="background:#009d0a;" type="submit">
            <i class="ri-wechat-pay-line"></i> 微信
        </button>
        <?php else: ?>
        <button onclick="$('.dashang_image').attr('src','<?php $this->options->themeUrl('assets/img/2.jpg'); ?>');" style="background:#009d0a;" type="submit">
            <i class="ri-wechat-pay-line"></i> 微信
        </button>
        <?php endif; ?>
        <?php if(Helper::options()->Awx): ?>
        <button onclick="$('.dashang_image').attr('src','<?php $this->options->Awx() ?>');" style="background:#1578ff;" type="submit">
            <i class="ri-alipay-line"></i> 支付宝
        </button>
        <?php else: ?>
        <button onclick="$('.dashang_image').attr('src','<?php $this->options->themeUrl('assets/img/1.jpg'); ?>');" style="background:#009d0a;" type="submit">
            <i class="ri-wechat-pay-line"></i> 支付宝
        </button>
        <?php endif; ?>
        
    </div>
</div>
<script>
$(function(){
    if ($(".reward").length!=0){   
        $(".reward").click(function(){
            $(".ASH_dashang_out").show();
        });
        $(".ASH_dashang_out").click(function(){
            $(this).hide();
        });
        $(".ASH_dashang").click(function(e){
            e.stopPropagation();
        });
    }
});
</script>


    
