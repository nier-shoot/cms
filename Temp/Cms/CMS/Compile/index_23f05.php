<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>HDCMS - 后台管理中心</title>
    <script type='text/javascript' src='http://localhost/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<script src="http://localhost/hdphp/hdphp/Extend/Org/hdui/js/lhgcalendar.min.js"></script>
<link href='http://localhost/hdphp/hdphp/Extend/Org/hdui/css/hdui.css' rel='stylesheet' media='screen'>
<script src='http://localhost/hdphp/hdphp/Extend/Org/hdui/js/hdui.js'></script>
<link href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]--><script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/class/cms';
		WEB = 'http://localhost/class/cms/index.php';
		URL = 'http://localhost/class/cms/index.php';
		HDPHP = 'http://localhost/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
		APP = 'http://localhost/class/cms/index.php/CMS';
		CONTROL = 'http://localhost/class/cms/index.php/CMS/Index';
		METH = 'http://localhost/class/cms/index.php/CMS/Index/index';
		GROUP = 'http://localhost/class/cms/App';
		TPL = 'http://localhost/class/cms/App/Cms/CMS/Tpl';
		CONTROLTPL = 'http://localhost/class/cms/App/Cms/CMS/Tpl/Index';
		STATIC = 'http://localhost/class/cms/App/Cms/CMS/Tpl/Static';
		PUBLIC = 'http://localhost/class/cms/App/Cms/CMS/Tpl/Public';
		COMMON = 'http://localhost/class/cms/Common';
</script>
    <link type="text/css" rel="stylesheet" href="http://localhost/class/cms/App/Cms/CMS/Tpl/Index/css/css.css"/>
    <script type="text/javascript" src="http://localhost/class/cms/App/Cms/CMS/Tpl/Index/js/js.js"></script>
    <base target="iframe"/>
</head>
<body>
<div class="nav">
    <!--头部左侧导航-->
    <div class="top_menu">
        <a href="javascript:" onclick="get_left_menu(this,0);" class="top_menu">常用</a>
        <?php $hd["list"]["m"]["total"]=0;if(isset($top_menu) && !empty($top_menu)):$_id_m=0;$_index_m=0;$lastm=min(1000,count($top_menu));
$hd["list"]["m"]["first"]=true;
$hd["list"]["m"]["last"]=false;
$_total_m=ceil($lastm/1);$hd["list"]["m"]["total"]=$_total_m;
$_data_m = array_slice($top_menu,0,$lastm);
if(count($_data_m)==0):echo "";
else:
foreach($_data_m as $key=>$m):
if(($_id_m)%1==0):$_id_m++;else:$_id_m++;continue;endif;
$hd["list"]["m"]["index"]=++$_index_m;
if($_index_m>=$_total_m):$hd["list"]["m"]["last"]=true;endif;?>

            <a href="javascript:" onclick="get_left_menu(this,<?php echo $m['nid'];?>);" class="top_menu"><?php echo $m['title'];?></a>
        <?php $hd["list"]["m"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
    </div>
    <!--头部左侧导航-->
    <!--头部右侧导航-->
    <div class="r_menu">
        <?php echo $_SESSION['rname'];?> : admin <a href="<?php echo U('Login/out');?>" target="_self">[退出]</a><span>|</span>
        <a href="http://localhost/class/cms/index.php" target="_blank">前台首页</a>
    </div>
    <!--头部右侧导航-->
</div>
<!--左侧导航-->
<div class="main">
    <!--主体左侧导航-->
    <div class="left_menu">
        <div class="nid_0">
            <dl>
                <dt>内容</dt>
                <dd>
                    <a href="<?php echo U('Content/Index/index');?>">文章管理</a>
                </dd>
                <dd>
                    <a href="<?php echo U('Category/Index/index');?>">栏目管理</a>
                </dd>
            </dl>
        </div>
    </div>
    <!--主体左侧导航-->
    <div class="top_content">
        <iframe src="<?php echo U('welcome');?>" name="iframe" scrolling="auto" frameborder="0" style="height: 100%;width: 100%;"></iframe>
    </div>
    <!--内容显示区域-->
</div>
<!--左侧导航-->
</body>
</html>