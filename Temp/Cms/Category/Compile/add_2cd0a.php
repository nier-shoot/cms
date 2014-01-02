<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>添加栏目</title>
    <script type='text/javascript' src='http://127.0.0.1/cms1/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<script src="http://127.0.0.1/cms1/hdphp/hdphp/Extend/Org/hdui/js/lhgcalendar.min.js"></script>
<link href='http://127.0.0.1/cms1/hdphp/hdphp/Extend/Org/hdui/css/hdui.css' rel='stylesheet' media='screen'>
<script src='http://127.0.0.1/cms1/hdphp/hdphp/Extend/Org/hdui/js/hdui.js'></script>
<script type='text/javascript'>
		HOST = 'http://127.0.0.1';
		ROOT = 'http://127.0.0.1/cms1/hdphp/cms';
		WEB = 'http://127.0.0.1/cms1/hdphp/cms/index.php';
		URL = 'http://127.0.0.1/cms1/hdphp/cms/index.php/Category/Index/add/pid/1';
		HDPHP = 'http://127.0.0.1/cms1/hdphp/hdphp';
		HDPHPDATA = 'http://127.0.0.1/cms1/hdphp/hdphp/Data';
		HDPHPTPL = 'http://127.0.0.1/cms1/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://127.0.0.1/cms1/hdphp/hdphp/Extend';
		APP = 'http://127.0.0.1/cms1/hdphp/cms/index.php/Category';
		CONTROL = 'http://127.0.0.1/cms1/hdphp/cms/index.php/Category/Index';
		METH = 'http://127.0.0.1/cms1/hdphp/cms/index.php/Category/Index/add';
		GROUP = 'http://127.0.0.1/cms1/hdphp/cms/App';
		TPL = 'http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl';
		CONTROLTPL = 'http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl/Index';
		STATIC = 'http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl/Static';
		PUBLIC = 'http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl/Public';
		COMMON = 'http://127.0.0.1/cms1/hdphp/cms/Common';
</script>
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl/Index/css/css.css"/>
    <script type="text/javascript" src="http://127.0.0.1/cms1/hdphp/cms/App/Cms/Category/Tpl/Index/js/validation.js"></script>
</head>
<body>
<div class="warp">
    <div class="menu_list">
        <ul>
            <li><a href="<?php echo U('index');?>">栏目列表</a></li>
            <li><a href="javascript:;" class="action">添加栏目</a></li>
        </ul>
    </div>
    <form action="http://127.0.0.1/cms1/hdphp/cms/index.php/Category/Index/add" method="post" class="hd-form">
        <input type="hidden" name='pid' value="<?php echo _default($_GET['pid'],0);?>"/>
        <div class="tab">
            <ul class="tab_menu">
                <li lab="base">
                    <a> 基本设置 </a>
                </li>
            </ul>
            <div class="tab_content">
                <div id="base">
                    <table class="table1">
                        <tr>
                            <td class="w100">父级</td>
                            <td>
                               <?php echo $pname;?>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100">栏目名称</td>
                            <td>
                                <input type="text" class='w300' name="cat_name"/>
                            </td>
                        </tr>
                        <tr>
                            <td>关键字</td>
                            <td>
                                <input type="text" class='w300' name="keywords"/>
                            </td>
                        </tr>
                        <tr>
                            <td>描述</td>
                            <td>
                                <textarea name="description" class="w400 h100"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="确定"/>
        </div>
    </form>
</div>
</body>
</html>