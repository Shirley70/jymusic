<?php if (!defined('THINK_PATH')) exit(); $_result=get_tag_tree();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i; if(!empty($tag['tags'])): ?><div>
	<h5><?php echo ($tag["tag_group"]); ?></h5>																
	<?php if(is_array($tag['tags'])): $i = 0; $__LIST__ = $tag['tags'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><a href="javascript:;" data-id="<?php echo ($t["id"]); ?>" class="tag label label-info mr-sm add-tag"><?php echo ($t["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>											           			
</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>