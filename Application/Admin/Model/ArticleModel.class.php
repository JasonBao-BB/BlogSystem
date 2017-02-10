<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model{
   
    protected $_validate=array(
        array('title','require','Article Name Cannot be Empty',1,'regex',3), 
        array('article_desc','require','Article Description Cannot be Empty',1,'regex',3),
        array('cateid','require','Article category Cannot be Empty',1,'regex',3),
        array('content','require','Article content Cannot be Empty',1,'regex',3),
        array('title','','Link Name Cannot be Repeat',1,'unique',3), 
        );
}