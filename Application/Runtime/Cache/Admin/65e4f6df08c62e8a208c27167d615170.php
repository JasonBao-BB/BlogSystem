<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Back Management</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/blog/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/blog/Application/Admin/Public/css/main.css"/>
    <script type="text/javascript" src="http://localhost:8888/blog/Application/Admin/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<!-- Moder header -->
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
    <!-- Moder LeftPanel-->
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/blog/index.php/index/index">Home Page</a><span class="crumb-step">&gt;</span><span class="crumb-name">Link Management</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">Sort:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">ALL</option>
                                   
                                </select>
                            </td>
                            <th width="70">Key:</th>
                            <td><input class="common-text" placeholder="" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="SEARCH" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" action="/blog/index.php/Link/sort" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/blog/index.php/Link/add"><i class="icon-font"></i>Add Link</a>
                        <a id="updateOrd" href="/blog/index.php/Link/sort"><i class="icon-font"></i><input class="btn btn-primary btn2"  type="submit" value="SORT"/></a>
                        
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr> 
                            
                            <th>ID</th>
                            <th>Link Name</th>
                            <th>Link Address</th>
                            <th>Link Description</th>
                            <th>Operating</th>
                        </tr>
                        <!-- Dynamic create the table row -->
                        <?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td ><?php echo ($vo["id"]); ?></td>
                            <td  title="<?php echo ($vo["catename"]); ?>"><?php echo ($vo["title"]); ?>
                            </td>
                            <td  title="<?php echo ($vo["catename"]); ?>"><a target="_blank" href="#" title="<?php echo ($vo["catename"]); ?>"><?php echo ($vo["url"]); ?></a>
                            </td>
                            <td title="<?php echo ($vo["catename"]); ?>"><a target="_blank" href="#" title="<?php echo ($vo["catename"]); ?>"><?php echo ($vo["desc"]); ?></a>
                            </td>
                            <td>
                                <a class="link-update" href="/blog/index.php/Link/edit/id/<?php echo ($vo["id"]); ?>">Edit</a>
                                <a class="link-del" onclick="return confirm('Do You Really Want to Delete?');" href="/blog/index.php/Link/del/id/<?php echo ($vo["id"]); ?>">Delete</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                    </table>
                    <div class="list-page"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>