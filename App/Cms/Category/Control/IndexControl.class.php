
<?php

/**
 * 栏目管理应用
 * Class IndexControl
 * @author hdxj
 */
class IndexControl extends Control
{
    //栏目模型
    private $db;
    //栏目缓存
    private $category;

    public function __init()
    {
        $this->db = K('Category');
        $this->category = F('category', false, CATEGORY_CACHE_PATH);
    }

    //显示栏目列表
    function index()
    {
        $this->assign('category', $this->category);
        $this->display();
    }

    //添加栏目
    function add()
    {
        if (IS_POST) {
            if ($this->db->cat_add()) {
                $this->success('添加栏目成功', 'index');
            } else {
                $this->error($this->db->error);
            }
        } else {
            $pname = '顶级栏目';
            if ($pid = Q('get.pid')) {
                $pname = $this->category[$pid]['cat_name'];
            }
            $this->assign("pname", $pname);
            $this->display();
        }
    }

    //栏目名称检测（是否有同名栏目）
    function check_category_name()
    {
        $cat_name = $_POST['cat_name'];
        echo $this->db->where("cat_name='$cat_name'")->find() ? 0 : 1;
        exit;
    }

    //更新缓存
    function update_cache()
    {
        $this->db->update_cache();
        $this->success('缓存更新成功');
    }
}

?>