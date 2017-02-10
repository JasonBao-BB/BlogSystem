<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class ArticleViewModel extends ViewModel {
   public $viewFields = array(
     'Article'=>array('id','title','article_desc','cateid','pic','_type'=>'LEFT'),
     'Category'=>array('catename', '_on'=>'Article.cateid=Category.id'),

   );
 }