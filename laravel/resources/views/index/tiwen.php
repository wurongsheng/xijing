<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
		<title>我要提问</title>

		<body>
			<div class="header">
				<span>我要提问</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain"  style="padding-top:3%;">
				 <div class="reason">	
				<textarea id="emerson" placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
				<input type="hidden" id="time" name="time" value="<?php echo date('Y-m-d H:i:s')?>">
			</div>
			<div class="step-btn">
					<a  class="ta-center db">提交</a>
			</div>
			</div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>

</html>
<script>
	$(function(){
		$('.step-btn').click(function(){

		var emerson=$('#emerson').val();
		var time = $("#time").val();
       	//alert(email)
               $.ajax({
                    url:"http://www.laravel.com/public/tiwen_add",  
        			dataType:'jsonp',
        			type:'get',
        			jsonp:'callback',  
                    data:{emerson:emerson,time:time},
                     success:function(data){
                             alert(data);
                             
                     }
               });
            });
       });
</script>