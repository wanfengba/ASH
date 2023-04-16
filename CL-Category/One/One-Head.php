<!--原版的搜索-->
    <!--搜索的信息-->
          <div class="joe_archive__title">
            <svg width="20" height="20" class="joe_archive__title-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5zM16 8L2 22M17.5 15H9" />
            </svg>
            <div class="joe_archive__title-title">
              <span>搜索到</span>
              <span class="muted"><?php echo $this->getTotal(); ?></span>
              <span>篇与</span>
              <span class="muted ellipsis"><?php echo $this->_keywords; ?></span>
              <span>的结果</span>
            </div>
          </div>