<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 修改广告 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/Public/Styles/main.css" rel="stylesheet" type="text/css" />
<script src="/Public/Js/jquery.js" type="text/javascript"></script>
</head>
<body>
<h1>
    <span class="action-span"><a href="/Ad/Ad/lst">广告列表</a></span>
    <span class="action-span1"><a href="#">ECSHOP 广告中心</a></span>
    <span id="search_id" class="action-span1"> - 修改广告 </span>
    <div style="clear:both"></div>
</h1>
<div class="main-div">
    <form method="post" action="/Ad/Ad/add" enctype="multipart/form-data" >
      
        <table cellspacing="1" cellpadding="3" width="100%">
                  <tr>
                <td class="label">广告位id:</td>
                <td>
                    <select name="pos_id">
                        <?php foreach($pos as $p):?>
                        <option value="<?php echo $p['id']?>"><?php echo $p['pos_name']?></option>
                        <?php endforeach;?>
                    </select>   
                                  
                                                            <span class="require-field">*</span>
                                    </td>
            </tr>
                        <tr>
                <td class="label">广告名称:</td>
                <td>
                                        <input type="text" name="ad_name" maxlength="60" />
                                                            <span class="require-field">*</span>
                                    </td>
            </tr>
               
                     <tr>
                <td class="label">是否启用:</td>
                <td>
                                      
                                        <input type="radio" checked='checked' value="是" name="is_on">是                                         <input type="radio"  value="否" name="is_on">否                        
                                                            <span class="require-field">*</span>
                                    </td>
            </tr>
                     <tr>
                <td class="label">广告类型:</td>
                <td>
                                      
                                        <input type="radio" checked='checked' value="图片" name="ad_type">图片                                         <input type="radio"  value="动画" name="ad_type">动画                        
                                                            <span class="require-field">*</span>
                                    </td>
            </tr>
            <tr class="addre">
                <td class="label">图片的地址:</td>
                <td>
                
                                        <input id="pic" type="file" name="img_url" maxlength="70" />
                                                        </td>
            </tr>
            <tr class="addre">
                <td class="label">链接地址:</td>
                <td>
                                        <input type="text" name="link" maxlength="70" />
                                                        </td>
            </tr>
            <tr id="donghua" style="display:none;">
                <td class="label">动画的图片信息:</td>
                <td>
                    <input type="button" id='addimg' value="再来一张"><br/><br/>
                    图片:<input type="file" name='cart_img[]'> <br/><br/>
                        
                    链接:<input type="text" size="40" name="cart_link[]"/><br/><br/><hr/>
                                                        </td>
            </tr>   
            <tr>
                <td colspan="2" align="center"><br />
                    <input type="submit" class="button" value=" 确定 " />
                    <input type="reset" class="button" value=" 重置 " />
                </td>
            </tr>
        </table>
        
    </form>
</div>

<div id="footer">
共执行 1 个查询，用时 0.018952 秒，Gzip 已禁用，内存占用 2.197 MB<br />
版权所有 &copy; 2005-2012 高端大气上档次有限公司，并保留所有权利。</div>
</body>
</html>
<script>
    $('#addimg').click(function(){
        
     var tr=$('#addimg').parent();
     tr.append('图片:<input type="file" name="cart_img[]"> <br/><br/> 链接:<input type="text" size="40" name="cart_link[]"/><br/><br/><hr/>');
        
    });

  $('input[name="ad_type"]').click(function(){
   
   var val=$(this).attr("value");
   if(val=="动画"){
       $('.addre').hide();
       $('#donghua').show();
       
   }else{
       
       $('.addre').show();
       $('#donghua').hide();  
       
   }
      
    });
$("#pic").change(function(){
	var pic = this.files[0];
	var xiao = window.URL.createObjectURL(pic);
	$("#pre_img").attr('src', xiao);
});
</script>