<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <title>个人信息</title>

	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line4.png"></span>
		</div>
		<ul class="dorm-book">
	
			<li class="upload-head ta-center">
				<input type="file" name="filename" />
				<input type="submit" value="上传头像">
			</li>
			<li>
			    <span class="book-tit">姓名</span>
			    <input type="text" id="sex" name="sex" placeholder="请输入姓名" /> 
			    <div class="sex">
			    	<label class="sex-check">男</label>
			    	<label>女</label>
			    </div>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" id="email" name="email" placeholder="请填写您的个人邮箱地址" />  
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" id="phone" name="phone" placeholder="请填写您的个人手机号码" />  
			</li>
			<li>
				<span class="book-tit">家庭主机</span>
		        <input type="text" id="Hphone" name="Hphone" placeholder="请填写您的家庭主机号码" />  
			</li>
			<li>
				<span class="book-tit">移动电话</span>
		        <input type="text" id="Yphone" name="Yphone" placeholder="请填写您的家庭移动电话号码" />  
			</li>
			<li>
				<div class="show-btn">
					<span class="book-tit">户口迁移</span>
			        <select name="" id="migration">
			        	<option value="">...请选择</option>
			        	<option value="是">是</option>
			        	<option value="否">否</option>
			        </select> 
		       </div>
			</li>
			<li>
				<div class="show-btn">
				<span class="book-tit">党员关系</span>
		        <select name="" id="member">
			        	<option value="">...请选择</option>
			        	<option value="群众">群众</option>
			        	<option value="团员">团员</option>
			        	<option value="党员">党员</option>
			        </select>  
		       </div>
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" id="phone1" name="phone1" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" id="uname" name="uname" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">所在地地址</span>
			    <input type="text" id="location" name="location" placeholder="所在地地址"/> 
			</li>
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" id="detailed" name="detailed" placeholder="请填写您的详细地址" />  
			</li>
		</ul>
		<div class="step-btn">
				<a href="dorm-book"   class="ta-center db">下一步</a>
		</div>
  <script src="./js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="./js/basic.js"></script>	
  <script type="text/javascript" src="./js/rem.js"></script>	
	</body>
</html>
<script>
	$(function(){
		$('.step-btn').click(function(){


       	var sex=$('#sex').val();
       	var email=$('#email').val();
       	var phone=$('#phone').val();
       	var Hphone=$('#Hphone').val();
       	var Yphone=$('#Yphone').val();
       	var phone1=$('#phone1').val();
       	var uname=$('#uname').val();
       	var location=$('#location').val();
       	var detailed=$('#detailed').val();
       	var migration=$('#migration').val();
       	var member=$('#member').val();
       	//var member=$('#member').val();
       	//var token="{{csrf_token()}}";
       	//alert(email)
               $.ajax({
                    url:"http://www.laravel.com/public/user_add",  
        			dataType:'jsonp',
        			type:'get',
        			jsonp:'callback',  
                    data:{migration:migration,member:member,sex:sex,email:email,phone:phone,Hphone:Hphone,Yphone:Yphone,phone1:phone1,uname:uname,location:location,detailed:detailed},
                     success:function(data){
                             alert(data);
                             
                     }
               });
            });
       });
</script>
