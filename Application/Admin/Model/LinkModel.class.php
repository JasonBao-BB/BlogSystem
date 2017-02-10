<?php
namespace Admin\Model;
use Think\Model;
class LinkModel extends Model{
   
    protected $_validate=array(
        array('title','require','Link Name Cannot be Empty',1,'regex',3), 
        array('url','require','Link Address Cannot be Empty',1,'regex',3),
        array('title','','Link Name Cannot be Repeat',1,'unique',3), 
        );
}