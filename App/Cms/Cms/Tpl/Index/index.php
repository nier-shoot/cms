<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>HDCMS - 后台管理中心</title>
    <hdui bootstrap="true"/>
    <css file="__CONTROL_TPL__/css/css.css"/>
    <js file="__CONTROL_TPL__/js/js.js"/>
    <base target="iframe"/>
</head> 
<body> 
<div class="nav">
    <!--头部左侧导航-->
    <div class="top_menu">
        <a href="javascript:" onclick="get_left_menu(this,0);" class="top_menu">常用</a>
        <list from="$top_menu" name="m">
            <a href="javascript:" onclick="get_left_menu(this,{$m.nid});" class="top_menu">{$m.title}</a>
        </list>
    </div>
    <!--头部左侧导航-->
    <!--头部右侧导航-->
    <div class="r_menu">
        {$hd.session.rname} : admin <a href="{|U:'Login/out'}" target="_self">[退出]</a><span>|</span>
        <a href="__WEB__" target="_blank">前台首页</a>
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
                    <a href="{|U:'Content/Index/index'}">文章管理</a>
                </dd>
                <dd>
                    <a href="{|U:'Category/Index/index'}">栏目管理</a>
                </dd>
            </dl>
        </div>
    </div>
    <!--主体左侧导航-->
    <div class="top_content">
        <iframe src="{|U:'welcome'}" name="iframe" scrolling="auto" frameborder="0" style="height: 100%;width: 100%;"></iframe>
    </div>
    <!--内容显示区域-->
</div>
<!--左侧导航-->
</body>
</html>