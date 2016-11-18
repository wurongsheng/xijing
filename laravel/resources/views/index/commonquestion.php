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
  <title>常见问题</title>
	<body style="background: #eee;">
		<div class="header">
				<span>常见问题</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
		<div class="banner">
			<img src="img/self-report.png">
		</div>
		<?php foreach ($arr as $k => $v): ?>
		<div class="answer-box">
			<ul class="answer-content">
				<a href="uploaDate.html">
				<li class="answer-list">
					<h3 class="list-tit"><?php echo $v['title'] ?></h3>
				    <p class="list-txt">
				    <?php echo $v['content'] ?>
				    </p>
				</li>
				</a>
			</ul>
			<?php endforeach ?>
		</div>
	  <script src="./js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="./js/basic.js"></script>	
      <script type="text/javascript" src="./js/rem.js"></script>	
	</body>
</html>
