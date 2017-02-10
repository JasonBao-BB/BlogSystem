<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'  =>array(
     '__PUBLIC__' => SITE_URL.'/Application/Admin/Public', // 更改默认的/Public 替换规则
     '__HOME__' => SITE_URL.'/Application/Home',
     '__ADMIN__' => SITE_URL.'/index.php/Admin'
	),
);