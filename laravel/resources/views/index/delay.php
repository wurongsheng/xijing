<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="./css/slick.css" />
		<link rel="stylesheet" type="text/css" href="./css/base.css" />
		<link rel="stylesheet" type="text/css" href="./css/style.css" />
		<link rel="stylesheet" type="text/css" href="./css/iconfont/iconfont.css" />
		<title>推迟报到</title>

		<body>
			<div class="header">
				<span>推迟报到</span>
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
						<div >
							<span class="book-tit delay">推迟报到类型</span>
							<select name="" id="delayed">
					        	<option value="">...请选择...</option>
					        	<option value="事假">事假</option>
					        	<option value="病假">病假</option>
					        	<option value="服兵役">服兵役</option>
					        </select> 
						</div>
					</li>
				</ul>
				<div class="delayReport">
					<ul class="hd clearfix">
						<li class="active">个人申请信息</li>
						<li>申请原因</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit delay">姓名</span>
									<input type="text" id="uname" name="name" placeholder="请填写您的姓名" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">考生号</span>
									<input type="text" id="number" name="number" placeholder="请填写您的考生号" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">学院</span>
									<input type="text" id="college" name="college" placeholder="请填写您所在的学院" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">专业</span>
									<input type="text" id="major" name="major" placeholder="请填写您的专业" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">身份证号</span>
									<input type="text" id="card" name="card" placeholder="请填写您的身份证号码" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit">推迟报道时间</span>
		        					<input type="text" id="time" class="sang_Calender" /> 
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea id="content" placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
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
			<script type="text/javascript" src="./datetime.js"></script>
			<script type="text/javascript" src="./ajax.js"></script>
		</body>
		<script>
	$(function(){
		$('.step-btn').click(function(){

		var uname=$('#uname').val();
		var number=$('#number').val();
       	var college=$('#college').val();
       	var major=$('#major').val();
       	var card=$('#card').val();
       	var time=$('#time').val();
       	var content=$('#content').val();
       	//var berth=$('#berth').val();
       	//var token="{{csrf_token()}}";
       	var url="http://www.laravel.com/public/delay_add";
       	var data={uname:uname,number:number,college:college,major:major,card:card,time:time,content:content};
       	ajax(url,data);
            });
       });
</script>