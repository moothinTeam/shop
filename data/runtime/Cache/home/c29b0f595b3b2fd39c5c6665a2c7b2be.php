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
    </script></div><div id="content"><div class="about pt20"><div class="about_top"><ul class="about_nav clearfix"><?php $tag_article_class = new articleTag;$about_nav = $tag_article_class->cate(array('type'=>'cate','cateid'=>'1','return'=>'about_nav','cache'=>'0',)); if(is_array($about_nav)): $i = 0; $__LIST__ = $about_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li <?php if($info['cate_id'] == $val['id']): ?>class="current"<?php endif; ?>><a href="<?php echo U('aboutus/index', array('id'=>$val['id']));?>"><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="about_content"><?php echo ($info["info"]); ?></div></div></div><div id="footer"><p class="foot_nav"><a href="<?php echo U('Index/index');?>">商城首页</a> | <a href="<?php echo U('User/index');?>">会员中心</a> | <a href="<?php echo U('Shopcart/index');?>">购物车</a> | <a href="<?php echo U('aboutus/index', array('id'=>2));?>">品牌介绍</a></p><div style="height:40px; background:#fff; padding:0; overflow:hidden;">        &copy;Copyright 2013-2014 <a href="__ROOT__/" class="tdu clr6" target="_blank"><?php echo C('pin_site_name');?></a> 版权所有 
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