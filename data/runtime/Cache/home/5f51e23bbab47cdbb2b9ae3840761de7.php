<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML><html><head><meta charset="utf-8" /><title><?php echo ($page_seo["title"]); ?></title><meta name="keywords" content="<?php echo ($page_seo["keywords"]); ?>" /><meta name="description" content="<?php echo ($page_seo["description"]); ?>" /><meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" name="viewport"><link type="text/css" rel="stylesheet" href="../Style/shop.css"><script charset="utf-8" src="../Style/js/jquery.js" type="text/javascript"></script><script charset="utf-8" src="../Style/js/ecmall.js" type="text/javascript"></script><script type="text/javascript" src="../Style/js/index.js"></script><script src="../Style/js/touchslider.dev.js"></script></head><script type="text/javascript">
//<!CDATA[
var SITE_URL = __ROOT__;
var PRICE_FORMAT = '楼%s';

$(function(){
    var span = $("#child_nav");
    span.hover(function(){
        $("#float_layer:not(:animated)").show();
    }, function(){
        $("#float_layer").hide();
    });
});
//]]></script></head><body><div id="head"><img height="50" src="../Style/images/store_logo.jpg"></div><div id="nav"><ul class="navlist"><li id="n_0"><span ></span><ul class="submenu"><?php if(is_array($index_cate_list)): $i = 0; $__LIST__ = $index_cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('book/cate',array('cid'=>$vo['id']));?>" class="none_ico"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></li><li class="r active" id="n_1"><a href="<?php echo U('Index/index');?>"><span></span></a></li><li class="r" id="n_2"><a href="<?php echo U('User/index');?>"><span></span></a></li><li class="r" id="n_3"><a href="<?php echo U('Shopcart/index');?>"><span></span></a><i></i></li></ul><script type="text/javascript">    	$(".navlist > li#n_0").click(function(){
			$(this).toggleClass("active");
			
		});
		$(".navlist > li.r a").each(function() {
            href="index.php-app=member&act=login&ret_url=-index.php-app=member.htm"+$(this).attr("href");
			whref=window.location.href;
			if(whref.indexOf(href)!='-1'){
				$(this).parent("li").addClass("active");
			}
        });
    </script></div><div class="banner"><div id="slider" class="slider" style="overflow: hidden; visibility: visible; list-style: none outside none; position: relative;"><ul id="sliderlist" class="sliderlist" style="position: relative; overflow: hidden; transition: left 600ms ease 0s; width: 1800px; left: -1200px;"><?php if(is_array($ad)): $i = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="float: left; display: block; width: 600px;"><span><a href="<?php echo ($vo["url"]); ?>"><img title="<?php echo ($vo["desc"]); ?>" width="100%" src="data/upload/advert/<?php echo ($vo["content"]); ?>"></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><div id="pagenavi"><?php if(is_array($ad)): $k = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><a <?php if($k == 1): ?>class="active"<?php endif; ?> href="javascript:void(0);"><?php echo ($k); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div></div></div><div class="s_bottom"></div><script type="text/javascript">$(function(){
	$("div.module_special .wrap .major ul.list li:last-child").addClass("remove_bottom_line");
});
var active=0,
	as=document.getElementById('pagenavi').getElementsByTagName('a');
	
for(var i=0;i<as.length;i++){
	(function(){
		var j=i;
		as[i].onclick=function(){
			t2.slide(j);
			return false;
		}
	})();
}
var t2=new TouchSlider({id:'sliderlist', speed:600, timeout:6000, before:function(index){
		as[active].className='';
		active=index;
		as[active].className='active';
	}});
</script><div id="content"><div class="module_special"><h2 class="common_title veins2"><div class="ornament1"></div><div class="ornament2"></div><span class="ico1"><span class="ico2">推荐商品</span></span></h2><div class="wrap"><div class="wrap_child"><div class="major"><ul class="list"><?php if(is_array($tuijian)): $i = 0; $__LIST__ = $tuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li><div class="pic"><a href="<?php echo U('Item/index',array('id'=>$item['id']));?>"><img  src="<?php echo attach(get_thumb($item['img'], '_b'), 'item');?>"></a></div><div class="good_content"><h3><a  href="<?php echo U('Item/index',array('id'=>$item['id']));?>"><?php echo ($item["title"]); ?></a></h3><p>¥<?php echo ($item["price"]); ?></p></div><span class="show_good"><a  href="<?php echo U('Item/index',array('id'=>$item['id']));?>"></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div></div></div></div><div class="module_special tbr"><h2 class="common_title veins2"><div class="ornament1"></div><div class="ornament2"></div><span class="ico1"><span class="ico2">最新商品</span></span></h2><div class="wrap"><div class="wrap_child"><div class="major"><ul class="list"><?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li><div class="pic"><a href="<?php echo U('Item/index',array('id'=>$item['id']));?>"><img  src="<?php echo attach(get_thumb($item['img'], '_b'), 'item');?>"></a></div><div class="good_content"><h3><a  href="<?php echo U('Item/index',array('id'=>$item['id']));?>"><?php echo ($item["title"]); ?></a></h3><p>¥<?php echo ($item["price"]); ?></p></div><span class="show_good"><a  href="<?php echo U('Item/index',array('id'=>$item['id']));?>"></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div></div></div></div><div class="clear"></div></div><div id="footer"><p class="foot_nav"><a href="<?php echo U('Index/index');?>">商城首页</a> | <a href="<?php echo U('User/index');?>">会员中心</a> | <a href="<?php echo U('Shopcart/index');?>">购物车</a> | <a href="<?php echo U('aboutus/index', array('id'=>2));?>">品牌介绍</a></p><div style="height:40px; background:#fff; padding:0; overflow:hidden;">        &copy;Copyright 2013-2014 <a href="__ROOT__/" class="tdu clr6" target="_blank"><?php echo C('pin_site_name');?></a> 版权所有 
    </div></div><script>var PINER = {
    root: "__ROOT__",
    uid: "<?php echo $visitor['id'];?>", 
    async_sendmail: "<?php echo $async_sendmail;?>",
    config: {
        wall_distance: "<?php echo C('pin_wall_distance');?>",
        wall_spage_max: "<?php echo C('pin_wall_spage_max');?>"
    },
    //URL
    url: {}
};
//语言项目
var lang = {};
<?php $_result=L('js_lang');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>lang.<?php echo ($key); ?> = "<?php echo ($val); ?>";<?php endforeach; endif; else: echo "" ;endif; ?></script><?php $tag_load_class = new loadTag;$data = $tag_load_class->js(array('type'=>'js','href'=>'__STATIC__/js/jquery/plugins/jquery.tools.min.js,__STATIC__/js/jquery/plugins/jquery.masonry.js,__STATIC__/js/jquery/plugins/formvalidator.js,__STATIC__/js/fileuploader.js,__STATIC__/js/pinphp.js,__STATIC__/js/dialog.js,__STATIC__/js/wall.js,__STATIC__/js/item.js,__STATIC__/js/user.js,__STATIC__/js/album.js','cache'=>'0','return'=>'data',));?></body></html>