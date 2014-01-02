<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>栏目管理</title>
    <script type='text/javascript' src='http://127.0.0.1/cms1/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<script src="http://127.0.0.1/cms1/hdphp/hdphp/Extend/Org/hdui/js/lhgcalendar.min.js"></script>
<link href='http://127.0.0.1/cms1/hdphp/hdphp/Extend/Org/hdui/css/hdui.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/cms1/hdphp/hdphp/Extend/Org/hdui/js/hdui.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/cms1/hdphp/cms';
		WEB = 'http://127.0.0.1/cms1/hdphp/cms/index.php';
		URL = 'http://127.0.0.1/cms1/hdphp/cms/index.php/Category/Index/index';
		HDPHP = 'http://127.0.0.1/cms1/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/cms1/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/cms1/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/cms1/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/cms1/hdphp/cms/index.php/Category';
		CONTROL = 'http://127.0.0.1/cms1/hdphp/cms/index.php/Category/Index';
		METH = 'http://127.0.0.1/cms1/hdphp/cms/index.php/Category/Index/index';
		GROUP = 'http://127.0.0.1/cms1/hdphp/cms/App';
		TPL = 'http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl';
		CONTROLTPL = 'http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl/Index';
		STATIC = 'http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl/Static';
		PUBLIC = 'http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl/Public';
		COMMON = 'http://127.0.0.1/cms1/hdphp/cms/Common';
</script>
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl/Index/css/css.css"/>
</head>
<body>
<div class='warp'>
    <div class="menu_list">
        <ul>
            <li><a href="javascript:;" class="action">栏目列表</a></li>
            <li><a href="<?php echo U('add');?>">添加顶级栏目</a></li>
            <li><a href="<?php echo U('update_cache');?>">更新栏目缓存</a></li>
        </ul>
    </div>
    <table class="table2">
        <thead>
        <tr>
            <td class="w80">cid</td>
            <td>栏目名称</td>
            <td class="w250">操作</td>
        </tr>
        </thead>
        <?php $hd["list"]["c"]["total"]=0;if(isset($category) && !empty($category)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($category));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($category,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>

        <tr>
            <td><?php echo $c['cid'];?></td>
            <td><?php echo $c['_name'];?></td>
            <td>
                <a href='<?php echo U("add",array("pid"=>$c["cid"]));?>'>添加子栏目</a> |
                <a href="">删除</a> |
                <a href="">编辑</a> |
                <a href="">查看</a>
            </td>
        </tr>
        <?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
    </table>
</div>
</body>
</html>














