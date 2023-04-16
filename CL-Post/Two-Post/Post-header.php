<!--文章内容头部-->
    <div id="web_bg" style="--image:url('<?php $this->options->Aweb_bg() ?>')"></div>
    <div class="Two-psot Two-Index" id="body-wrap">
        <div Two-Index>
            <div class="title">
                <?php $this->title() ?>
            </div>
            <div class="post-meta">
                <div class="item">
                    <span class="text"><?php $this->date('Y-m-d'); ?></span>
                    <span class="line">/</span>
                    <span class="text"><?php $this->commentsNum('%d'); ?> 评论</span>
                    <span class="line">/</span>
                    <span class="text" id="Joe_Article_Views"><?php _getViews($this); ?> 阅读</span>
                    <span class="line">/</span>
                    <span class="text" id="Joe_Baidu_Record">正在检测是否收录...</span>
                  </div>
            </div>
        </div>
    </div>
