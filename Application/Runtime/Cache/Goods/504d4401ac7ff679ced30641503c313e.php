<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 分类列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Js/jquery.js"></script>
</head>
<body>
<h1>
    <span class="action-span"><a href="/Goods/Category/add">添加分类 </a></span>
    <span class="action-span1"><a href="#">ECSHOP 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 分类 列表 </span>
    <div style="clear:both"></div>
</h1>
<div class="form-div">
    <form action="/Goods/Category/lst.html" method="get" name="searchForm">
    <img src="/Public/Images/icon_search.gif" width="26" height="22" border="0" alt="search" />
    用户名：<input type="text" name="un" size="15" value=""/>
     id：<input type="text" name="id" size="15" value="" />
    <input type="submit" value=" 搜索 " class="button" />
    </form>
</div>
<form method="post" action="/Goods/Category/bdel" name="listForm">
    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">
            <tr>
                <th width="80"><input type="checkbox" class="first_check"></th>
                                <th>id</th>
                                <th>分类名称</th>
                                <th>上级分类</th>
                                <th>操作</th>
            </tr>
            <?php foreach($list as $v):?>            <tr>
                <td class="first-cell" align="center">
                   <input type="checkbox" class="second_check" name="del_check[]" value="<?php echo $v['id']?>" >
                     
                </td>
                                <td align="center">
                   <?php echo $v['id'];?>                </td>
                                <td align="left">
                   <?php echo str_repeat('--',$v['level']*4).$v['cat_name'];?>                </td>
                                <td align="center">
                   <?php echo $v['parent_id'];?>                </td>
                               
             
                <td align="center">
                    <a href="/Goods/Category/save/id/<?php echo $v['id']?>" title="编辑">编辑</a>
                | <a href="/Goods/Category/del/id/<?php echo $v['id']?>" onclick="return confirm('是否要删除?')" title="编辑">移除</a> 
                
                </td>
            </tr>
            <?php endforeach; ?>            <tr><td><input type="submit" value="删除所有"></td><td colspan="4"></td></tr>
            <tr>
                <td align="right" nowrap="true" colspan="3">
                    <div id="turn-page">
                                   </div>
                </td>
            </tr>
        </table>
    </div>
</form>

<div id="footer">
共执行 3 个查询，用时 0.021251 秒，Gzip 已禁用，内存占用 2.194 MB<br />
版权所有 &copy; 2005-2012 高端大气上档次有限公司，并保留所有权利。</div>
</body>
</html>
<script>
$(".first_check").click(function(){
    if($(this).attr("checked")){
    $(".second_check").attr("checked","checked");
    }else{
       $(".second_check").removeAttr("checked"); 
        
    }
    
});


</script>