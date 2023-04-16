<?php 
/**
 * Github
 * 
 * @package custom 
 * 
 */
?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <?php $this->need('public/include.php'); ?>
  <link href="<?php _getAssets('assets/css/joe.live.min.css'); ?>" rel="stylesheet">
  <link href="<?php _getAssets('assets/css/page.css'); ?>" rel="stylesheet">
  <script src="<?php _getAssets('assets/js/joe.live.min.js'); ?>"></script>
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
    
    
    <?php if ($this->options->Aframe === 'two') : ?>
    <!--如果是风格二 要记得输出全局图片-->
    <link href="<?php _getAssets('assets/css/Two-Index.css'); ?>" rel="stylesheet" />
    <!--版本二输出-->
    <?php $this->need('CL-Post/Two-Post/Post-header.php'); ?>
    <?php endif; ?>
    
    
    <?php if ($this->options->Aframe === 'three') : ?>
    <!--风格三输出头部部分-->
    <!--引入相关链接-->
        <link href="<?php _getAssets('assets/css/Three-Index.css'); ?>" rel="stylesheet" />
    <!--风格三搜索信息-->
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
      <div class="joe_main">
        <div class="joe_detail" data-cid="<?php echo $this->cid ?>">
          <?php if ($this->options->Aframe === 'one') : ?>
          <?php $this->need('CL-Post/One-Post/Post-batten.php'); ?>
          <?php endif; ?>
          
          <!--如果是风格二输出-->
          <?php if ($this->options->Aframe === 'two') : ?>
          <!--引入链接-->
            <link href="<?php _getAssets('assets/css/Two-Index.css'); ?>" rel="stylesheet" />
            <!--版本二输出-->
            <?php $this->need('CL-Post/Two-Post/Post-batten.php'); ?>
          <?php endif; ?>
          
          
           <!--如果是风格四输出-->
          <?php if ($this->options->Aframe === 'four') : ?>
          <!--引入链接-->
            <link href="<?php _getAssets('assets/css/Four-Index.css'); ?>" rel="stylesheet" />
            <!--版本四输出-->
            <?php $this->need('CL-Post/Four-Post/Post-batten.php'); ?>
          <?php endif; ?>
          <div class="joe_detail__leaving">
            <section id="github">
			<!-- 头部 -->
			
			<!-- 主体 -->
			<section class="container github-index">
					<section class="one-git">
						<?php
						$githubUser = $this->fields->github;
						if ($githubUser == "" || $githubUser == null) {
							$githubUser = 'wanfengba';
						}
						?>
						<section class="search-title">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round">
								<path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
								<line x1="16" y1="8" x2="2" y2="22"></line>
								<line x1="17.5" y1="15" x2="9" y2="15"></line>
							</svg>
							<section>
								<span class="ellipsis"><?php echo $githubUser; ?> 的 Repo</span>
							</section>
						</section>
						<section class="github-index-article article">

							<div class="github_page">
								<div class="loading-nav text-center" style="padding: 2rem;">
									<div class="spinner-border" role="status">
										<span class="sr-only"></span>
									</div>
								</div>
								<nav class="alert alert-warning hide text-center" role="alert">
									<p class="infinite-scroll-request">加载失败！尝试重新加载</p>
								</nav>
							</div>
					</section>
				</section>

			</section>
			<!-- 尾部 -->
		</section>
          </div>
        </div>
        <?php $this->need('public/comment.php'); ?>
      </div>
      <?php $this->need('public/aside.php'); ?>
    </div>
    <script type="text/javascript">
    function appendHtml(elem, value) {
        let node = document.createElement("div"),
            fragment = document.createDocumentFragment(),
            childs = null,
            i = 0;
        node.innerHTML = value;
        childs = node.childNodes;
        for (; i < childs.length; i++) {
            fragment.appendChild(childs[i]);
        }
        elem.appendChild(fragment);
        childs = null;
        fragment = null;
        node = null;
    }

    function openGithub () {
            const githubItemTemple = '<div class="github_card {BG_COLOR}">' +
                            '<h3 class="card__title">{REPO_NAME}</h3>' +
                            '<p class="card__content">{REPO_DESC}</p>' +
                            '<div class="card__date">{PROJECT_LANGUAGE} / {REPO_STARS} stars / {REPO_FORKS} forks </div>' +
                            '<div class="card__arrow">' +
                                '<a target="_blank" href="{REPO_URL}" class="btn-{BUTTON_COLOR}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">' +
                                    '<path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>' +
                                '</svg></a>' +
                            '</div>' +
                        '</div>';
        function handleGithub () {
            var repoContainer = document.querySelector('.github_page')//$('.github_page');
            var loadingContainer = document.querySelector(".github_page .loading-nav");
            var errorContainer = document.querySelector(".github_page .error-nav");
            var countContainer = document.querySelector(".github_tips");
            var colors = ["light", "info", "dark", "success", "black", "warning", "primary", "danger"];
            let httpRequest = new XMLHttpRequest();
            httpRequest.open('GET', "https://api.github.com/users/<?php echo $githubUser; ?>/repos?accept=application/vnd.github.v3+json&sort=updated&direction=desc&per_page=100", true);
            httpRequest.send();
            httpRequest.onreadystatechange = function () {
                if (httpRequest.readyState === 4 && httpRequest.status === 200) {
                    let json = JSON.parse(httpRequest.responseText);
                    if (json) {
                        loadingContainer.classList.add("hide")
                        let ul = "<div class=\"flexbox grid text-center " +
                            "github_contain" +
                            "\"></div>";
                        appendHtml(repoContainer, ul)
                        let contentContainer = document.querySelector(".github_contain");
                        json.sort(function (a, b) {
                            return b.stargazers_count - a.stargazers_count
                        })
                        let show_len = json.length > 33 ? 33 : json.length
                        for (let i = 0; i < show_len; i++) {
                            let repo = json[i]
                            repo.updated_at = repo.updated_at.substring(0, repo.updated_at.lastIndexOf("T"));
                            if (repo.language == null) {
                                repo.language = "未知";
                            }
                            //匹配替换
                            let item = githubItemTemple.replace("{REPO_NAME}", repo.name)
                                .replace("{REPO_URL}", repo.html_url)
                                .replace("{REPO_STARS}", repo.stargazers_count)
                                .replace("{REPO_FORKS}", repo.forks_count)
                                .replace("{REPO_DESC}", repo.description)
                                .replace("{BG_COLOR}", "bg-" + colors[i % 8])
                                .replace("{BUTTON_COLOR}", colors[(i) % 8])
                                .replace("{PROJECT_LANGUAGE}", repo.language);
                            appendHtml(contentContainer, item)
                        }
                    } else {
                        errorContainer.classList.remove("hide");
                    }
                }
            };
        };

        return {
            init: function () {
                handleGithub();
            }
        }
    };
    openGithub().init();


</script>
    <?php $this->need('public/footer.php'); ?>
  </div>
</body>

</html>
		

