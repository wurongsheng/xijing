<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="./css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="./css/base.css"/>
  <link rel="stylesheet" type="text/css" href="./css/style.css"/>
  <link rel="stylesheet" type="text/css" href="./css/iconfont/iconfont.css"/>
  <title>抵校登记</title>
	<body>
		<div class="header">
			<span>抵校登记</span>
			<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="banner">
			<img src="./img/self-report.png">
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon passbg">3</span>
    			<p class="step-txt">抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line1.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
			<div class="show-btn">
			    <span class="book-tit">交通方式</span>
			    <select name="" id="traffic">
			        	<option value="">...请选择</option>
			        	<option value="飞机">飞机</option>
			        	<option value="火车">火车</option>
			        	<option value="汽车">汽车</option>
			        </select> 
		   </div>
			</li>
			<li>
				<span class="book-tit">接站站点</span>
		        <input type="text" id="station" name="station" placeholder="请选择您目的地的站点位置"/>  
			</li>
			<li>
				<span class="book-tit">出发时间</span>
		        <input type="text" id="dtime" class="sang_Calender" /> 
			</li>
			<li>
				<span class="book-tit">到达时间</span>
		        <input type="text" id="atime" class="sang_Calender" />   
			</li>
			<li>
				<div class="show-btn">					
					<span class="book-tit">是否陪同</span>
			        <select name="" id="accompany">
			        	<option value="">...请选择</option>
			        	<option value="是">是</option>
			        	<option value="否">否</option>
			        </select>
		        </div>
	       </div>
			</li>
			<li>
				<span class="book-tit">陪同人数</span>
		        <input type="text" id="people" name="people" placeholder="请填写您的陪同人数" />  
			</li>
		</ul><!-- href="reportCard" -->
		<div class="step-btn">
			    <a href="dorm-book">上一步</a>
				<a href="reportCard">下一步</a>
		</div>
	  <script src="./js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="./js/basic.js"></script>	
      <script type="text/javascript" src="./js/rem.js"></script>
      <script type="text/javascript" src="./datetime.js"></script>	
	</body>
</html>
<script>
	$(function(){
		$('.step-btn').click(function(){

		var traffic=$('#traffic').val();
		var accompany=$('#accompany').val();
       	var station=$('#station').val();
       	var dtime=$('#dtime').val();
       	var atime=$('#atime').val();
       	var people=$('#people').val();
       	//var berth=$('#berth').val();
       	//var token="{{csrf_token()}}";
       	//alert(email)
               $.ajax({
                    url:"http://www.laravel.com/public/arrive_add",  
        			dataType:'jsonp',
        			type:'get',
        			jsonp:'callback',  
                    data:{station:station,dtime:dtime,atime:atime,people:people,traffic:traffic,accompany:accompany},
                     success:function(data){
                             alert(data);
                             
                     }
               });
            });
       });
</script>