    <!-- 头部 背景图-->
        <div class="Three_image" style="--image: url('<?php $this->options->Aweb_bg() ?>');">
            <div class="title"><?php $this->options->Ahaed_Author() ?></div>
            <div class="sub"><?php $this->options->Asubtitle() ?></div>
            <?php if ($this->options->Awaves === 'on') : ?>
            <section class="main-hero-waves-area waves-area">
                <svg class="waves-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M -160 44 c 30 0 58 -18 88 -18 s 58 18 88 18 s 58 -18 88 -18 s 58 18 88 18 v 44 h -352 Z"></path>
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0"></use>
                        <use xlink:href="#gentle-wave" x="48" y="3"></use>
                        <use xlink:href="#gentle-wave" x="48" y="5"></use>
                        <use xlink:href="#gentle-wave" x="48" y="7"></use>
                    </g>
                </svg>
            </section>
            <?php endif; ?>
        </div>