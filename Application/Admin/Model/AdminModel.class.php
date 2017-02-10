<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
   
    protected $_validate=array(
        array('username','require',"Username Can't be Empty",1,'regex',3), //require
        array('password','require',"Password Can't be Empty",1,'regex',3),  //require
        array('username','','Category Name Cannot be Repeat',1,'unique',3), 
        );
}