   
    
    <!--风格二 轮播图、广告、热门文章等-->
    <div id="about">
          <?php
          $carousel = [];
          $carousel_text = $this->options->AIndex_Carousel;
          if ($carousel_text) {
            $carousel_arr = explode("\r\n", $carousel_text);
            if (count($carousel_arr) > 0) {
              for ($i = 0; $i < count($carousel_arr); $i++) {
                $img = explode("||", $carousel_arr[$i])[0];
                $url = explode("||", $carousel_arr[$i])[1];
                $title = explode("||", $carousel_arr[$i])[2];
                $carousel[] = array("img" => trim($img), "url" => trim($url), "title" => trim($title));
              };
            }
          }
          $recommend = [];
          $recommend_text = $this->options->AIndex_Recommend;
          if ($recommend_text) {
            $recommend_arr = explode("||", $recommend_text);
            if (count($recommend_arr) === 2) $recommend = $recommend_arr;
          }
          ?>
          <?php if (sizeof($carousel) > 0 || sizeof($recommend) === 2) : ?>
            <div class="joe_index__banner">
              <?php if (sizeof($carousel) > 0) : ?>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php foreach ($carousel as $item) : ?>
                      <div class="swiper-slide">
                        <a class="item" href="<?php echo $item['url'] ?>" target="_blank" rel="noopener noreferrer nofollow">
                          <img width="100%" height="100%" class="thumbnail lazyload" src="<?php _getLazyload() ?>" data-src="<?php echo $item['img'] ?>" alt="<?php echo $item['title'] ?>" />
                          <div class="title"><?php echo $item['title'] ?></div>
                          <svg class="icon" viewBox="0 0 1026 1024" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M784.3 1007.961a33.2 33.2 0 0 1-27.106-9.062L540.669 854.55 431.766 962.813c-9.062 9.062-36.168 18.044-45.23 9.062a49.72 49.72 0 0 1-27.106-45.23V727.763a33.2 33.2 0 0 1 9.463-27.106l343.071-370.578a44.748 44.748 0 0 1 63.274 63.274l-334.17 361.515v72.175l63.273-54.211a42.583 42.583 0 0 1 54.212-9.062l198.64 126.386L910.847 140.34 151.647 510.837 323.343 619.34c18.044 9.062 27.106 45.23 9.062 63.273-9.062 18.044-45.23 27.106-63.273 18.044L34.082 547.005c-8.981-8.982-18.043-17.723-18.043-36.168s9.062-27.105 27.105-36.167l903.79-451.815c18.043-9.062 36.167-9.062 45.229 0 18.284 9.223 18.284 27.106 18.284 45.15L829.69 971.794c0 18.043-9.062 27.105-27.105 36.167z" />
                          </svg>
                        </a>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              <?php endif; ?>
              <?php if (sizeof($recommend) === 2) : ?>
                <div class="joe_index__banner-recommend <?php echo sizeof($carousel) === 0 ? 'noswiper' : '' ?>">
                  <?php foreach ($recommend as $cid) : ?>
                    <?php $this->widget('Widget_Contents_Post@' . $cid, 'cid=' . $cid)->to($item); ?>
                    <figure class="item">
                      <a class="thumbnail" href="<?php $item->permalink() ?>" title="<?php $item->title() ?>">
                        <img width="100%" height="100%" class="lazyload" src="<?php _getLazyload(); ?>" data-src="<?php echo _getThumbnails($item)[0]; ?>" alt="<?php $item->title() ?>" />
                      </a>
                      <figcaption class="information">
                        <span class="type">推荐</span>
                        <div class="text"><?php $item->title() ?></div>
                      </figcaption>
                    </figure>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($this->options->AIndex_Hot === "on") : ?>
            <?php $this->widget('Widget_Contents_Hot@Index', 'pageSize=4')->to($item); ?>
            <div class="joe_index__hot">
              <ul class="joe_index__hot-list">
                <?php while ($item->next()) : ?>
                  <li class="item">
                    <a class="link" href="<?php $item->permalink(); ?>" title="<?php $item->title(); ?>">
                      <figure class="inner">
                        <span class="views"><?php echo number_format($item->views); ?> ℃</span>
                        <img width="100%" height="120" class="image lazyload" src="<?php _getLazyload(); ?>" data-src="<?php echo _getThumbnails($item)[0]; ?>" alt="<?php $item->title(); ?>" />
                        <figcaption class="title"><?php $item->title(); ?></figcaption>
                      </figure>
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div>
          <?php endif; ?>
          <?php
          $index_ad_text = $this->options->AIndex_Ad;
          $index_ad = null;
          if ($index_ad_text) {
            $index_ad_arr = explode("||", $index_ad_text);
            if (count($index_ad_arr) === 2) $index_ad = array("image" => trim($index_ad_arr[0]), "url" => trim($index_ad_arr[1]));
          }
          ?>
          <?php if ($index_ad) : ?>
            <div class="joe_index__ad">
              <a class="joe_index__ad-link" href="<?php echo $index_ad['url'] ?>" target="_blank" rel="noopener noreferrer nofollow">
                <img width="100%" height="200" class="image lazyload" src="<?php _getLazyload() ?>" data-src="<?php echo $index_ad['image'] ?>" alt="<?php echo $index_ad['url'] ?>" />
                <span class="icon">广告</span>
              </a>
            </div>
          <?php endif; ?>
        <!--轮播图、广告、热门文章等 end-->
    </div>