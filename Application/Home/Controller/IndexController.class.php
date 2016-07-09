<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }
    public function blog()
    {
        $blog=M('blog');
        $data=$blog->select();
        $this->assign('data',$data);
        $this->display();
    }
    public function newsblog($id)
    {
        $blog=M('blog');
        $data=$blog->where('blog_id = '.$id)->select();
        $this->assign('data',$data[0]);
        $this->display();
    }
    public function csdmxd()
    {
        $this->display();
    }
    public function add_blog()
    {
        $blog=M('blog');
        date_default_timezone_set('PRC');
        $data["blog_name"]=I("post.name");
        $data["blog_abstract"]=htmlspecialchars_decode(I("post.abstract"));
        $data["blog_text"]=htmlspecialchars_decode(I("post.text"));
        $data["blog_create_time"]=date('Y-m-d H:i:s');
        $blog->add($data);
        $this->success("填加成功",U('index/csdmxd'));
    }
}