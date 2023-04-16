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
				<div class="Two-Index-content wow">
                	<div class="Two-Index-cover_img">
                	<img width="100%" height="100%" class="article-cover entered lazyload" src="${_.lazyload}" data-src="${_.image[0]}" alt="${_.title}" />
                	</div>
                	<div class="Two-Index-info">
                	    <span class="badge" style="display: ${_.type === 'sticky' ? 'inline-block' : 'none'}">置顶</span>
                	    <a href="${_.permalink}" class="article-title article-title-link" title="${_.title}" rel="noopener noreferrer">
                            ${_.title}
                        </a>
                		<div class="Two-Index-meta">
                			<div class="article-meta-wrap">
                				<span class="post-meta-date">
                				    
                					<svg class="meta_icon post-ui-icon" style="width:21px;height:21px;position:relative;top:6px">
                						<use xlink:href="#icon-rili"></use>
                					</svg>
                					<span class="article-meta-label">发表于</span>
                					<time class="post-meta-date-created" datetime="${_.time}" title="发表于 ${_.time}" style="display: inline;">${_.time}</time>
                					
                    				<span class="article-meta">
                    					<span class="article-meta-separator">|</span>
                    					<svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M512.2 564.743a76.818 76.818 0 0 1-30.973-6.508L108.224 393.877c-26.105-11.508-42.56-35.755-42.927-63.272-.384-27.44 15.356-52.053 41.042-64.232l373.004-176.74c20.591-9.737 45.16-9.755 65.75.017L917.68 266.39c25.668 12.188 41.39 36.792 41.024 64.231-.384 27.5-16.821 51.73-42.908 63.237l-372.57 164.377a77.18 77.18 0 0 1-31.025 6.508zM139.843 329.592l370.213 163.241c1.291.56 3.018.567 4.345-.009l369.758-163.128-369.706-175.464v-.01c-1.326-.628-3.158-.636-4.502 0l-370.108 175.37zm748.015 1.858h.175-.175zM512.376 941.674c-10.348 0-20.8-2.32-30.537-6.997L121.05 778.624c-18.113-7.834-26.454-28.87-18.62-46.983 7.835-18.112 28.862-26.488 46.993-18.61l362.08 156.629 345.26-156.366c17.939-8.166 39.14-.253 47.324 17.746 8.166 17.964.227 39.157-17.729 47.324l-344.51 156.61c-9.196 4.449-19.281 6.7-29.471 6.7z" fill="#444"/><path d="M871.563 515.449L511.81 671.775 152.358 515.787v73.578a34.248 34.248 0 0 0 20.76 31.48l301.518 129.19c11.806 5.703 24.499 8.546 37.175 8.546s25.367-2.843 37.174-8.546L850.82 620.534a34.248 34.248 0 0 0 20.744-31.474V515.45z" fill="#ff6a18"/></svg>
                                        <a class="link article-meta__categories" rel="noopener noreferrer" href="${_.category.length && _.category[0].permalink}">${_.category.length && _.category[0].name}</a>
                    				</span>
                			</div>
                		</div>
                	</div>
                	<a class="article-content" href="${_.permalink}" title="文章摘要" rel="noopener noreferrer">
                		<div class="article-content-text">${_.abstract}</div>
                	</a>
                	<div class="Two-Index-arrow"></div>
                </div>
                `;
			} else if (_.article_type === 'photos') {
				return `
                    <div class="Two-Index-content wow">
                	<div class="Two-Index-cover_img">
                	<img width="100%" height="100%" class="article-cover entered lazyload" src="${_.lazyload}" data-src="${_.image[0]}" alt="${_.title}" />
                	</div>
                	<div class="Two-Index-info">
                	    <span class="badge" style="display: ${_.type === 'sticky' ? 'inline-block' : 'none'}">置顶</span>
                	    <a href="${_.permalink}" class="article-title article-title-link" title="${_.title}" rel="noopener noreferrer">
                            ${_.title}
                        </a>
                		<div class="Two-Index-meta">
                			<div class="article-meta-wrap">
                				<span class="post-meta-date">
                				    
                					<svg class="meta_icon post-ui-icon" style="width:21px;height:21px;position:relative;top:6px">
                						<use xlink:href="#icon-rili"></use>
                					</svg>
                					<span class="article-meta-label">发表于</span>
                					<time class="post-meta-date-created" datetime="${_.time}" title="发表于 ${_.time}" style="display: inline;">${_.time}</time>
                					
                    				<span class="article-meta">
                    					<span class="article-meta-separator">|</span>
                    					<svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M512.2 564.743a76.818 76.818 0 0 1-30.973-6.508L108.224 393.877c-26.105-11.508-42.56-35.755-42.927-63.272-.384-27.44 15.356-52.053 41.042-64.232l373.004-176.74c20.591-9.737 45.16-9.755 65.75.017L917.68 266.39c25.668 12.188 41.39 36.792 41.024 64.231-.384 27.5-16.821 51.73-42.908 63.237l-372.57 164.377a77.18 77.18 0 0 1-31.025 6.508zM139.843 329.592l370.213 163.241c1.291.56 3.018.567 4.345-.009l369.758-163.128-369.706-175.464v-.01c-1.326-.628-3.158-.636-4.502 0l-370.108 175.37zm748.015 1.858h.175-.175zM512.376 941.674c-10.348 0-20.8-2.32-30.537-6.997L121.05 778.624c-18.113-7.834-26.454-28.87-18.62-46.983 7.835-18.112 28.862-26.488 46.993-18.61l362.08 156.629 345.26-156.366c17.939-8.166 39.14-.253 47.324 17.746 8.166 17.964.227 39.157-17.729 47.324l-344.51 156.61c-9.196 4.449-19.281 6.7-29.471 6.7z" fill="#444"/><path d="M871.563 515.449L511.81 671.775 152.358 515.787v73.578a34.248 34.248 0 0 0 20.76 31.48l301.518 129.19c11.806 5.703 24.499 8.546 37.175 8.546s25.367-2.843 37.174-8.546L850.82 620.534a34.248 34.248 0 0 0 20.744-31.474V515.45z" fill="#ff6a18"/></svg>
                                        <a class="link article-meta__categories" rel="noopener noreferrer" href="${_.category.length && _.category[0].permalink}">${_.category.length && _.category[0].name}</a>
                    				</span>
                			</div>
                		</div>
                	</div>
                	<a class="article-content" href="${_.permalink}" title="文章摘要" rel="noopener noreferrer">
                		<div class="article-content-text">${_.abstract}</div>
                	</a>
                	<div class="Two-Index-arrow"></div>
                </div>
                `;
			} else if (_.article_type === 'books') {
				return `
                    <div class="Two-Index-content wow">
                	<div class="Two-Index-cover_img">
                	<img width="100%" height="100%" class="article-cover entered lazyload" src="${_.lazyload}" data-src="${_.image[0]}" alt="${_.title}" />
                	</div>
                	<div class="Two-Index-info">
                	    <span class="badge" style="display: ${_.type === 'sticky' ? 'inline-block' : 'none'}">置顶</span>
                	    <a href="${_.permalink}" class="article-title article-title-link" title="${_.title}" rel="noopener noreferrer">
                            ${_.title}
                        </a>
                		<div class="Two-Index-meta">
                			<div class="article-meta-wrap">
                				<span class="post-meta-date">
                				    
                					<svg class="meta_icon post-ui-icon" style="width:21px;height:21px;position:relative;top:6px">
                						<use xlink:href="#icon-rili"></use>
                					</svg>
                					<span class="article-meta-label">发表于</span>
                					<time class="post-meta-date-created" datetime="${_.time}" title="发表于 ${_.time}" style="display: inline;">${_.time}</time>
                					
                    				<span class="article-meta">
                    					<span class="article-meta-separator">|</span>
                    					<svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M512.2 564.743a76.818 76.818 0 0 1-30.973-6.508L108.224 393.877c-26.105-11.508-42.56-35.755-42.927-63.272-.384-27.44 15.356-52.053 41.042-64.232l373.004-176.74c20.591-9.737 45.16-9.755 65.75.017L917.68 266.39c25.668 12.188 41.39 36.792 41.024 64.231-.384 27.5-16.821 51.73-42.908 63.237l-372.57 164.377a77.18 77.18 0 0 1-31.025 6.508zM139.843 329.592l370.213 163.241c1.291.56 3.018.567 4.345-.009l369.758-163.128-369.706-175.464v-.01c-1.326-.628-3.158-.636-4.502 0l-370.108 175.37zm748.015 1.858h.175-.175zM512.376 941.674c-10.348 0-20.8-2.32-30.537-6.997L121.05 778.624c-18.113-7.834-26.454-28.87-18.62-46.983 7.835-18.112 28.862-26.488 46.993-18.61l362.08 156.629 345.26-156.366c17.939-8.166 39.14-.253 47.324 17.746 8.166 17.964.227 39.157-17.729 47.324l-344.51 156.61c-9.196 4.449-19.281 6.7-29.471 6.7z" fill="#444"/><path d="M871.563 515.449L511.81 671.775 152.358 515.787v73.578a34.248 34.248 0 0 0 20.76 31.48l301.518 129.19c11.806 5.703 24.499 8.546 37.175 8.546s25.367-2.843 37.174-8.546L850.82 620.534a34.248 34.248 0 0 0 20.744-31.474V515.45z" fill="#ff6a18"/></svg>
                                        <a class="link article-meta__categories" rel="noopener noreferrer" href="${_.category.length && _.category[0].permalink}">${_.category.length && _.category[0].name}</a>
                    				</span>
                			</div>
                		</div>
                	</div>
                	<a class="article-content" href="${_.permalink}" title="文章摘要" rel="noopener noreferrer">
                		<div class="article-content-text">${_.abstract}</div>
                	</a>
                	<div class="Two-Index-arrow"></div>
                </div>
                `;
			} else {
				return `
                    <div class="Two-Index-content wow">
                	<div class="Two-Index-cover_img">
                	<img width="100%" height="100%" class="article-cover entered lazyload" src="${_.lazyload}" data-src="${_.image[0]}" alt="${_.title}" />
                	</div>
                	<div class="Two-Index-info">
                	    <span class="badge" style="display: ${_.type === 'sticky' ? 'inline-block' : 'none'}">置顶</span>
                	    <a href="${_.permalink}" class="article-title article-title-link" title="${_.title}" rel="noopener noreferrer">
                            ${_.title}
                        </a>
                		<div class="Two-Index-meta">
                			<div class="article-meta-wrap">
                				<span class="post-meta-date">
                				    
                					<svg class="meta_icon post-ui-icon" style="width:21px;height:21px;position:relative;top:6px">
                						<use xlink:href="#icon-rili"></use>
                					</svg>
                					<span class="article-meta-label">发表于</span>
                					<time class="post-meta-date-created" datetime="${_.time}" title="发表于 ${_.time}" style="display: inline;">${_.time}</time>
                					
                    				<span class="article-meta">
                    					<span class="article-meta-separator">|</span>
                    					<svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M512.2 564.743a76.818 76.818 0 0 1-30.973-6.508L108.224 393.877c-26.105-11.508-42.56-35.755-42.927-63.272-.384-27.44 15.356-52.053 41.042-64.232l373.004-176.74c20.591-9.737 45.16-9.755 65.75.017L917.68 266.39c25.668 12.188 41.39 36.792 41.024 64.231-.384 27.5-16.821 51.73-42.908 63.237l-372.57 164.377a77.18 77.18 0 0 1-31.025 6.508zM139.843 329.592l370.213 163.241c1.291.56 3.018.567 4.345-.009l369.758-163.128-369.706-175.464v-.01c-1.326-.628-3.158-.636-4.502 0l-370.108 175.37zm748.015 1.858h.175-.175zM512.376 941.674c-10.348 0-20.8-2.32-30.537-6.997L121.05 778.624c-18.113-7.834-26.454-28.87-18.62-46.983 7.835-18.112 28.862-26.488 46.993-18.61l362.08 156.629 345.26-156.366c17.939-8.166 39.14-.253 47.324 17.746 8.166 17.964.227 39.157-17.729 47.324l-344.51 156.61c-9.196 4.449-19.281 6.7-29.471 6.7z" fill="#444"/><path d="M871.563 515.449L511.81 671.775 152.358 515.787v73.578a34.248 34.248 0 0 0 20.76 31.48l301.518 129.19c11.806 5.703 24.499 8.546 37.175 8.546s25.367-2.843 37.174-8.546L850.82 620.534a34.248 34.248 0 0 0 20.744-31.474V515.45z" fill="#ff6a18"/></svg>
                                        <a class="link article-meta__categories" rel="noopener noreferrer" href="${_.category.length && _.category[0].permalink}">${_.category.length && _.category[0].name}</a>
                    				</span>
                			</div>
                		</div>
                	</div>
                	<a class="article-content" href="${_.permalink}" title="文章摘要" rel="noopener noreferrer">
                		<div class="article-content-text">${_.abstract}</div>
                	</a>
                	<div class="Two-Index-arrow"></div>
                </div>
                `;
			}
		};
		let queryData = { page: 1, pageSize: window.Joe.PAGE_SIZE, type: 'created' };
		const initDom = () => {
			$('.joe_index__list .Two-Index').html('');
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
						res.data.forEach(_ => $('.joe_index__list .Two-Index').append(getListMode(_)));
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
			length = $('.joe_index__list .Two-Index .joe_list__item').length - length;
			const queryElement = `.joe_index__list .Two-Index .joe_list__item:nth-child(${length})`;
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
