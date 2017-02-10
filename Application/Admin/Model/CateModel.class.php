<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model{
   
    protected $_validate=array(
        array('catename','require',"Category Name Can't be Empty",1,'regex',3), 
        array('catename','','Category Name Cannot be Repeat',1,'unique',3), 
        );
}