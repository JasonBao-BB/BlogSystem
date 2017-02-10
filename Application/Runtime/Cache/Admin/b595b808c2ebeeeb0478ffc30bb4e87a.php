<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Back-end Management</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/blog/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/blog/Application/Admin/Public/css/main.css"/>
    <script type="text/javascript" src="http://localhost:8888/blog/Application/Admin/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a class="navbar-brand" href="index.html">Back Management</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="http://localhost:8888/blog/index.php/Admin/index/index">Home Page</a></li>
                <li><a href="http://localhost:8888/blog/Application/Home/View/index" target="_blank">Website Home Page</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">Administer</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="#">Quit</a></li>
            </ul>
        </div>
    </div>
</div> 
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>Menu</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <h1 style="color: orange; height: 25px; "><i class="icon-font">&#xe003;</i>Operating</h1>
                    <ul class="sub-menu">
                        <li><a href="/blog/index.php/article/lst">Article Manage</a></li>         
                        <li><a href="/blog/index.php/cate/lst">Category Manage</a></li>          
                        <li><a href="/blog/index.php/admin/lst">Administer Manage</a></li>
                        <li><a href="/blog/index.php/link/lst">Linking</a></li>
                        
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>Welcome Come to Jason's Back-end Management<span><a target="_blank" style="color:#f00; margin:0 20px;" href=""></a></span></span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>Quick Operating</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="http://localhost:8888/blog/index.php/Admin/Article/add"><i class="icon-font">&#xe001;</i>New Article</a>
                    <a href="http://localhost:8888/blog/index.php/Admin/Cate/add"><i class="icon-font">&#xe048;</i>New Article Category</a>
                    <a href="http://localhost:8888/blog/index.php/Admin/Admin/add"><i class="icon-font">&#xe041;</i>New Admins</a>
                    <a href="http://localhost:8888/blog/index.php/Admin/Link/add"><i class="icon-font">&#xe01e;</i>New Link</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>Basic OS Information</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">Operating System</label><span class="res-info">MACos</span>
                    </li>
                    <li>
                        <label class="res-lab">Environment</label><span class="res-info">Apache/2.2.21 (Win64) PHP <?php echo ($version); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">PHP Way</label><span class="res-info">apache2handler</span>
                    </li>
                    <li>
                        <label class="res-lab">Version</label><span class="res-info">v-0.1</span>
                    </li>
                    <li>
                        <label class="res-lab">Upload Limit</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">localtime</label><span class="res-info"><?php echo ($time); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">URL/IP</label><span class="res-info"><?php echo ($url); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info">127.0.0.1</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>Guiding</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">ThinkPHP API</label><span class="res-info"><a href="http://doc.thinkphp.cn/manual.html">http://doc.thinkphp.cn/manual.html</a></span>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>