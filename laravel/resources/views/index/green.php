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
		<title>绿色通道</title>
		<body>
			<div class="header">
				<span>绿色通道</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain">
				<ul class="dorm-book">
					<li class="state-box">
						申请状态：
						<span class="state-img"><img src="img/state.png"></span>
						<span class="state">审核通过</span>
					</li>
				</ul>
				<ul class="dorm-book mt3">
					<li>
						<div class="show-btn">
							<span class="book-tit">申请类型</span>
							<input type="text" name="name" placeholder="请选择您的申请类型" disabled="disabled" />
						</div>
						<div class="checkshow">
							<h4 class="ta-center">申请类型</h4>
							<p class="checked">缓交学费</p>
							<p class="checked">助学贷款</p>
							<p class="checked">免交学费</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="greenway">
					<ul class="hd clearfix">
						<li class="active">个人信息</li>
						<li>家庭情况</li>
						<li>申请原因</li>
						<li>证明材料</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit">姓名</span>
									<input type="text" id="sex" name="sex" placeholder="请输入姓名" />
									<div class="sex">
										<label class="sex-check">男</label>
										<label>女</label>
									</div>
								</li>
								<li>
									<span class="book-tit">民族</span>
									<input type="text" id="Nation" name="Nation" placeholder="请填写您的民族类别" />
								</li>
								<li>
									<span class="book-tit">手机</span>
									<input type="text" id="phone" name="phone" placeholder="请填写您的个人手机号码" />
								</li>
								<li>
									<span class="book-tit">出生年月</span>
									<input type="text" id="birth" name="birth" placeholder="请填写您的出生日期" />
								</li>
								<li>
									<span class="book-tit">身份证号</span>
									<input type="text" id="card" name="card" placeholder="请填写您的身份证号码" />
								</li>
								<li>
									<span class="book-tit">联系手机</span>
									<input type="text" id="phone1" name="phone1" placeholder="请填写您的手机联系号码" />
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">户籍类型</span>
										<input type="text" name="name" placeholder="请选择您的户籍类型" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<h4 class="ta-center">户籍类型</h4>
										<p class="checked">是</p>
										<p>否</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">政治面貌</span>
										<input type="text" name="name" placeholder="请选择您的政治面貌" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<p class="checked">群众</p>
										<p>团员</p>
										<p>党员</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									
									<span class="book-tit">居住地址</span>
									<input type="text" id="Residential" name="Residential" placeholder="请所在地地址" />
								</li>
								<li>
									<span class="book-tit">详细地址</span>
									<input type="text" id="detailed" name="detailed" placeholder="请填写您的详细地址" />
								</li>
							</ul>
						</div>
						<div>
							<ul class="dorm-book">
								<li>
									<span class="book-tit house">家庭成员1</span>
									<input type="text" id="Family" name="Family" placeholder="请填写家庭成员1的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" id="relationship" name="relationship" placeholder="请填写您与家庭成员1的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" id="unit" name="unit" placeholder="请填写家庭成员1的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" id="annual" name="annual" placeholder="请填写家庭成员1的年收入情况" class="house-input" />
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea id="content" placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
						<div class="prove clearfix">
							<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
								<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
						</div>
					</div>
				</div>
				</div>
				<div class="step-btn">
					<a  class="ta-center db">提交</a>
				</div>
			<div class="cover-bg"></div>
			<script src="./js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="./js/basic.js"></script>
			<script type="text/javascript" src="./js/rem.js"></script>
		</body>

</html>
<script>
	$('.step-btn').click(function(){
		//alert(2121)
		var sex=$('#sex').val();
		var Nation=$('#Nation').val();
		var phone=$('#phone').val();
		var birth=$('#birth').val();
		var card=$('#card').val();
		var phone1=$('#phone1').val();
		var Residential=$('#Residential').val()
		var detailed=$('#detailed').val()
		var Family=$('#Family').val()
		var relationship=$('#relationship').val()
		var unit=$('#unit').val()
		var annual=$('#annual').val()
		var content=$('#content').val()
		//var token='{}';
		// var str=$('#name').val()+$('#number').val()+
		// $('#college').val()+$('#major').val()+$('#card').val()+
		// $('#time').val();
		//alert(str);
		$.ajax({ 

        url:"http://www.laravel.com/public/green_add",  
        dataType:'jsonp',
        type:'get',  
        data:{sex:sex,Nation:Nation,phone:phone,birth:birth,card:card,phone1:phone1,Residential:Residential,detailed:detailed,Family:Family,relationship:relationship,unit:unit,annual:annual,content:content}, 
        jsonp:'callback',  
        success:function(msg) {  
        
        	alert(msg)
             //console.log(msg);
        }  
    });  
		
})
</script>