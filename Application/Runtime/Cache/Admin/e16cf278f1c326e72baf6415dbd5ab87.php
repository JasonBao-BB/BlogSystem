<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html  lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>BackEnd Management</title>
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/blog/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost:8888/blog/Application/Admin/Public/css/main.css"/>
    <script type="text/javascript" src="http://localhost:8888/blog/Application/Admin/Public/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="http://localhost:8888/blog/Application/Admin/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="http://localhost:8888/blog/Application/Admin/Public/ueditor/ueditor.all.js"></script>
    <script type="text/javascript" src="http://localhost:8888/blog/Application/Admin/Public/ueditor/lang/en/en.js"></script>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">Home Page</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">Link Management</a><span class="crumb-step">&gt;</span><span>Add Article</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/blog/index.php/Article/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <!-- Input Name -->
                            <tr>
                                <th><i class="require-red">*</i>Article Name:</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                           <!-- Input Description -->
                             <tr>
                                <th><i class="require-red">*</i>Article Description:</th>
                                <td>
                                    <textarea class="common-text required" name="article_desc" style="width: 300px; height: 50px;"></textarea>
                                </td>
                            </tr>
                            <!-- Input Picture -->
                             <tr>
                                <th><i class="require-red">*</i>Article Picture:</th>
                                <td>
                                    <input type="file" name="pic" size="10">
                                </td>
                            </tr>
                            <!-- Input Category Id -->
                            <tr>
                                <th><i class="require-red">*</i>Article Category:</th>
                                <td>
                                    <select name="cateid">
                                        <option>Choose Category</option>
                                        <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <th><i class="require-red">*</i>Article Content:</th>
                                <td>
                                     <textarea id="container" name="content"></textarea>

                                </td>
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

<script type="text/javascript">
        var ue = UE.getEditor('container',{initialFrameWidth:800,initialFrameHeight:400,});
</script>


</body>
</html>