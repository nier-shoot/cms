<?php

/**
 * 栏目模型
 * Class CategoryModel
 * @author hdxj<houdunwangxj@gmail.com>
 */
class CategoryModel extends Model
{
    public $validate=array(
        array('cat_name','nonull','栏目名不能为空',2,3),
    );
    //添加栏目
    public function cat_add(){
        //执行验证
        if($this->create()){
            //添加数据
            $this->add();
            //更新缓存
            $this->update_cache();
            return true;
        }else{
            return false;
        }
    }
    //更新栏目缓存
    public function update_cache(){
        //删除缓存
        $data = $this->all();
        $data = Data::tree($data,'cat_name');
        $cat=array();
        foreach($data as $d){
            $cat[$d['cid']]=$d;
        }
        F('category',$cat,CATEGORY_CACHE_PATH);
    }
}













