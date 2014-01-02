<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array_merge(
    require 'data/config/db.inc.php',
    array(
        //默认访问应用
        'DEFAULT_APP'   => 'Cms',
        //模板文件后缀
        'TPL_FIX'       =>'.php',
        'TPL_ERROR'                     => 'error.php',     //错误信息模板
        'TPL_SUCCESS'                   => 'success.php',   //正确信息模板
    )
);
?>