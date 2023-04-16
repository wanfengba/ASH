document.addEventListener('DOMContentLoaded', () => {
	/* 激活轮播图功能 */
	{
		if ($('.joe_index__banner .swiper-container').length !== 0) {
			let direction = 'horizontal';
			if (!Joe.IS_MOBILE && $('.joe_index__banner-recommend .item').length === 2) direction = 'vertical';
			new Swiper('.swiper-container', {
				keyboard: false,
				direction,
				loop: true,
				autoplay: true,
				mousewheel: true,
				pagination: { el: '.swiper-pagination' },
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev'
				}
			});
		}
	}

	/* 初始化首页列表功能 */
	{
		const getListMode = _ => {
			if (_.article_type === 'default') {
				return `
                    <article class="Four_list-item wow">
                    	<div class="post_cover left">
                    		<a href="${_.permalink}"  title="${_.title}" rel="noopener noreferrer">
                    		    <img width="100%" height="100%" class="post_bg entered lazyload" src="${_.lazyload}" data-src="${_.image[0]}" alt="${_.title}" />
                    		</a>
                    	</div>
                    	<div class="Four_list-info">
                    		<a class="article-title" href="${_.permalink}" title="${_.title}" >${_.title}</a>
                    		<div class="article-meta-wrap">
                    			<span class="newPost-right" style="display: ${_.type === 'sticky' ? 'inline-block' : 'none'}">置顶</span>
                    			<span class="post-meta-date">
                    				<time datetime="${_.time}">${_.time}</time>
                    			</span>
                    			<span class="article-meta">
                    				${_.views} 阅读
                    			</span>
                    			<a class="article-meta__categories link" rel="noopener noreferrer" href="${_.category.length && _.category[0].permalink}">${_.category.length && _.category[0].name}</a>
                    			<span class="article-meta">
                    				<span class="article-meta-label">${_.commentsNum} 评论</span>
                    			</span>
                    			<span class="article-meta">
                    				<span class="article-meta-label">${_.agree} 点赞</span>
                    			</span>
                    		</div>
                    		<div class="content">${_.abstract}</div>
                    	</div>
                    </article>
                `;
			} else if (_.article_type === 'photos') {
				return `
                    <article class="Four_list-item wow">
                    	<div class="post_cover left">
                    		<a href="${_.permalink}"  title="${_.title}" rel="noopener noreferrer">
                    		    <img width="100%" height="100%" class="post_bg entered lazyload" src="${_.lazyload}" data-src="${_.image[0]}" alt="${_.title}" />
                    		</a>
                    	</div>
                    	<div class="Four_list-info">
                    		<a class="article-title" href="${_.permalink}" title="${_.title}" >${_.title}</a>
                    		<div class="article-meta-wrap">
                    			<span class="newPost-right" style="display: ${_.type === 'sticky' ? 'inline-block' : 'none'}">置顶</span>
                    			<span class="post-meta-date">
                    				<time datetime="${_.time}">${_.time}</time>
                    			</span>
                    			<span class="article-meta">
                    				${_.views} 阅读
                    			</span>
                    			<a class="article-meta__categories link" rel="noopener noreferrer" href="${_.category.length && _.category[0].permalink}">${_.category.length && _.category[0].name}</a>
                    			<span class="article-meta">
                    				<span class="article-meta-label">${_.commentsNum} 评论</span>
                    			</span>
                    			<span class="article-meta">
                    				<span class="article-meta-label">${_.agree} 点赞</span>
                    			</span>
                    		</div>
                    		<div class="content">${_.abstract}</div>
                    	</div>
                    </article>
                `;
			} else if (_.article_type === 'books') {
				return `
                    <article class="Four_list-item wow">
                    	<div class="post_cover left">
                    		<a href="${_.permalink}"  title="${_.title}" rel="noopener noreferrer">
                    		    <img width="100%" height="100%" class="post_bg entered lazyload" src="${_.lazyload}" data-src="${_.image[0]}" alt="${_.title}" />
                    		</a>
                    	</div>
                    	<div class="Four_list-info">
                    		<a class="article-title" href="${_.permalink}" title="${_.title}" >${_.title}</a>
                    		<div class="article-meta-wrap">
                    			<span class="newPost-right" style="display: ${_.type === 'sticky' ? 'inline-block' : 'none'}">置顶</span>
                    			<span class="post-meta-date">
                    				<time datetime="${_.time}">${_.time}</time>
                    			</span>
                    			<span class="article-meta">
                    				${_.views} 阅读
                    			</span>
                    			<a class="article-meta__categories link" rel="noopener noreferrer" href="${_.category.length && _.category[0].permalink}">${_.category.length && _.category[0].name}</a>
                    			<span class="article-meta">
                    				<span class="article-meta-label">${_.commentsNum} 评论</span>
                    			</span>
                    			<span class="article-meta">
                    				<span class="article-meta-label">${_.agree} 点赞</span>
                    			</span>
                    		</div>
                    		<div class="content">${_.abstract}</div>
                    	</div>
                    </article>
                `;
			} else {
				return `
                    <article class="Four_list-item wow">
                    	<div class="post_cover left">
                    		<a href="${_.permalink}"  title="${_.title}" rel="noopener noreferrer">
                    		    <img width="100%" height="100%" class="post_bg entered lazyload" src="${_.lazyload}" data-src="${_.image[0]}" alt="${_.title}" />
                    		</a>
                    	</div>
                    	<div class="Four_list-info">
                    		<a class="article-title" href="${_.permalink}" title="${_.title}" >${_.title}</a>
                    		<div class="article-meta-wrap">
                    			<span class="newPost-right" style="display: ${_.type === 'sticky' ? 'inline-block' : 'none'}">置顶</span>
                    			<span class="post-meta-date">
                    				<time datetime="${_.time}">${_.time}</time>
                    			</span>
                    			<span class="article-meta">
                    				${_.views} 阅读
                    			</span>
                    			<a class="article-meta__categories link" rel="noopener noreferrer" href="${_.category.length && _.category[0].permalink}">${_.category.length && _.category[0].name}</a>
                    			<span class="article-meta">
                    				<span class="article-meta-label">${_.commentsNum} 评论</span>
                    			</span>
                    			<span class="article-meta">
                    				<span class="article-meta-label">${_.agree} 点赞</span>
                    			</span>
                    		</div>
                    		<div class="content">${_.abstract}</div>
                    	</div>
                    </article>
                `;
			}
		};
		let queryData = { page: 1, pageSize: window.Joe.PAGE_SIZE, type: 'created' };
		const initDom = () => {
			$('.joe_index__list .Four_list').html('');
			$('.joe_load').show();
			let activeItem = $('.joe_index__title-title .item[data-type="' + queryData.type + '"]');
			let activeLine = $('.joe_index__title-title .line');
			activeItem.addClass('active').siblings().removeClass('active');
			activeLine.css({ left: activeItem.position().left, width: activeItem.width() });
		};
		const pushDom = () => {
			return new Promise((reslove, reject) => {
				$('.joe_load').attr('loading', true);
				$('.joe_load').html('loading...');
				$('.joe_index__list .joe_list__loading').show();
				$.ajax({
					url: Joe.BASE_API,
					type: 'POST',
					dataType: 'json',
					data: { routeType: 'publish_list', page: queryData.page, pageSize: queryData.pageSize, type: queryData.type },
					success(res) {
						if (res.data.length === 0) {
							$('.joe_load').removeAttr('loading');
							$('.joe_load').html('查看更多');
							$('.joe_load').hide();
							$('.joe_index__list .joe_list__loading').hide();
							return Qmsg.warning('没有更多内容了');
						}
						res.data.forEach(_ => $('.joe_index__list .Four_list').append(getListMode(_)));
						$('.joe_load').removeAttr('loading');
						$('.joe_load').html('查看更多');
						$('.joe_index__list .joe_list__loading').hide();
						reslove(res.data.length > 0 ? res.data.length - 1 : 0);
					}
				});
			});
		};
		initDom();
		pushDom();
		$('.joe_index__title-title .item').on('click', async function () {
			if ($(this).attr('data-type') === queryData.type) return;
			queryData = { page: 1, pageSize: window.Joe.PAGE_SIZE, type: $(this).attr('data-type') };
			initDom();
			pushDom();
		});
		$('.joe_load').on('click', async function () {
			if ($(this).attr('loading')) return;
			queryData.page++;
			let length = await pushDom();
			length = $('.joe_index__list .Four_list .joe_list__item').length - length;
			const queryElement = `.joe_index__list .Four_list .joe_list__item:nth-child(${length})`;
			const offset = $(queryElement).offset().top - $('.joe_header').height();
			window.scrollTo({ top: offset - 15, behavior: 'smooth' });
		});
	}

	/* 激活列表特效 */
	{
		const wow = $('.joe_index__list').attr('data-wow');
		if (wow !== 'off' && wow) new WOW({ boxClass: 'wow', animateClass: `animated ${wow}`, offset: 0, mobile: true, live: true, scrollContainer: null }).init();
	}
});
