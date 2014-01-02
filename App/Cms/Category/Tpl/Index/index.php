<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>栏目管理</title>
    <hdui/>
    <css file='__CONTROL_TPL__/css/css.css'/>
</head>
<body>
<div class='warp'>
    <div class="menu_list">
        <ul>
            <li><a href="javascript:;" class="action">栏目列表</a></li>
            <li><a href="{|U:'add'}">添加顶级栏目</a></li>
            <li><a href="{|U:'update_cache'}">更新栏目缓存</a></li>
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
        <list from='$category' name='c'>
        <tr>
            <td>{$c.cid}</td>
            <td>{$c._name}</td>
            <td>
                <a href='{|U:"add",array("pid"=>$c["cid"])}'>添加子栏目</a> |
                <a href="">删除</a> |
                <a href="">编辑</a> |
                <a href="">查看</a>
            </td>
        </tr>
        </list>
    </table>
</div>
</body>
</html>














