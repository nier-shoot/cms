<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>欢迎界面</title>
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
		URL = 'http://localhost/class/cms/index.php/CMS/Index/welcome';
		HDPHP = 'http://localhost/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
		APP = 'http://localhost/class/cms/index.php/CMS';
		CONTROL = 'http://localhost/class/cms/index.php/CMS/Index';
		METH = 'http://localhost/class/cms/index.php/CMS/Index/welcome';
		GROUP = 'http://localhost/class/cms/App';
		TPL = 'http://localhost/class/cms/App/Cms/CMS/Tpl';
		CONTROLTPL = 'http://localhost/class/cms/App/Cms/CMS/Tpl/Index';
		STATIC = 'http://localhost/class/cms/App/Cms/CMS/Tpl/Static';
		PUBLIC = 'http://localhost/class/cms/App/Cms/CMS/Tpl/Public';
		COMMON = 'http://localhost/class/cms/Common';
</script>
    <link type="text/css" rel="stylesheet" href="http://localhost/class/cms/App/Cms/CMS/Tpl/Index/css/welcome.css"/>
</head>
<body>
<div class="warp">
    <h3>欢迎使用c26_CMS内容管理系统</h3>
    <table class="table2">
        <tr>
            <td class="w100">CMS版本:</td><td><?php echo C("version");?></td>
        </tr>
        <tr>
            <td>PHP版本:</td><td><?php echo PHP_OS;?></td>
        </tr>
        <tr>
            <td>服务器:</td><td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
        </tr>
        <tr>
            <td>开发团队:</td><td>后盾网c26</td>
        </tr>
        <tr>
            <td>项目负责人:</td><td>向军</td>
        </tr>
        <tr>
            <td>官方网址:</td><td>http://www.houdunwang.com</td>
        </tr>
    </table>
</div>
</body>
</html>