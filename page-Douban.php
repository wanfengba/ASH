<?php 
/**
 * 豆瓣
 * 
 * @package custom 
 * 
 */
require 'core/ParserDom.php';

//获取豆瓣清单数据
function getDoubanData($userID,$type){

    $dataList = [];
    $filePath = __DIR__.'/src/cache/'.$type.'.json';

    $fp = fopen($filePath, 'r');
    if ($fp) {
        $contents = fread($fp, filesize($filePath));
        fclose($fp); 
        $data = json_decode($contents);
        if (time() - $data->time > 60 * 60 * 72) {//缓存文件过期
            $dataList = updateData($userID,$filePath,$type);
        }else{
            $lastUpdateTime = date('Y-m-d', $data->time); //H 24小时制 2021-10-12 23:00:01
            if ($data->user!=null && $data->user !== $userID){//用户名有修改
                $dataList = updateData($userID,$filePath,$type);
            }else {
                if ($data->data == null || $data->data == ""){//缓存文件中的电影数据为空
                    $dataList = updateData($userID,$filePath,$type); 
                }else{//读取缓存文件中的数据
                    $dataList = $data->data;
                    echo '';
                }
            }
        }
    } else {//目录下无movie.json，此时需要创建文件，并且更新信息
        $dataList = updateData($userID,$filePath,$type);
    }
    return $dataList;
}

function curl_get_contents($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}


function updateData($doubanID = '214924004',$filePath,$type)
{
    $url = "https://".$type.".douban.com/people/$doubanID/chenluoguo"; 
    $p1 = getHTML($url);
    $movieList=[];
    $p1 = getMoviesAndNextPage($p1,$type);
    $movieList = array_merge($p1['data']);
    $num = 0;
    while ($p1['next']!=null && $num <= 3) {
        $p1          = getHTML($p1['next']);
        $p1          = getMoviesAndNextPage($p1,$type);
        $movieList = array_merge($movieList, $p1['data']);
        $num ++;

    }
    if ($movieList == null || $movieList == ""){
        $function = "";
        if(!function_exists('json_decode')) {
            $function .= "服务器不支持json_decode()方法";
        }
        if(!function_exists('curl_init')) {
            $function .= " 服务器没有curl扩展";
        }
        $info =  "获取豆瓣数据失败，可能原因是：1. ip被豆瓣封锁（修改140行代码的cookie） 2. 豆瓣id配置错误（检查该地址是否能够打开".$url."）3. ".$function;
        echo '<script>$(function(){$(".douban_tips").text('.$info.')})</script>';
    }else{
        echo '<script>$(function(){$(".douban_tips").html("添加缓存数据成功，请刷新一次页面查看最新数据（如果一直提示刷新，请勿将全站静态缓存和检查主题下是否存在<code>src/cache</code>目录）")})</script>';
    }
    $data = fopen($filePath, "w");
    fwrite($data, json_encode(['time' => time(), 'user' => $doubanID , 'data' => $movieList]));
    fclose($data);
    return [];
}

function getMoviesAndNextPage($html = '',$type)
{
    $selector = [];
    if ($type == "movie"){
        $selector["item"] = "div.item";
        $selector["title"] = "li.title";
        $selector["img"] = "div.pic a img";
        $selector["href"] = "a";
        $selector["next"] = "span.next a";

    }else{
        $selector["item"] = ".subject-item";
        $selector["title"] = ".info h2";
        $selector["img"] = "div.pic a img";
        $selector["href"] = "a";
        $selector["next"] = "span.next a";
    }
    if ($html != "" && $html != null){
        $doc       = new \HtmlParser\ParserDom($html);
        $itemArray = $doc->find($selector["item"]);
        $movieList = [];
        foreach ($itemArray as $v) {
            $t = $v->find($selector['title'], 0);
            $movie_name = trimall($t->getPlainText());
            $movie_img  = $v->find($selector["img"], 0)->getAttr("src");
            $movie_url  = $t->find($selector["href"], 0)->getAttr("href");
            //已经看过的电影
            $movieList[] = array("name" => $movie_name, "img" => $movie_img, "url" => $movie_url);
        }

        $t = $doc->find($selector["next"], 0);
        if ($t) {
            $t = "https://".$type.".douban.com" .$t->getAttr("href");
        }else{
            $t = null;
        }
        return ['data' => $movieList, 'next' =>  $t];
    }else{
        return ['data' => [], 'next' => null];
    }


}

function getHTML($url = '')
{
    $ch = curl_init();
    $cookie = 'bid=Km3ZGpkEE00; ap_v=0,6.0; _pk_ses.100001.3ac3=*; __utma=30149280.1672442383.1554254872.1554254872.1554254872.1; __utmc=30149280; __utmz=30149280.1554254872.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt_douban=1; __utma=81379588.1887771065.1554254872.1554254872.1554254872.1; __utmc=81379588; __utmz=81379588.1554254872.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt=1; ll="108288"; _pk_id.100001.3ac3=88bbbc1a1f571a42.1554254872.1.1554254939.1554254872.; __utmb=30149280.7.10.1554254872; __utmb=81379588.7.10.1554254872';

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36');

    $output = curl_exec($ch);

    if (FALSE === $output)
        throw new Exception(curl_error($ch), curl_errno($ch));

    curl_close($ch);
    return $output;
}

function trimall($str)
{
    $qian = array(" ", "　", "\t", "\n", "\r");
    $hou  = array("", "", "", "", "");
    return str_replace($qian, $hou, $str);
}
?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <?php $this->need('public/include.php'); ?>
  <link href="<?php _getAssets('assets/css/joe.live.min.css'); ?>" rel="stylesheet">
  <link href="<?php _getAssets('assets/css/page.css'); ?>" rel="stylesheet">
  <script src="<?php _getAssets('assets/js/joe.live.min.js'); ?>"></script>
</head>

		<style>
			.douban_body .joe_tabs__head{
				justify-content: center;
			}
			.douban_list{
				gap: .6rem;
    			grid-template-columns: repeat(5,minmax(0,1fr));
			}
            .douban_list a{
                box-shadow: 0 1px 3px 0 rgb(0 0 0 / 10%), 0 1px 2px 0 rgb(0 0 0 / 6%);
			}
			@media (max-width:920px) {
				.douban_list{
					grid-template-columns: repeat(4,minmax(0,1fr));
				}
			}

			@media (max-width:660px) {
				.douban_list{
					grid-template-columns: repeat(2,minmax(0,1fr));
				}
			}
		</style>
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
              
              
		<section class="joe_detail__article">
			<joe-tabs class="douban_body">
				<span class="_temp" style="display: none">
					<br>{tabs-pane label="书单"}<br>
						<small class="douban_tips"></small>
						<div class="douban_list grid">
							<?php $readList = getDoubanData($this->fields->doubanID,"book"); foreach($readList as $v):?>
								<a href="<?php echo $v->url;?>" class="rounded-r-md text-center" aria-label="<?php echo $v->name;?>" title="<?php echo $v->name;?>">
									<img class="lazy h-full" data-src="<?php $img = "https://images.weserv.nl/?url=$v->img"; echo $img; ?>"
										src="<?php $img = "https://images.weserv.nl/?url=$v->img"; echo $img; ?>" alt="<?php echo $v->name;?>">
								</a>
							<?php endforeach; ?>
						</div>
					<br>{/tabs-pane}<br>{tabs-pane label="影单"}
						<small class="douban_tips"></small>
						<div class="douban_list grid">
							<?php $movieList = getDoubanData($this->fields->doubanID,"movie"); foreach ($movieList as $v): ?>
								<a href="<?php echo $v->url;?>" class="rounded-r-md relative text-center" aria-label="<?php echo $v->name;?>" title="<?php echo $v->name;?>">
									<img class="lazy h-full" data-src="<?php $img = "https://images.weserv.nl/?url=$v->img"; echo $img; ?>"
										src="<?php $img = "https://images.weserv.nl/?url=$v->img"; echo $img; ?>" alt="<?php echo $v->name;?>">
								</a>
							<?php endforeach; ?>
						</div>
					<p>{/tabs-pane}<br></p>
				</span>
			</joe-tabs>
    	</section>
		
		</div>
        </div>
        <?php $this->need('public/comment.php'); ?>
      </div>
      <?php $this->need('public/aside.php'); ?>
    </div>
    
    <?php $this->need('public/footer.php'); ?>
  </div>
</body>

</html>
		
    
