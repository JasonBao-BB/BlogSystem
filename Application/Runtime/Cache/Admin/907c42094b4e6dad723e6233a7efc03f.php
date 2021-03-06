<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BackEnd Management</title>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/css/main.css"/>
    <script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a class="navbar-brand" href="index.html">Back Management</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">Home Page</a></li>
                <li><a href="http://127.0.0.1/blog/Application/Home/View/index" target="_blank">Website Home Page</a></li>
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
                    <a href="#"><i class="icon-font">&#xe003;</i>Operating</a>
                    <ul class="sub-menu">
                        <li><a href="/blog/index.php/Admin/article/edit">Article Manage</a></li>         
                        <li><a href="/blog/index.php/Admin/cate/lst">Category Manage</a></li>          
                        <li><a href="/blog/index.php/Admin/admin/lst">Administer Manage</a></li>
                        <li><a href="/blog/index.php/Admin/link/lst">Linking</a></li>
                        
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">Home Page</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">Link Management</a><span class="crumb-step">&gt;</span><span>Edit Link</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/blog/index.php/Admin/Link/edit" method="post" id="myform" name="myform">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>Link Name：</th>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo ($links["id"]); ?>">
                                     <input class="common-text required" id="title" name="title" size="50" value="<?php echo ($links["title"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>Link Address：</th>
                                <td><input class="common-text required" id="url" name="url" size="50" value="<?php echo ($links["url"]); ?>" type="text"></td>
                            </tr>
                            
                            <tr>
                                <th><i class="require-red">*</i>Link Description：</th>
                                <td><input class="common-text required" id="desc" name="desc" size="50" value="<?php echo ($links["desc"]); ?>" type="text"></td>
                            </tr>
                            
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="SUBMIT" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="BACK" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>